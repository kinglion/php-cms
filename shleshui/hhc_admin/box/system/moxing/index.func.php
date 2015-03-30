<?php

	function index(){
		if(is_file('./sundry/cache/json/moxing/moxing.php')){
			include './sundry/cache/json/moxing/moxing.php';
			if(!isset($json))
				show_err('错误0x010 您修改过系统文件 导致程序出错！');
			$moxing=json_decode($json,true);
		}else{
			$pdo = get_pdo();
			$moxing = $pdo -> query('select * from '.DB_PRE."moxing");
			$mo=array();
			foreach($moxing as $v){
				$mo[$v['id']]=$v;
			}
			$data = json_encode($mo);
			$json = <<<JSON
<?php

	\$json = '$data';
JSON;
			file_put_contents('./sundry/cache/json/moxing/moxing.php',$json);
		}
		return !empty($moxing)?$moxing:array();
	}