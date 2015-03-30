<?php

/******************************************
 * Conn.class 	hhc_admin 应用层父类
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-06-27 14:20';
 ******************************************/

	class Conn extends tpl{
		public function __construct(){
		}
		public function Model(){
			echo 'Model不存在';
		}

		public function Action(){
			echo 'Action 不存在';
		}

		public function run(){
			//判断用户是否登陆
			if(!isset($_SESSION))
				session_start();
			//获取来源地址
			setcookie('lurl','?'.$_SERVER['QUERY_STRING']);
			//用户未登录
			if(!empty($_SESSION['go_out'])){
				header('Location:?h=get&c=login');
				exit;				
			}
			if(empty($_SESSION['user_id']) && empty($_COOKIE['user_rem'])){
				header('Location:?h=get&c=login');
				exit;
			}
			if(empty($_SESSION['user_id']) && !empty($_COOKIE['user_rem'])){
				//记住密码
				$pdo = get_pdo();
				$res = $pdo -> query('select `user_id`,`user_name`,`username`,`login_ip`,`rem_ip` from `'.DB_PRE."user` where `user_id` = '{$_COOKIE['user_rem']}'",'');
				if(empty($res)){
					$_SESSION['user_id']='';
					header('Location:?h=get&c=login');
					exit;
				}
				$ip=get_ip();
				if($ip != $res['rem_ip']){
					//ip地址不对
					$_SESSION['user_id']='';
					header('Location:?h=get&c=login');
					exit;
				}
				$_SESSION['user_id'] = $res['user_id'];
			}
			setcookie('sessid',session_id());
		
			
			include APP_DIR."/box/res/left_nav.php";
			
			$this->assign('left_nav',$left_nav);
		}
	}
?>