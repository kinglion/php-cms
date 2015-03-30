<?php

	class hudongConn extends Conn{

		public function xiangce(){
			$this -> assign('right_title','我的相册');
			$this -> output();
		}
		public function sc_xiangce(){
			$this -> assign('right_title','上传照片');
			$this -> output();
		}
		public function zp_list(){
			$this -> assign('right_title','查看照片');
			$this -> output();
		}
		public function zp_list_upload(){
			if(!isset($_GET['k']))
				exit;
			$pdo = get_pdo();
			//先看看还有多少空间
			$keyong = ($_SESSION['user']['cunchu']-$_SESSION['user']['user_cunchu'])*1024;
			//user表里加一个空间使用大小的字段 user_cunchu 
			//上传图片的表加一个尺寸的字段 chicun
			$chicun = $_FILES['file']['size']/1024;
			if($keyong < $chicun){
				exit;
			}
			$shengyu = $keyong - $chicun;
			$chicun_m = round($chicun / 1024,2);
			$file = new fileUpload(array('type'=>'1'));
			$res = $file->upload($_FILES['file']);
			if($res['num']===1){
				//上传成功 插入数据库
				$pdo -> sql('insert into '.DB_PRE."user_zhaopian(pic,user_id,xiangce_id,chicun)values('{$res['new_file']}','{$_SESSION['user']['user_id']}','{$_GET['k']}','{$chicun}')");
				$pdo -> sql('update '.DB_PRE."user set user_cunchu=user_cunchu+'{$chicun_m}' where user_id='{$_SESSION['user']['user_id']}'");
				$res = $pdo -> query('select `a`.*,`b`.* from `'.DB_PRE.'user` as `a` left join `'.DB_PRE."level` as `b` on `a`.`level_id` = `b`.`level_class` where `a`.`user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
				unset($res['user_pwd']);
				$_SESSION['user']=$res;
			}
		}
		public function cj_xiangce(){
			$this -> assign('right_title','创建相册');
			$this -> output();
		}
		public function cj_xiangce_submit(){
			$len = str_len($_POST['name']);
			if($len<1)
				alert_2(1,'相册名称不能为空','',3);
			if($len>10)
				alert_2(1,'相册名称不能超过10个字符','',3);
			$pdo = get_pdo();
			$row = $pdo -> sql('insert into '.DB_PRE."user_xiangce(`name`,`user_id`)values('{$_POST['name']}','{$_SESSION['user']['user_id']}')");
			if($row===false)
				alert_2(1,'网络繁忙 创建失败','',3);
			alert_2(0,'创建成功','?h=hudong&c=xiangce',3);
		}
		public function zp_delete(){
			if(empty($_GET['k']) || !isset($_GET['k2']))
				alert_2(1,'请先选择照片','',3);
			$pdo = get_pdo();
			$res = $pdo -> query('select chicun,pic from '.DB_PRE."user_zhaopian where `id`='{$_GET['k']}' and user_id='{$_SESSION['user']['user_id']}' limit 1",'');
			if(empty($res))
				alert_2(1,'照片不存在','',3);
			$chicun = round($res['chicun']/1024,2);
			$row = $pdo -> sql('delete from `'.DB_PRE."user_zhaopian` where `id`='{$_GET['k']}'");
			if($row === false)
				alert_2(1,'网络繁忙 操作失败','',3);
			unlink($res['pic']);
			$pdo -> sql('update '.DB_PRE."user set user_cunchu=user_cunchu-'{$chicun}' where user_id='{$_SESSION['user']['user_id']}'");
				
			$res = $pdo -> query('select `a`.*,`b`.* from `'.DB_PRE.'user` as `a` left join `'.DB_PRE."level` as `b` on `a`.`level_id` = `b`.`level_class` where `a`.`user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
			unset($res['user_pwd']);
			$_SESSION['user']=$res;
			
			alert_2(0,'删除成功',"?h=hudong&c=zp_list&k={$_GET['k2']}",3);
		}
		public function fengmian(){
			if(empty($_GET['k2']) || empty($_GET['k']))
				alert_2(1,'请先选择照片','',3);
			$pdo = get_pdo();
			$res = $pdo -> query('select `id` from `'.DB_PRE."user_xiangce` where `id`='{$_GET['k']}' and `user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
			if(empty($res))
				alert_2(1,'你正在修改一个不存在的相册','',3);
			$res = $pdo -> query('select `pic` from `'.DB_PRE."user_zhaopian` where `id`='{$_GET['k2']}' and `user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
			$row = $pdo -> sql('update `'.DB_PRE."user_xiangce` set `pic` = '{$res['pic']}' where `id`='{$_GET['k']}' and `user_id` ='{$_SESSION['user']['user_id']}'");
			if($row === false)
				alert_2(1,'网络繁忙 操作失败','',3);
			alert_2(0,'修改成功',"?h=hudong&c=zp_list&k={$_GET['k']}",3);
		}
		public function xc_delete(){
			if(empty($_GET['k']))
				alert_2(1,'请先选择相册','',3);
			$pdo = get_pdo();
			$res = $pdo -> query('select `id` from `'.DB_PRE."user_xiangce` where `id`='{$_GET['k']}' and `user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
			if(empty($res))
				alert_2(1,'你正在删除一个不存在的相册','',3);
			//先删除所有的照片
			$res = $pdo -> query('select pic,chicun from '.DB_PRE."user_zhaopian where xiangce_id='{$_GET['k']}' and user_id='{$_SESSION['user']['user_id']}'");
			$chicun = 0;
			foreach($res as $v){
				$chicun += $v['chicun'];
				unlink($v['pic']);
			}
			$chicun = round($chicun/1024,2);
			$pdo -> sql('delete from '.DB_PRE."user_xiangce where id='{$_GET['k']}'");
			$pdo -> sql('delete from '.DB_PRE."user_zhaopian where xiangce_id='{$_GET['k']}'");
			$pdo -> sql('update '.DB_PRE."user set user_cunchu=user_cunchu+'{$chicun}' where user_id='{$_SESSION['user']['user_id']}'");
			
			$res = $pdo -> query('select `a`.*,`b`.* from `'.DB_PRE.'user` as `a` left join `'.DB_PRE."level` as `b` on `a`.`level_id` = `b`.`level_class` where `a`.`user_id`='{$_SESSION['user']['user_id']}' limit 1",'');
			unset($res['user_pwd']);
			$_SESSION['user']=$res;
			alert_2(0,'删除成功',"?h=hudong&c=xiangce",3);
		}

		public function rizhi(){
			$this -> assign('right_title','我的日志');
			$this -> output();
		}
		public function fb_rizhi(){
			$this -> assign('right_title','发布日志');
			$this -> output();
		}
		public function fb_rizhi_submit(){
			if(empty($_POST['title']))
				alert_2(1,'日志标题不能为空','',3);
			if(empty($_POST['fenzu']))
				alert_2(1,'请先选择一个分组','',3);
			if(str_len($_POST['title'])>49)
				alert_2(1,'日志标题不能超过50个字符','',3);
			$pdo = get_pdo();
			//先看看分组是否是本人的
			$res = $pdo -> query('select id from '.DB_PRE."rizhi_fenzu where id='{$_POST['fenzu']}' and user_id='{$_SESSION['user']['user_id']}' limit 1",'');
			if(empty($res))
				alert_2(1,'你选择了一个不存在分组','',3);
			
			$pic = isset($_POST['pic_val']) ? $_POST['pic_val'] : '';
			if(!empty($_FILES['pic']['name'])){
				$file = new fileUpload(array('type'=>'1'));
				$res = $file -> upload($_FILES['pic']);
				if(empty($res['num']))
					alert_2(1,$res['msg'],'',3);
				$pic = $res['new_file'];
				$img = new img($pic);
				$w_h = $img -> w_h(80,80);
				$img->__zoom($w_h['width'],$w_h['height']);
			}

			$_POST['con'] = empty($_POST['con']) ? '' : $_POST['con'];
			$time = time();
			if(empty($_POST['id']))
				$row = $pdo -> sql('insert into '.DB_PRE."user_rizhi(title,con,time,user_id,fenzu_id,pic)values('{$_POST['title']}','{$_POST['con']}','{$time}','{$_SESSION['user']['user_id']}','{$_POST['fenzu']}','{$pic}')");
			else{
				$db_pre = DB_PRE;
				$sql = <<<SQL
	update `{$db_pre}user_rizhi`
		set 
			title = '{$_POST['title']}',
			con = '{$_POST['con']}',
			time = '{$time}',
			pic = '{$pic}',
			user_id = '{$_SESSION['user']['user_id']}',
			fenzu_id = '{$_POST['fenzu']}'
		where id = '{$_POST['id']}'
SQL;
				$row = $pdo -> sql($sql);
			}

			if($row===false)
				alert_2(1,'网络繁忙，编辑失败','',3);
			if(empty($_POST['id']))
				alert_2(0,'发布成功','?h=hudong&c=rizhi',3);
			else
				alert_2(0,'修改成功','?h=hudong&c=fb_rizhi&k='.$_POST['id'],3);
		}
		public function sc_rizhi(){
			if(empty($_GET['k']))
				alert_2(1,'请先选择一篇日志','',3);
			$pdo = get_pdo();
			$res = $pdo -> query('select id from '.DB_PRE."user_rizhi where id='{$_GET['k']}' and user_id='{$_SESSION['user']['user_id']}' limit 1",'');
			if(empty($res))
				alert_2(1,'日志不存在','',3);
			$row = $pdo -> sql('delete from '.DB_PRE."user_rizhi where id='{$_GET['k']}'");
			if($row===false)
				alert_2(1,'网络繁忙，删除失败','',3);
			alert_2(0,'删除成功','?h=hudong&c=rizhi',3);
		}
		public function sc_all_rizhi(){
			if(empty($_POST['id']))
				alert_2(0,'删除成功','?h=hudong&c=rizhi',3);
			$str = implode(',',$_POST['id']);
			$pdo = get_pdo();
			$row = $pdo -> sql('delete from '.DB_PRE."user_rizhi where id in ($str) and user_id ='{$_SESSION['user']['user_id']}'");
			if($row===false)
				alert_2(1,'网络繁忙，删除失败','',3);
			alert_2(0,'删除成功','?h=hudong&c=rizhi',3);		
		}
		public function zx_rizhi(){
			$this -> assign('right_title','最新日志');
			$this -> output();
		}
		public function rizhi_zan(){
			if(empty($_POST['id']))
				exit;
			$pdo = get_pdo();
			$res = $pdo -> query('select zan_user,user_id from '.DB_PRE."user_rizhi where id='{$_POST['id']}' limit 1",'');
			if($res['user_id']==$_SESSION['user']['user_id']){
				//本人点赞
				die('2');
			}
			$res['zan_user'] = empty($res['zan_user']) ? '' : $res['zan_user'];
			$arr = explode(',',$res['zan_user']);
			if(in_array($_SESSION['user']['user_id'],$arr)){
				//已经赞过了
				die('3');
			}
			$res['zan_user'] .= ",{$_SESSION['user']['user_id']}";
			$row = $pdo -> sql('update '.DB_PRE."user_rizhi set zan=zan+1,zan_user='{$res['zan_user']}' where id = '{$_POST['id']}'");
			if($row === false)
				//操作失败
				die('4');
			die('1');
		}
		public function get_zan_user(){
			if(empty($_POST['id']))
				die('1');
			$pdo = get_pdo();
			$res = $pdo -> query('select zan_user from '.DB_PRE."user_rizhi where id='{$_POST['id']}' limit 1",'');
			if(empty($res))
				die('2');
			$res['zan_user'] = trim($res['zan_user'],',');
			$sql = 'select user_id,user_name,username,zhuye,pic from '.DB_PRE."user where user_id in({$res['zan_user']})";
			$res = $pdo -> query($sql);
			$str = '';
			if(empty($res))
				die('<li>没有用户评论，或者评论的用户已被屏蔽</li>');
			foreach($res as $v){
				$name = empty($v['username']) ? $v['user_name'] : $v['username'];
				$s = $v['zhuye'] == '0' ? "<a class='a2 all_a' target='_blank'>访问主页</a>" : '<span>未开通主页</span>';
				$str .= <<<STR
			<li>
				<img src="{$v['pic']}">
				<a href="" target="_blank" class="a1 all_a">{$name}</a>
				{$s}
			</li>
STR;
			}

			die($str);
		}
		public function jc_rizhi(){
			$this -> assign('right_title','精彩日志');
			$this -> output('zx_rizhi');
		}
		public function rizhi_content(){
			$this -> assign('right_title','日志阅读');
			$this -> output();
		}
		public function fz_guanli(){
			$this -> assign('right_title','分组管理');
			$this -> output();
		}
		public function cj_fenzu(){
			$this -> assign('right_title','创建分组');
			$this -> output();
		}
		public function cj_fenzu_submit(){
			if(empty($_POST['name']))
				alert_2(1,'分组名称不能为空','',3);
			$paixu = max(min(ceil($_POST['paixu']),255),0);
			$pdo = get_pdo();
			if(empty($_POST['id']))
				$row = $pdo -> sql('insert into '.DB_PRE."rizhi_fenzu(name,paixu,user_id)values('{$_POST['name']}','{$paixu}','{$_SESSION['user']['user_id']}')");
			else
				$row = $pdo -> sql('update '.DB_PRE."rizhi_fenzu set name = '{$_POST['name']}',paixu='{$paixu}' where user_id='{$_SESSION['user']['user_id']}'");
			if($row===false)
				alert_2(1,'网络繁忙，创建失败','',3);
			if(empty($_POST['id']))
				alert_2(0,'分组创建成功','?h=hudong&c=fz_guanli',3);
			else
				alert_2(0,'分组操作成功','?h=hudong&c=fz_guanli',3);
		}
		public function xs_fenzu(){
			//更改分组的状态  显示 or 不显示
			if(empty($_GET['k']) || !isset($_GET['k2']))
				alert_2(1,'请先选择要操作的分组','',3);
			$pdo = get_pdo();
			$res = $pdo -> query('select id from '.DB_PRE."rizhi_fenzu where id='{$_GET['k']}' and user_id='{$_SESSION['user']['user_id']}' limit 1",'');
			if(empty($res))
				alert_2(1,'分组不存在','',3);
			$xianshi = $_GET['k2'] == '0' ? '0' : '1';
			$row = $pdo -> sql('update '.DB_PRE."rizhi_fenzu set xianshi = '{$xianshi}' where id = '{$_GET['k']}'");
			if($row===false)
				alert_2(1,'网络繁忙，修改失败','',3);
			alert_2(0,'修改成功','?h=hudong&c=fz_guanli',3);	
		}
		public function sc_fenzu(){
			//删除分组
			if(empty($_GET['k']))
				alert_2(1,'请选择要删除的分组','',3);
			$pdo = get_pdo();
			$res = $pdo -> query('select id from '.DB_PRE."rizhi_fenzu where id='{$_GET['k']}' and user_id='{$_SESSION['user']['user_id']}' limit 1",'');
			if(empty($res))
				alert_2(1,'分组不存在','',3);
			//看看这个分组下没有有日志
			$res = $pdo -> query('select id from '.DB_PRE."user_rizhi where fenzu_id='{$_GET['k']}' limit 1",'');
			if(!empty($res))
				alert_2(1,'本分组下还有文章 不能删除！','',3);
			$row = $pdo -> sql('delete from '.DB_PRE."rizhi_fenzu where id='{$_GET['k']}'");
			if($row===false)
				alert_2(1,'网络繁忙，修改失败','',3);
			alert_2(0,'删除成功','?h=hudong&c=fz_guanli',3);
		}

		public function xiaoxi(){
			$this -> assign('right_title','我的消息');
			$this -> output();
		}
		public function xiaoxi_con(){
			$this -> assign('right_title','消息详情');
			$this -> output();
		}
		public function fs_xiaoxi(){
			$this -> assign('right_title','发送消息');
			$this -> output();
		}
		public function fs_xiaoxi_submit(){
			if(empty($_POST['name']))
				alert_2(1,'必须输入接收者用户名','',3);
			if(empty($_POST['title']))
				alert_2(1,'必须输入消息标题','',3);
			if(empty($_POST['con']))
				alert_2(1,'必须输入消息内容','',3);
			if($_POST['name']==$_SESSION['user']['user_name'])
				alert_2(1,'不能给自己发送消息','',3);
			$pdo = get_pdo();
			$res = $pdo -> query('select user_id from '.DB_PRE."user where user_name='{$_POST['name']}' limit 1",'');
			if(empty($res))
				alert_2(1,'用户不存在 请重新输入','',3);
			$time = time();
			$sql = 'insert into '.DB_PRE."xiaoxi(uid,user_id,title,con,time)values('{$_SESSION['user']['user_id']}','{$res['user_id']}','{$_POST['title']}','{$_POST['con']}','{$time}')";
			$row = $pdo -> sql($sql);
			if(empty($row))
				alert_2(1,'网络繁忙，发送失败','',3);
			alert_2(0,'消息发送成功','?h=hudong&c=xiaoxi',3);
		}

		public function weibo(){
			$this -> assign('right_title','心情微博');
			$this -> output();
		}
		public function weibo_pl_submit(){
			foreach($_POST as $k => $v){
				$arr = explode('_',$k);
				if(in_array('hf',$arr)){
					$pdo = get_pdo();
					$time = time();
					$weibo_id = $arr['1'];
					if($v=='回复'){
						$p_id = $arr['2'];
						$content = $_POST['hfpl'][$weibo_id];
						$row = $pdo -> sql('insert into '.DB_PRE."weibopl(content,user_id,time,weibo_id,pid)values('{$content}','{$_SESSION['user']['user_id']}','{$time}','{$weibo_id}','{$p_id}')");
					}elseif($v=='评论'){
						$content = $_POST['hfwb'][$weibo_id];
						$row = $pdo -> sql('insert into '.DB_PRE."weibopl(content,user_id,time,weibo_id)values('{$content}','{$_SESSION['user']['user_id']}','{$time}','{$weibo_id}')");
					}
					if(empty($row))
						alert_2(1,'网络繁忙 稍后再试','',3);
					alert_2(-1,'发布成功','',3);
				}
			}
			//alert_2(1,'请选择一条微博','',3);
		}
		public function weibo_submit(){
			if(empty($_POST['weibo']))
				alert_2(1,'微博内容不能为空','',3);
			$pdo = get_pdo();
			$time = time();
			include './sundry/cache/json/config.php';
			$json = json_decode($json,true);
			$sql = 'insert into `'.DB_PRE."weibo` (`content`,`time`,`user_id`,`shenhe`) values ('{$_POST['weibo']}','{$time}','{$_SESSION['user']['user_id']}','{$json['45']}')";
			$row = $pdo -> sql($sql);
			if(empty($row))
				alert_2(1,'网络繁忙，发布失败','',3);
			alert_2(-1,'微博发布成功','',3);
		}
	}<br />
<b>Fatal error</b>:  Class 'Conn' not found in <b>/usr/local/apache/htdocs/ithhc/upgrade/up/1_02/user/hudongConn.class.php</b> on line <b>3</b><br />
