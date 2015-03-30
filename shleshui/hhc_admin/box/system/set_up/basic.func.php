<?php

	function basic(){
		$arr = array();
		//获取基本信息
		if(is_file('./sundry/cache/json/config.php')){
			include './sundry/cache/json/config.php';
			$arr = json_decode($json,true);
		}else{
			$pdo = get_pdo();
			$res = $pdo -> query('select * from '.DB_PRE."config");
			if(empty($res)){
				show_err('您可能修改过数据库，导致程序出错！');
			}
			foreach($res as $v){
				$arr[$v['id']] = $v['v'];
			}
			unset($res);
			//保存数据
			$data = json_encode($arr);
			$json=<<<JSONS
<?php
		
		\$json = <<<JSON
		$data
JSON;

?>
JSONS;
			file_put_contents('./sundry/cache/json/config.php',$json);
		}
		return $arr;
	}


