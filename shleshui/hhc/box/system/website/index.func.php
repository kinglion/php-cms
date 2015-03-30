<?php

	function index(){
		//先看看此用户是否开启主页
		$pdo = get_pdo();
		$res = $pdo -> query('select zhuye from '.DB_PRE."user where user_id = '{$_GET['k']}' limit 1",'');
		if(empty($res) || $res['zhuye'] == '1')
			alert_2(0,'您所访问的用户不存在或未开通主页','index.php',3000);
		
		//获取用户信息
	}