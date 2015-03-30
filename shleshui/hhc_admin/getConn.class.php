<?php

	class getConn extends Conn{
		public function login(){
			//session_start();
			//v($_SESSION);exit;
			$this -> output();
		}

		public function go_out(){
			session_start();
			unset($_SESSION['user_id']);
			$_SESSION['go_out']='1';
			header('Location: ?');
		}

		public function login_check(){
			$_SERVER['HTTP_REFERER'] = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
			$arr=explode('://',$_SERVER['HTTP_REFERER']);
			$url = !empty($arr['1']) ? $arr['1'] : '';
			$url2 = $_SERVER['HTTP_HOST']."{$_SERVER['PHP_SELF']}?h=get&c=login";
			if(empty($_SERVER['HTTP_REFERER']) || $url != $url2)
				exit;
			if(empty($_POST['name'])){
				echo json_encode(array('0','请输入用户名'));
				exit;
			}
			if(empty($_POST['pwd'])){
				echo json_encode(array('0','请输入密码'));
				exit;
			}
			$pdo = get_pdo();
			$res = $pdo -> query('select `user_id`,`user_pwd`,`err_num`,`err_time`,`guanli` from `'.DB_PRE."user` where `user_name`='{$_POST['name']}' limit 1",'');
			if(empty($res)){
				echo json_encode(array('0','用户名出错'));
				exit;
			}
			if($res['guanli']!='1'){
				echo json_encode(array('0','此用户名没有登陆的权限'));
				exit;
			}
			$res2 = $pdo->query('select * from `'.DB_PRE.'config` where `id` in (1,2)');
			if($res['err_time']!=='0'){
				//账号被屏蔽了
				$time=time();
				$time=$time-intval($res['err_time'],10);
				if($time>=intval($res2['1']['v'],10)){
					//已经可以登录了
					$res['err_num']='1';
					$res['err_time']='0';
					$pdo->sql('update `'.DB_PRE."user` set `err_time` = '0',`err_num`='1' where `user_id` = '{$res['user_id']}'");
				}else{
					$time = time__zone(intval($res2['1']['v'],10)-$time);
					echo json_encode(array('0',"账号被屏蔽，请在{$time}后尝试登录。"));
					exit;
				}
				
			}
			if(md5(md5($_POST['pwd'])) != $res['user_pwd']){
				//密码出错 计算出错的次数
				if(intval($res['err_num'],10)>=intval($res2['0']['v'],10)){
					//出错次数超出指定的
					$time = time();
					$err_time = time__zone($res2['1']['v']);
					$pdo -> sql('update '.DB_PRE."user set `err_time` = '{$time}' where `user_id` = '{$res['user_id']}'");
					echo json_encode(array('0',"账号被屏蔽，请在{$err_time}后尝试登录"));
					exit;
				}else{
					$num=intval($res2['0']['v'],10)-intval($res['err_num'],10);
					$num2 = intval($res['err_num'],10)+1;
					echo json_encode(array('0',"密码出错，你还有{$num}次出错的机会"));
					$pdo -> sql('update `'.DB_PRE."user` set `err_num` = '{$num2}' where `user_id` = '{$res['user_id']}'");
					exit;
				}
			}
			//登录成功
			$pdo->sql('update `'.DB_PRE."user` set `err_time` = '0',`err_num`='1' where `user_id` = '{$res['user_id']}'");
				$ip = get_ip();
			if(!isset($_SESSION))
				session_start();
			$_SESSION['user_id'] = $res['user_id'];

			$pdo -> sql('update `'.DB_PRE."user` set `login_ip` = '{$ip}' where `user_id` = '{$res['user_id']}'");
			if(!empty($_POST['rem_pwd']) && $_POST['rem_pwd']=='1'){
				//记住密码
				if(!empty($ip))
					$pdo -> sql('update `'.DB_PRE."user` set `rem_ip` = '{$ip}' where `user_id` = '{$res['user_id']}'");
				setcookie('user_rem',$res['user_id'],time()+999999);
			}
			//登录成功
			$_SESSION['go_out']='0';
			$url=!empty($_COOKIE['lurl'])?$_COOKIE['lurl']:'?';
			echo json_encode(array('1',$url));
			setcookie('lurl','?',time()-100);
			exit;
		}

		public function ie6(){
			show_err('您现在使用的是ie6浏览器，为了保证功能的完全，请更换浏览器！');
		}

		public function run(){
			
		}
	}