<?php

	function article_update(){
		if(empty($_GET['k']) || empty($_GET['m'])){
			header('Location:?h=article&c=article_moxing');
			exit;
		}
		include './sundry/cache/json/moxing/moxing.php';
		$mx = json_decode($json,true);
		$tb_name = DB_PRE.$mx[$_GET['m']]['moxing_ziduan_table_name'];
		$pdo = get_pdo();
		$res = $pdo -> query("select * from `{$tb_name}` where `con_id` = '{$_GET['k']}' limit 1",'');
		if(empty($res)){
			alert(0,0,'?h=article&c=article_moxing','你正在修改一篇不存在的文章',0);
		}
		return $res;
	}