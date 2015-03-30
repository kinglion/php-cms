<?php



	class ziliaoConn extends Conn{
		public function bianji(){
			$this -> assign('right_title','基本资料');
			$this -> output();
		}
		public function bianji_submit(){
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
			$pdo = get_pdo();
			$row = $pdo -> exec('`'.DB_PRE.'user`','update',$_POST,"where user_id = '{$_SESSION['user']['user_id']}'");
			if($row === false)
				alert_2(1,'资料修改失败 请查看填写是否规范','',3);
			$res = $pdo -> query('select `a`.*,`b`.* from `'.DB_PRE.'user` as `a` left join `'.DB_PRE."level` as `b` on `a`.`level_id` = `b`.`level_class` where `a`.`user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
			unset($res['user_pwd']);
			$_SESSION['user']=$res;
			alert_2(0,'资料修改成功','?h=ziliao&c=bianji',3);
		}
		public function lianxi(){
			$this -> assign('right_title','联系方式');
			$this -> output();
		}
		public function lianxi_submit(){
			$pdo = get_pdo();
			$row = $pdo -> exec('`'.DB_PRE.'user`','update',$_POST,"where user_id = '{$_SESSION['user']['user_id']}'");
			if($row === false)
				alert_2(1,'资料修改失败 请查看填写是否规范','',3);
			$res = $pdo -> query('select `a`.*,`b`.* from `'.DB_PRE.'user` as `a` left join `'.DB_PRE."level` as `b` on `a`.`level_id` = `b`.`level_class` where `a`.`user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
			unset($res['user_pwd']);
			$_SESSION['user']=$res;
			alert_2(0,'资料修改成功','?h=ziliao&c=lianxi',3);
		}
		public function xiangxi(){
			$this -> assign('right_title','详细信息');
			$this -> output();
		}
		public function xiangxi_submit(){
			$pdo = get_pdo();
			//v($_POST);exit;
			$row = $pdo -> exec('`'.DB_PRE.'user`','update',$_POST,"where user_id = '{$_SESSION['user']['user_id']}'");
			if($row === false)
				alert_2(1,'资料修改失败 请查看填写是否规范','',3);
			$res = $pdo -> query('select `a`.*,`b`.* from `'.DB_PRE.'user` as `a` left join `'.DB_PRE."level` as `b` on `a`.`level_id` = `b`.`level_class` where `a`.`user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
			unset($res['user_pwd']);
			$_SESSION['user']=$res;
			alert_2(0,'资料修改成功','?h=ziliao&c=xiangxi',3);
		}

		public function password(){
			$this -> assign('right_title','修改密码');
			$this -> output();
		}
		public function pwd_submit(){
			if(empty($_POST['ymm']))
				alert_2(1,'原密码不能为空','',3);
			if(empty($_POST['xmm']))
				alert_2(1,'新密码不能为空','',3);
			if(empty($_POST['qrmm']))
				alert_2(1,'确认密码不能为空','',3);
			if($_POST['xmm']!=$_POST['qrmm'])
				alert_2(1,'两次输入的密码不相同','',3);
			$pdo = get_pdo();
			$res = $pdo -> query('select user_pwd from '.DB_PRE."user where user_id='{$_SESSION['user']['user_id']}' limit 1",'');
			if(empty($res))
				alert_2(1,'用户信息获取失败','',3);
			$md5_xmm = md5(md5($_POST['xmm']));
			if(md5(md5($_POST['ymm']))!=$res['user_pwd'])
				alert_2(1,'原密码出错','',3);
			$row = $pdo -> sql('update '.DB_PRE."user set user_pwd = '{$md5_xmm}' where user_id='{$_SESSION['user']['user_id']}'");
			if($row === false)
				alert_2(1,'修改失败','',3);
			alert_2(0,'修改成功 下次登陆时生效','?h=ziliao&c=password',3);
		}

		public function avatar(){
			$this -> assign('right_title','修改头像');
			$this -> output();
		}
		public function avatar_submit(){
			if(empty($_POST['pic']))
				alert_2(1,'请先选择头像','',3);
			$pdo = get_pdo();
			$row = $pdo -> sql('update `'.DB_PRE."user` set `pic` = '{$_POST['pic']}' where `user_id` = '{$_SESSION['user']['user_id']}'");
			if($row === false)
				alert_2(1,'修改失败','',3);
			$res = $pdo -> query('select `a`.*,`b`.* from `'.DB_PRE.'user` as `a` left join `'.DB_PRE."level` as `b` on `a`.`level_id` = `b`.`level_class` where `a`.`user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
			unset($res['user_pwd']);
			$_SESSION['user']=$res;
			alert_2(0,'修改成功','?h=ziliao&c=avatar',3);
		}
		public function avatar_delete(){
			if(empty($_GET['k']))
				exit;
			$pdo = get_pdo();
			$res = $pdo -> query('select * from `'.DB_PRE."user_pic` where `id` = '{$_GET['k']}' limit 1",'');
			if(empty($res))
				alert_2(1,'图片不存在','',3);
			$pdo -> sql('delete from `'.DB_PRE."user_pic` where `id` = '{$_GET['k']}'");
			if($res['pic']==$_SESSION['user']['pic']){
				$pdo -> sql('update `'.DB_PRE."user` set `pic` = './sundry/static_file/img/pic/1.jpg' where `user_id` = '{$_SESSION['user']['user_id']}'");
				$res = $pdo -> query('select `a`.*,`b`.* from `'.DB_PRE.'user` as `a` left join `'.DB_PRE."level` as `b` on `a`.`level_id` = `b`.`level_class` where `a`.`user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
				unset($res['user_pwd']);
				$_SESSION['user']=$res;
			}
			alert_2(0,'删除成功','?h=ziliao&c=avatar',3);
		}
		public function avatar_add(){
			$this -> assign('right_title','上传头像');
			$this -> output();
		}
		public function avatar_add_submit(){
			if(!isset($_FILES['pic']['name']))
				alert_2(1,'图片尺寸超出，请尽量使用2M以内文件','',3);
			if(empty($_FILES['pic']['name']))
				alert_2(1,'未选择图片！','',3);
			$file = new fileUpload(array('type'=>'1'));
			$res = $file -> upload($_FILES['pic']);
			if(empty($res['num']))
				alert_2(1,$res['msg'],'',3);
			$pic = $res['new_file'];
			$img = new img($pic);
			$w_h = $img -> w_h(80,80);
			$img->__zoom($w_h['width'],$w_h['height']);
			$pdo = get_pdo();
			$row = $pdo -> sql('insert into `'.DB_PRE."user_pic` (`user_id`,`pic`) values('{$_SESSION['user']['user_id']}','{$pic}')");
			if($row === false)
				alert_2(1,'修改失败','',3);
			$row = $pdo -> sql('update `'.DB_PRE."user` set `pic` = '{$pic}' where `user_id` = '{$_SESSION['user']['user_id']}'");
			if($row === false)
				alert_2(1,'修改失败','',3);
			$res = $pdo -> query('select `a`.*,`b`.* from `'.DB_PRE.'user` as `a` left join `'.DB_PRE."level` as `b` on `a`.`level_id` = `b`.`level_class` where `a`.`user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
			unset($res['user_pwd']);
			$_SESSION['user']=$res;
			alert_2(0,'修改成功','?h=ziliao&c=avatar',3);
		}

		public function jifen(){
			$this -> output();
		}
		public function jinbi(){
			$this -> output();
		}
		public function jindou(){
			$this -> output();
		}
		public function zhuanhuan(){
			$this -> output();
		}
		public function zhuanhuan_submit(){
			$pdo = get_pdo();
			$res = $pdo -> query('select `jinbi`,`jindou` from `'.DB_PRE."user` where `user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
			$jinbi = ceil($res['jinbi']);
			$jindou = ceil($res['jindou']);
			$jifen = ceil($_POST['jifen']);
			include './sundry/cache/json/config.php';
			$arr = json_decode($json,true);
			$jifen_name = $arr['42'];
			$jinbi_name = $arr['43'];
			$jindou_name = $arr['44'];
			if($jifen<=0)
				alert_2(1,"兑换{$jifen_name}最少1个",'',3);
			if($jifen<=$jinbi*100){
				//金币充足 可以转换
				$sheng = $jinbi*100-$jifen;//扣除转换的积分后 剩下的金币*100
				$sheng_jinbi = number_format($sheng/100,'2');
				$sheng = explode('.',$sheng_jinbi);
				$sheng_jinbi = $sheng['0'];//剩下的金币
				$sheng = empty($sheng['1'])?'0':$sheng['1'];
				$sheng_jindou = number_format($sheng/10,1);
				$sheng = explode('.',$sheng_jindou);
				$sheng_jindou = $sheng['0'];//剩下的金币
				$sheng_jifen = empty($sheng['1'])?'0':$sheng['1'];
				$sheng_jifen += $jifen;
				$sql = 'update `'.DB_PRE."user` set `jinbi`='{$sheng_jinbi}',`jindou`=`jindou`+'{$sheng_jindou}',`user_integral`=`user_integral`+'{$sheng_jifen}' where `user_id`='{$_SESSION['user']['user_id']}'";
				$s_jinbi = $jinbi - $sheng_jinbi;
				$con = "将{$s_jinbi}金币转换为{$sheng_jindou}金豆与{$sheng_jifen}积分";
			}else{
				if(($jifen-$jinbi*100)<=$jindou*10){
					//金币+金豆充足
					$sheng = $jindou*10-($jifen-$jinbi*100);
					$sheng_jindou = number_format($sheng/10,1);
					$sheng = explode('.',$sheng_jindou);
					$sheng_jindou = $sheng['0'];//剩下的金币
					$sheng_jifen = empty($sheng['1'])?'0':$sheng['1'];
					$sheng_jifen += $jifen;
					$sql = 'update `'.DB_PRE."user` set `jinbi`='0',`jindou`='{$sheng_jindou}',`user_integral`=`user_integral`+'{$sheng_jifen}' where `user_id`='{$_SESSION['user']['user_id']}'";
					$s_jindou = $jindou - $sheng_jindou;
					$z='将';
					$jinbi = empty($jinbi)?'':"{$jinbi}金币与";
					$con = $z.$jinbi."{$s_jindou}金豆转换为{$sheng_jifen}积分";
				}else{
					alert_2(1,"{$jinbi_name}与{$jindou_name}余额不足",'',3);
				}
			}

			$row = $pdo -> sql($sql);
			if(empty($row))
				alert_2(1,'网络繁忙，请稍后重试','',3);
			$time = time();
			$pdo -> sql('insert into '.DB_PRE."user_zhuanhuan(user_id,xiangqing,time)values('{$_SESSION['user']['user_id']}','{$con}','{$time}')");
			
			$res = $pdo -> query('select `a`.*,`b`.* from `'.DB_PRE.'user` as `a` left join `'.DB_PRE."level` as `b` on `a`.`level_id` = `b`.`level_class` where `a`.`user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
			unset($res['user_pwd']);
			$_SESSION['user']=$res;
			alert_2(0,'兑换成功','?h=ziliao&c=zhuanhuan',3);
		}
		public function chongzhi(){
			$this -> output();
		}
		public function chongzhi_submit(){
			if(empty($_POST['jinbi']))
				alert_2(1,"请输入充值的金币数量",'',3);
			$jinbi = ceil($_POST['jinbi']);
			include './sundry/cache/json/config.php';
			$arr = json_decode($json,true);
			$jinbi_name = $arr['43'];
			if($jinbi<=0)
				alert_2(1,"充值{$jinbi_name}最少1个",'',3);
			//选择支付方式
			$this -> assign('jinbi',$jinbi);
			$this -> output();
		}

		public function dengji(){
			$this -> assign('right_title','我的等级');
			$this -> output();
		}

		public function tuiguang(){
			$this -> assign('right_title','网址推广');
			$this -> output();
		}
		public function tuiguangjilu(){
			$this -> assign('right_title','推广记录');
			$this -> output();
		}
	}