<?php

	class userConn extends Conn{
		/**
		 *	用户列表
		 */
		public function user_list(){
			$c = C();
			$this -> assign('user',$c);
			$this -> output();
		}
		public function user_list_submit(){
			if(!isset($_GET['k']))
				alert(0,0,null,'请选择一个用户',1);
			$pdo = get_pdo();
			$row = $pdo -> sql('update '.DB_PRE."user set shenhe = '{$_GET['k']}' where user_id='{$_GET['k2']}'");
			if($row === false)
				alert(0,0,null,'修改失败！',1);
			alert(1,0,'?h=user&c=user_list','修改成功！');
		}
		public function user_list_go(){
			if(!isset($_GET['k']))
				alert(0,0,'?h=user&c=user_list','请选择一个用户');
			if($_SESSION['user']['user_id']!=$_GET['k']){
				$pdo = get_pdo();
				$sql = 'select `a`.*,`b`.* from `'.DB_PRE.'user` as `a` left join `'.DB_PRE."level` as `b` on `a`.`level_id`=`b`.`level_class`  where `a`.`user_id` = '{$_GET['k']}' limit 1";
				$res = $pdo -> query($sql,'');
				unset($res['user_pwd']);
				$_SESSION['user']=$res;
			}
			if(!empty($_GET['p'])){
				$_GET['p'] = str_replace('hhc_w','?',$_GET['p']);
				$_GET['p'] = str_replace('hhc_d','&',$_GET['p']);
				header("Location: {$_GET['p']}");
			}else
				header('Location: user.php');
		}

		/**
		 *	权限设置
		 */
		public function quanxian(){
			$this -> output();
		}
		public function quanxian_submit(){
			$paixu = 'update '.DB_PRE.'level set `paixu`= case `level_id` ';
			$level_name = ',`level_name` = case `level_id` ';
			$level_class = ',`level_class` = case `level_id` ';
			$experience = ',`experience` = case `level_id` ';
			$level_color = ',`level_color` = case `level_id` ';
			foreach($_POST as $v){
				$paixu .= " when '{$v['id']}' then '{$v['paixu']}'";
				$level_name .= " when '{$v['id']}' then '{$v['level_name']}'";
				$level_class .= " when '{$v['id']}' then '{$v['level_class']}'";
				$experience .= " when '{$v['id']}' then '{$v['experience']}'";
				$level_color .= " when '{$v['id']}' then '{$v['level_color']}'";
			}
			$paixu .= ' end';
			$level_name .= 'end';
			$level_class .= 'end';
			$experience .= 'end';
			$level_color .= 'end';

			$sql = $paixu.$level_name.$level_class.$experience.$level_color;
			$pdo =get_pdo();
			$row = $pdo -> sql($sql);
			if($row === false)
				alert(0,0,null,'修改失败！',1);
			alert(1,0,'?h=user&c=quanxian','修改成功！');
		}
		public function quanxian_add(){
			$this -> output();
		}
		public function quanxian_add_submit(){
			if(empty($_POST['level_class']))
				alert(0,0,null,'等级选项不能为空',1);
			if(empty($_POST['experience']))
				alert(0,0,null,'经验值不能为空',1);
			$_POST['paixu'] = max(min(ceil($_POST['paixu']),59999),0);
			$_POST['level_class'] = max(ceil($_POST['level_class']),1);
			$_POST['experience'] = max(ceil($_POST['experience']),1);
			$pdo = get_pdo();
			//先看看有没有相同经验值或者相同等级的项
			$res = $pdo -> query('select `level_id` from `'.DB_PRE."level` where `level_class` = '{$_POST['level_class']}' limit 1",'');
			if(!empty($res))
				alert(0,0,null,'不能存在相同的等级',1);
			$res = $pdo -> query('select `level_id` from `'.DB_PRE."level` where `experience` = '{$_POST['experience']}' limit 1",'');
			if(!empty($res))
				alert(0,0,null,'不能存在相同的经验值下限',1);
			$sql = 'insert into `'.DB_PRE."level` (`level_name`,`level_class`,`experience`,`paixu`) values ('{$_POST['level_name']}','{$_POST['level_class']}','{$_POST['experience']}','{$_POST['paixu']}')";
			$row = $pdo -> sql($sql);
			if($row === false)
				alert(0,0,null,'添加失败！',1);
			alert(1,0,'?h=user&c=quanxian','创建成功！');
		}
		public function quanxian_update(){
			if(empty($_GET['k']))
				alert(0,0,'?h=user&c=quanxian','请选择要编辑的项');
			$this -> output();
		}
		public function quanxian_update_submit(){
			$xml = get_xml_array('./sundry/static_file/xml/dengji.xml');
			$arr = array();
			foreach($xml['input'] as $k => $v){
				$arr[$k] = $v['@attributes']['name'];
			}
			unset($xml);
			$qx = array();
			foreach($arr as $k => $v){
				if(!in_array($v,$_POST['qx']))
					$qx[$v] = '0';
				else
					$qx[$v] = '1';
			}
			unset($arr);
			unset($_POST['qx']);
			$qx_str = '';
			$qx_str = '';
			foreach($qx as $k => $v){
				$qx_str .= " `{$k}` = '{$v}' ,";
			}
			$qx_str = trim($qx_str,',');
			$w1 = " where `level_id` = '{$_POST['id']}' ";
			if(empty($_POST['tongbu_id']))
				$w = " where `level_id` = '{$_POST['id']}' ";
			else{
				asort($_POST['tongbu_id']);
				$tongbu_id=implode(',',$_POST['tongbu_id']);
				$w = " where `level_id` in ($tongbu_id) ";
			}
			unset($_POST['tongbu_id']);
			$db_pre = DB_PRE;
			$sql = <<<SQL
	update `{$db_pre}level` set {$qx_str} ,
		`jingyan`='{$_POST['jingyan']}',
		`jifen`='{$_POST['jifen']}',
		`qianming`='{$_POST['qianming']}',
		`cunchu`='{$_POST['cunchu']}'
SQL;
			$pdo = get_pdo();
			if($_POST['tongbu'] == '1'){
				$sql .= $w;
				$row = $pdo -> sql($sql);
				if($row === false)
					alert(0,0,null,'修改失败！',1);
				alert(1,0,'?h=user&c=quanxian','修改成功！');
			}else{
				//不更新全部
				$sql .= $w1;
				$row = $pdo -> sql($sql);
				if($row === false)
					alert(0,0,null,'修改失败！',1);
				$sql = "update {$db_pre}level set ";
				switch ($_POST['tongbu']) {
					case '2':
							$sql .= " `jingyan`='{$_POST['jingyan']}' ";
						break;
					case '3':
							$sql .= " `jifen`='{$_POST['jifen']}' ";
						break;
					case '4':
							$sql .= " `qianming`='{$_POST['qianming']}' ";
						break;
					case '5':
							$sql .= " `cunchu`='{$_POST['cunchu']}' ";
						break;
					case '6':
							$sql .= " {$qx_str} ";
						break;
				}
				$sql .= $w;
				$row = $pdo -> sql($sql);
				if($row === false)
					alert(0,0,null,'修改失败！',1);
				alert(1,0,'?h=user&c=quanxian','修改成功！');
			}
		}
		public function quanxian_delete(){
			$pdo = get_pdo();
			$pdo -> sql('delete from `'.DB_PRE."level` where `level_id`='{$_GET['k']}'");
			alert(1,0,'?h=user&c=quanxian','删除成功！');
		}

		/**
		 *	发送消息
		 */
		public function xiaoxi(){
			$this -> output();
		}
		public function xiaoxi_submit(){
			$pdo = get_pdo();
			$res = $pdo -> query('select * from '.DB_PRE."user where user_name='{$_POST['name']}' limit 1",'');
			if(empty($res))
				alert(0,0,null,'用户名不存在',1);
			$time = time();
			$sql = 'insert into '.DB_PRE."xiaoxi(xitong,user_id,title,con,time)values('1','{$res['user_id']}','{$_POST['title']}','{$_POST['con']}','{$time}')";
			$row = $pdo -> sql($sql);
			if($row === false)
				alert(0,0,null,'发送失败！',1);
			alert(1,0,'?h=user&c=xiaoxi','发送成功！');
		}

		/**
		 *	积分管理
		 */
		public function jifen(){
			$this -> output();
		}


		/**
		 *	用户站点管理
		 */
		public function website(){
			$this -> output();
		}
	}