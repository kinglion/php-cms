<?php

	function ziduan_delete(){
		$pdo = get_pdo();
		$res = $pdo -> query('select * from `'.DB_PRE."ziduan` where `ziduan_id` = '{$_GET['k']}'",'');
		if(empty($res))
			alert(0,0,null,'本字段不存在，请重新尝试',1);
		if($res['xitong']=='1')
			alert(0,0,null,'本字段是系统字段 无法删除',1);
		//先获取表
		include './sundry/cache/json/moxing/moxing.php';
		$json = json_decode($json,true);
		$tb_name = $json[$res['moxing_id']]['moxing_ziduan_table_name'];
		//v($res);v($json);
		if(in_array($res['moxing_type'],array('15','16'))){
			//删除相关的表
			if($res['moxing_type']=='15'){
				$sql_q='delete from `'.DB_PRE."pic` where `ziduan_id` = '{$_GET['k']}'";
				$pdo -> sql($sql_q);
			}
			if($res['moxing_type']=='16'){
				$sql_f='delete from `'.DB_PRE."fenlei` where `ziduan_id` = '{$_GET['k']}'";
				$pdo -> sql($sql_f);
			}
		}
		if(!in_array($res['moxing_type'],array('17'))){
			//删除相关的字段
			$sql = 'alter table `'.DB_PRE."{$tb_name}` drop `{$res['en_name']}`";
			$pdo -> sql($sql);
		}
		//删除在ziduan表中的数据
		$sql = 'delete from `'.DB_PRE."ziduan` where `ziduan_id` = '{$res['ziduan_id']}'";
		$pdo -> sql($sql);

		unlink("./sundry/cache/json/moxing/ziduan/{$res['moxing_id']}.php");
		alert(1,7);
	}	

