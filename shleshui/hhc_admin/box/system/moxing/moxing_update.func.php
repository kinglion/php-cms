<?php

	function moxing_update(){
		$pdo = get_pdo();
		$res = $pdo -> query('select * from `'.DB_PRE."moxing` where `id` = '{$_GET['k']}'",'');
		if(empty($res))
			alert(0,0,'?h=moxing','你正在尝试修改一个不存在的模型');
		return $res;

	}
