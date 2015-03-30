<?php

	function pinglun_update(){
		$pdo = get_pdo();
		$res = $pdo -> query('select `con` from `'.DB_PRE."pinglun` where `pinglun_id` = '{$_GET['k']}' limit 1",'');
		return ($res);
	}