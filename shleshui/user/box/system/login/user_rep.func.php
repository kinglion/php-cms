<?php

	function user_rep(){
		include './sundry/cache/json/config.php';
		$json = json_decode($json,true);
		if($json['11']==='0'){
			//不允许注册
			alert_2(-1,$json['16'],'',3);
		}else if($json['11']==='2'){
			if($_GET['c']=='register'){
				if(isset($_POST['yqm'])){
					$pdo = get_pdo();
					$res = $pdo -> query('select * from `'.DB_PRE."yqm` where `name` ='{$_POST['yqm']}'");
					if(empty($res))
						alert_2(1,'邀请码不正确','',3);
					setcookie('yqm',$_POST['yqm']);
				}else{
					return '1';
				}
			}else if($_GET['c']=='reg_submit'){
				if(empty($_COOKIE['yqm']))
					exit;
			}
		}

		return '0';
	}