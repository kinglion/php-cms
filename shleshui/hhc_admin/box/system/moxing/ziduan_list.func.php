<?php

	function ziduan_list(){
		if(is_file("./sundry/cache/json/moxing/ziduan/{$_GET['k']}.php")){
			include "./sundry/cache/json/moxing/ziduan/{$_GET['k']}.php";
			$res = json_decode($json,true);
		}else{
			//判断是否存在这个模型
			include './sundry/cache/json/moxing/moxing.php';
			$json = json_decode($json,true);
			if(!isset($json[$_GET['k']]))
				alert(0,0,null,'此模型不存在',1);
			$pdo = get_pdo();
			$res = $pdo -> query('select * from `'.DB_PRE."ziduan` where `moxing_id` = '{$_GET['k']}' order by `xitong` desc");
			$res = !empty($res) ? $res : array();
			$data = json_encode($res);
			$json = <<<JSON
<?php
	
	\$json='$data';
JSON;
			file_put_contents("./sundry/cache/json/moxing/ziduan/{$_GET['k']}.php",$json);
		}
		return $res;
	}