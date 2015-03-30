<?php

	function reg_submit(){
		//先处理用户名
		if(empty($_POST['user_name']))
			alert_2(1,'请输入用户名','',3);
		include './sundry/cache/json/config.php';
		$json = json_decode($json,true);
		$json['20']=ceil($json['20']);
		if(str_len($_POST['user_name'])<$json['20'])
			alert_2(1,'用户名长度最短'.$json['20'].'个字符','',3);
		if(str_len($_POST['user_name'])>50)
			alert_2(1,'用户名长度最长50个字符','',3);
		$pdo = get_pdo();
		$res = $pdo -> query('select * from `'.DB_PRE."user` where `user_name` like '%{$_POST['user_name']}%' limit 1",'');
		if(!empty($res))
			alert_2(1,'此用户名已被注册','',3);
		//检查密码和确认密码
		if(empty($_POST['user_pwd']))
			alert_2(1,'请输入密码','',3);
		$json['22']=ceil($json['22']);
		$json['23']=ceil($json['23']);
		if($json['24']=='0'){
			//自动开通主页
			$_POST['zhuye']='1';
		}
		if($json['25']=='1'){
			//需要审核
			$_POST['shenhe']='1';
		}
		if($json['28']=='0'){
			//需要审核
			$_POST['user_type']='1';
		}
		if($json['18']=='1'){
			//邮件
			$_POST['youjian']='1';
		}
		$lang=str_len($_POST['user_pwd']);
		if($lang<$json['22'])
			alert_2(1,'密码最短'.$json['22'].'个字符','',3);
		if($lang>$json['23'])
			alert_2(1,'密码最长'.$json['23'].'个字符','',3);
		if($_POST['user_pwd']!==$_POST['rep_pwd'])
			alert_2(1,'两次输入的密码不同','',3);
		$pingbi_tishi = $json['19'];
		//看看用户名是否是不允许的
		include './sundry/cache/json/reg_baoliu.php';
		$baoliu_name = json_decode($baoliu_name,true);
		if(in_array($_POST['user_name'],$baoliu_name))
			die($pingbi_tishi);
		$baoliu_key = json_decode($baoliu_key,true);
			foreach($baoliu_key as $v){
				if(!empty($v)){
					if(strpos($_POST['user_name'],$v)!==false)
						die($pingbi_tishi);
				}
			}
		$_POST['user_pwd'] = md5(md5($_POST['user_pwd']));
		foreach($_FILES as $k => $v){
			if(!empty($v['name']) && !empty($v['tmp_name'])){
				if(!isset($file))
					$file = new fileUpload();
				$res = $file -> upload($v);
				if($res['num']===1)
					$_POST[$k]=$res['new_file'];
				else
					alert_2(1,$res['msg'],'',3);
			}else{
				$_POST[$k]='';
			}
		}
		unset($_POST['hhc_k']);
		unset($_POST['rep_pwd']);
		foreach($_POST as $k => $v){
			if(is_array($v)){
				if($k=='birthday'){
					//生日
					$_POST['b_month'] = $_POST['birthday']['month'];
					$_POST['b_day'] = $_POST['birthday']['day'];
					$_POST['b_year'] = $_POST['birthday']['year'];
					unset($_POST['birthday']);
				}
			}
		}
		$pic = './sundry/static_file/img/pic/'.rand(1,30).'.jpg';
		$_POST['pic']= $pic;
		$row = $pdo -> exec('`'.DB_PRE.'user`','insert',$_POST);

		if(!empty($_COOKIE['extension_uid'])){
			$pdo = get_pdo();
			$res = $pdo -> query('select * from '.DB_PRE."config where id in(46,47,48)");
			$time = time();
			$shuoming = "推荐用户 {$_POST['user_name']} 注册 获得奖励";
			$shuomingz = '';
			$jinbi = 0;
			$jindou = 0;
			$jifen = 0;
			include './sundry/cache/json/config.php';
			$arr = json_decode($json,true);
			$jinbi_name = $arr['43'];
			$jifen_name = $arr['42'];
			$jindou_name = $arr['44'];
			if(!empty($res['0']['v'])){
				//增加积分
				$jifen = ceil($res['0']['v']);
				$shuomingz .= " {$jifen_name}+{$res['0']['v']}";
			}
			if(!empty($res['1']['v'])){
				//增加金豆
				$jindou = ceil($res['1']['v']);
				$shuomingz .= " {$jindou_name}+{$res['1']['v']}";
			}
			if(!empty($res['2']['v'])){
				//增加金币 
				$jinbi = ceil($res['2']['v']);
				$shuomingz .= " {$jinbi_name}+{$res['2']['v']}";
			}
			$shuoming .= $shuomingz;
			$sql1 = 'insert into `'.DB_PRE."tuiguang_jilu` (`time`,`shuoming`,`user_id`)values('{$time}','{$shuoming}','{$_COOKIE['extension_uid']}')";
			$sql2 = 'update `'.DB_PRE."user` set `user_integral`=`user_integral`+'{$jifen}',`jinbi`=`jinbi`+'{$jinbi}',`jindou`=`jindou`+'{$jindou}' where `user_id` = '{$_COOKIE['extension_uid']}'";
			$pdo -> sql($sql1);
			$pdo -> sql($sql2);
			setcookie('extension_uid','');
		}

		if($row === false)
			alert_2(1,'注册失败，请检查后重试','',3);
		$last_id = $pdo -> last_id();
		//如果存在邀请码 则删除
		if(!empty($_COOKIE['yqm'])){
			$pdo -> sql('delete from `'.DB_PRE."yqm` where `name` = '{$_COOKIE['yqm']}'");
		}
		//注册成功
		$res = $pdo -> query('select `a`.*,`b`.* from `'.DB_PRE.'user` as `a` left join `'.DB_PRE."level` as `b` on `a`.`level_id` = `b`.`level_class` where `a`.`user_id`='{$last_id}' limit 1",'');
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
		header('Location: ?');
	}
