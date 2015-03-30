<?php

	class loginConn extends Conn{

		public function goout(){
			if(!isset($_SESSION)){
				if(!empty($_COOKIE['sess_oid']))
					session_id($_COOKIE['sess_oid']);
				session_start();
			}
			unset($_SESSION['user']);
			alert_2(0,'退出登陆成功！','?',3);
		}

		public function login(){
			$this -> output();
		}
		public function login_submit(){
			if(empty($_POST['user_name']))
				alert_2(1,'请输入用户名','',3);
			if(empty($_POST['user_pwd']))
				alert_2(1,'请输入密码','',3);
			$pdo = get_pdo();
			$sql = 'select `a`.*,`b`.* from `'.DB_PRE.'user` as `a` left join `'.DB_PRE."level` as `b` on `a`.`level_id`=`b`.`level_class`  where `a`.`user_name` = '{$_POST['user_name']}' limit 1";
			$res = $pdo -> query($sql,'');
			if(empty($res))
				alert_2(1,'用户不存在','',3);
			if($res['user_pwd']!=md5(md5($_POST['user_pwd'])))
				alert_2(1,'密码出错','',3);

			//登陆成功
			//先判断是否需要邮箱验证
			if($res['youjian']=='1'){
				//需要验证邮箱
				setcookie('uxid',$res['user_id']);
				alert_2(0,"您的账号需要验证邮箱",'?h=login&c=youxiang_reg',3);
			}
			if($res['shenhe']=='1'){
				//需要审核
				alert_2(0,'您的账号需要审核 请耐心等待','index.php',3000000);
			}
			if(!isset($_SESSION))
				session_start();
			$oid = session_id();
			setcookie('sess_oid',$oid);
			unset($res['user_pwd']);
			$_SESSION['user']=$res;
			/*//经验
			$pdo = get_pdo();
			$times = time();
			$year = date('Y',$times);
			$month = date('m',$times);
			$day = date('d',$times);
			$time = mktime(0,0,0,$month,$day,$year);
			$jingyan = $pdo -> query('select * from `'.DB_PRE."user_jingyan` where user_id='{$_SESSION['user']['user_id']}' and `time`='{$time}' limit 1",'');
			if(empty($jingyan)){
				//今天登陆后未奖励经验
				$pdo -> sql('update '.DB_PRE."user ");
				v($_SESSION['user']['jingyan']);
			}
			v($jingyan);
			exit;*/
			$url = !empty($_COOKIE['last_url']) ? $_COOKIE['last_url'] : '?';
			header("Location: $url");
		}

		public function youxiang_reg(){
			$this -> output();
		}
		public function youxiang_reg_submit(){
			//发送邮件
			if(empty($_COOKIE['uxid']))
				exit;
			if(empty($_POST['mail']))
				alert_2(1,"邮箱地址不能为空",'',30000);
			$rand = rander(100);
			$pdo = get_pdo();
			$md5_rand = md5($rand);
			$row = $pdo -> sql('update `'.DB_PRE."user` set `mail_rand`='{$md5_rand}' where `user_id`='{$_COOKIE['uxid']}'");
			if(empty($row))
				alert_2(1,"操作失败",'',3);
			//发送邮件
			$res = $pdo -> query('select * from `'.DB_PRE."mail`");
			$data = array();
			foreach($res as $v){
				$data[$v['k']] = $v;
			}
			include './sundry/cache/json/config.php';
			$json=json_decode($json,true);
			$res=sendmail($data['server']['v'],$data['user_name']['v'],$data['user_pwd']['v'],$data['mail']['v'],$json['4'],"{$json['4']}邮箱验证 重要！","欢迎注册{$json['4']}，现在为您的账户验证邮箱。您的验证网址为：{$_SERVER['HTTP_ORIGIN']}{$_SERVER['SCRIPT_NAME']}?h=login&c=check_mail&k={$rand}。 请复制到浏览器打开。不要将此地址发布给其他人。如果您没有在本网站注册，请忽略此条邮件",$_POST['mail']);
			if($res === true)
				alert_2(0,"验证邮件已发送到您的邮箱 {$_POST['mail']} 请注意查收！",'?h=login&c=login',30000);
			alert_2(0,"验证邮件发送失败，服务器配置有误，如有疑问，请登陆 http://bbs.ithhc.cn 咨询",'?h=login&c=login',30000);
		}

		public function check_mail(){
			$pdo = get_pdo();
			$md5_k = md5($_GET['k']);
			$res = $pdo -> query('select * from `'.DB_PRE."user` where `mail_rand`='{$md5_k}' limit 1",'');
			if(empty($res))
				alert_2(0,'用户不存在或者链接已失效','?',3);
			//认证成功
			$row = $pdo -> sql('update `'.DB_PRE."user` set `mail_rand`='',`youjian`='0' where `user_id`='{$res['user_id']}'");
			if(empty($row))
				alert_2(0,'认证失败','?',3000);
			if(!isset($_SESSION))
				session_start();
			$oid = session_id();
			setcookie('sess_oid',$oid);
			unset($res['user_pwd']);
			$_SESSION['user']=$res;
			alert_2(0,'认证成功，即将跳转至会员中心','?',3);
		}

		public function register(){
			$type = C('user_rep');
			if($type=='1'){
				//需要购买验证码
				include './sundry/cache/json/config.php';
				$json = json_decode($json,true);
				if($json['12']=='0'){
					$this -> assign('gm_yqm','');
					$this -> assign('link','');
				}else{
					$this -> assign('gm_yqm',$json['13']);
					if($json['14']=='0'){
						//购买付款页面
						$this -> assign('link',$json['13']);
					}else{
						$this -> assign('link',$json['15']);
					}
				}
				$this -> output('gm_yam');
			}else{
				$this -> output();
			}
		}

		public function reg_submit(){
			C('user_rep');
			C();
		}

		public function name_rem(){
			if(empty($_GET['name']))
				die('用户名不能为空');
			include './sundry/cache/json/config.php';
			$json = json_decode($json,true);
			$json['20']=ceil($json['20']);
			if(str_len($_GET['name'])<$json['20'])
				die('用户名长度最短'.$json['20'].'个字符');
			if(str_len($_GET['name'])>50)
				die('用户名长度最长50个字符');
			$pingbi_tishi = $json['19'];
			//看看用户名是否是不允许的
			include './sundry/cache/json/reg_baoliu.php';
			$baoliu_name = json_decode($baoliu_name,true);
			if(in_array($_GET['name'],$baoliu_name))
				die($pingbi_tishi);
			$baoliu_key = json_decode($baoliu_key,true);
				foreach($baoliu_key as $v){
					if(!empty($v)){
						if(strpos($_GET['name'],$v)!==false)
							die($pingbi_tishi);
					}
				}
			$pdo = get_pdo();
			$res = $pdo -> query('select * from `'.DB_PRE."user` where `user_name` like '%{$_GET['name']}%' limit 1",'');
			if(!empty($res))
				die('此用户名已被注册');
			echo 'hhc_ok';
		}

		public function pwd_rem(){
			if(empty($_GET['pwd']))
				die('密码不能为空');
			include './sundry/cache/json/config.php';
			$json = json_decode($json,true);
			$json['22']=ceil($json['22']);
			$json['23']=ceil($json['23']);
			$lang=str_len($_GET['pwd']);
			if($lang<$json['22'])
				die('密码最短'.$json['22'].'个字符');
			if($lang>$json['23'])
				die('密码最长'.$json['23'].'个字符');
			echo 'hhc_ok';
		}

		public function run(){
			setcookie('last_url',$_COOKIE['last_url']);
		}

	}
?><br />
<b>Fatal error</b>:  Class 'Conn' not found in <b>/usr/local/apache/htdocs/ithhc/upgrade/up/1_02/user/loginConn.class.php</b> on line <b>3</b><br />
