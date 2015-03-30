<?php

	function ziduan_update(){
		if(empty($_GET['k'])){
			header('Location:?h=moxing');
			exit;
		}$pdo = get_pdo();
		$rs=$pdo -> query('select * from `'.DB_PRE."moxing` where id = {$_GET['k2']}",'');
		if(empty($rs)){
			alert(0,0,'?h=moxing','模型不存在 请重新选择');
		}
		$res = $pdo -> query('select * from `'.DB_PRE."ziduan` where `ziduan_id` = '{$_GET['k']}'",'');
		if(empty($res)){
			alert(0,0,'?h=moxing&c=ziduan_list&k='.$_GET['k2'],'你正在尝试修改一个不存在的字段');
		}
		if($res['xitong']=='1'){
			alert(0,0,null,'系统字段不能修改！',1);
		}
		return $res;
	}