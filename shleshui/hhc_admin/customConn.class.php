<?php

	class customConn extends Conn{
		/**
		 *	单页创建
		 */
		public function danye_create(){
			$this -> output();
		}
		public function danye_create_submit(){
			if(empty($_POST['cn_name']))
				alert(0,0,null,'中文名不能为空');
			if(empty($_POST['en_name']))
				alert(0,0,null,'英文名不能为空');
			if(empty($_POST['tpl']))
				alert(0,0,null,'模板文件名不能为空');
			$pdo = get_pdo();
			$row = $pdo -> sql('insert into `'.DB_PRE."custom` (`cn_name`,`en_name`,`tpl`) values('{$_POST['cn_name']}','{$_POST['en_name']}','{$_POST['tpl']}')");
			if($row === false)
				alert(0,0,null,'添加失败，请检查');
			$pdo -> sql('insert into `'.DB_PRE."danye` (`k`,`title`,`content`) values ('{$_POST['en_name']}','','')");
			unlink('./sundry/cache/json/custom/custom.php');
			unlink('./sundry/cache/json/custom/danye.php');
			alert(1,0,'?','单页创建成功');
		}

		/**
		 *	单页删除
		 */
		public function danye_delete(){
			$pdo = get_pdo();
			$pdo -> sql('delete from `'.DB_PRE."custom` where `en_name`='{$_GET['k']}'");
			$pdo -> sql('delete from `'.DB_PRE."danye` where `k`='{$_GET['k']}'");
			unlink('./sundry/cache/json/custom/custom.php');
			unlink('./sundry/cache/json/custom/danye.php');
			alert(1,0,'?','单页删除成功');
		}

		/**
		 *	单页编辑
		 */
		public function danye_update(){
			$this -> output();
		}
		public function danye_update_submit(){
			$_POST['content']=isset($_POST['content'])?$_POST['content']:'';
			if(empty($_POST['k']))
				alert(0,0,null,'请选择单页');
			$pdo = get_pdo();
			$pdo -> sql('update `'.DB_PRE."danye` set `title`='{$_POST['title']}',`content`='{$_POST['content']}' where `k` ='{$_POST['k']}'");
			unlink('./sundry/cache/json/custom/danye.php');
			alert(1,0,'?h=custom&c=danye_update&k='.$_POST['k'],'单页修改成功');
		}



		/**
		 *	表单
		 */
		public function form_create(){
			$this -> output();
		}
		public function form_create_submit(){
			if(empty($_POST['cn_name']))
				alert(0,0,null,'中文名不能为空',1);
			if(empty($_POST['en_name']))
				alert(0,0,null,'英文名不能为空',1);
			if(empty($_POST['tpl']))
				alert(0,0,null,'模板文件名不能为空',1);
			$pdo = get_pdo();
			$row = $pdo -> sql('insert into `'.DB_PRE."custom` (`cn_name`,`en_name`,`tpl`,`type`) values('{$_POST['cn_name']}','{$_POST['en_name']}','{$_POST['tpl']}','2')");
			if($row === false)
				alert(0,0,null,'添加失败，请检查',1);
			//再单独创建一张表
			$db_pre = DB_PRE;
			$sql = <<<SQL
		create table `{$db_pre}{$_POST['en_name']}`(
				id int unsigned not null primary key auto_increment
			)engine=myisam charset=utf8;
SQL;
			$pdo -> sql($sql);
			unlink('./sundry/cache/json/custom/custom.php');
			alert(1,0,'?','表单创建成功');
		}

		public function form_update(){
			$this -> output();
		}

		public function biaodan_delete(){
			$pdo = get_pdo();
			$pdo -> sql('delete from `'.DB_PRE."custom` where `en_name`='{$_GET['k']}'");
			$pdo -> sql('delete from `'.DB_PRE."myform` where `k`='{$_GET['k']}'");
			$pdo -> sql('drop table `'.DB_PRE."{$_GET['k']}`");
			unlink('./sundry/cache/json/custom/custom.php');
			alert(1,0,'?','表单删除成功');
		}

		public function form_ziduan_create(){
			$this -> output();
		}
		public function form_ziduan_create_submit(){
			$hc=empty($_POST['hc'])?'0':$_POST['hc'];
			$key=empty($_POST['key'])?'':$_POST['key'];
			switch($_POST['type']){
				case '1':
				case '2':
				default :
					$lang = empty($_POST['lang'])?'text':ceil($_POST['lang']);
					if($lang=='text'){
						$type=' text ';
					}else{
						$type = " varchar({$lang}) not null default '' ";
					}
				break;
				case '3':
					$type = ' varchar(100) not null default "" ';
				break;
				case '4':
				case '5':
				case '6':
					$type = ' varchar(500) not null default "" ';
				break;
			}
			$db_pre = DB_PRE;
			$sql = <<<SQL
			insert into {$db_pre}myform 
				(`cn_name`,`en_name`,`hc`,`k`,`tishi`,`type`,`defaults`)
			values
				('{$_POST['cn_name']}','{$_POST['en_name']}','{$hc}','{$key}','{$_POST['tishi']}','{$_POST['type']}','{$_POST['default']}')
SQL;
			$pdo = get_pdo();
			$row = $pdo -> sql($sql);
			if($row === false){
				alert(0,0,null,'创建失败，请检查',1);
			}
			$id = $pdo->last_id();
			if(!empty($key)){
				if(!in_array($key,array('reg'))){
					$sql="alter table `{$db_pre}{$_POST['key']}` add `{$_POST['en_name']}` {$type}";
					$row = $pdo -> sql($sql);
					if($row === false){
						$pdo -> sql("delete from `{$db_pre}myform` where `id` = '{$id}'");
						alert(0,0,null,'创建失败，请检查',1);
					}
				}else{
					if($key=='reg'){
						$sql="alter table `{$db_pre}user` add `{$_POST['en_name']}` {$type}";
						$row = $pdo -> sql($sql);
						if($row === false){
							$pdo -> sql("delete from `{$db_pre}myform` where `id` = '{$id}'");
							alert(0,0,null,'创建失败，请检查',1);
						}
					}
				}
			}
			//ok
			$l_k=empty($hc)?"&key={$key}":"&k={$key}";
			alert(1,0,"?h=custom&c=form_update{$l_k}",'字段创建成功');
		}

		public function form_ziduan_delete(){
			if(empty($_GET['k']) && empty($_GET['key']))
				exit;
			$pdo = get_pdo();
			$pdo -> sql('delete from `'.DB_PRE."myform` where `en_name`='{$_GET['v']}'");
			if(!empty($_GET['key'])){
				$pdo -> sql('alter table `'.DB_PRE."{$_GET['key']}` drop `{$_GET['v']}`");
			}
			alert(1,0,null,'删除成功');
		}

		public function form_ziduan_update_submit(){
			v($_POST);
			$pdo = get_pdo();
			foreach($_POST as $v){
				$v['paixu']=ceil($v['paixu']);
				$v['paixu']=$v['paixu']>60000?60000:$v['paixu'];
				$v['xianshi']=empty($v['xianshi'])?'0':'1';
				$v['list_xianshi']=empty($v['list_xianshi'])?'0':'1';
				$pdo -> sql('update `'.DB_PRE."myform` set `paixu`='{$v['paixu']}',`cn_name`='{$v['cn_name']}',`tishi`='{$v['tishi']}',`xianshi`='{$v['xianshi']}',`list_xianshi`='{$v['list_xianshi']}' where `id`={$v['id']}");
			}
			alert(1,0,null,'修改成功');
		}

		public function form_guanli(){
			if(empty($_GET['k']))
				exit;
			$this -> output();
		}

		public function form_guanli_delete(){
			$pdo = get_pdo();
			$pdo -> sql('delete from `'.DB_PRE."{$_GET['key']}` where id='{$_GET['k']}'");
			alert(1,0,null,'删除成功');
		}

		public function form_guanli_chakan(){
			$this -> output();
		}




		/**
		 *	幻灯片部分
		 */
		public function hdp_create(){
			$this -> output();
		}
		public function hdp_create_submit(){
			if(empty($_POST['cn_name']))
				alert(0,0,null,'中文名不能为空',1);
			if(empty($_POST['en_name']))
				alert(0,0,null,'英文名不能为空',1);
			$pdo = get_pdo();
			$row = $pdo -> sql('insert into `'.DB_PRE."custom` (`cn_name`,`en_name`,`type`) values('{$_POST['cn_name']}','{$_POST['en_name']}','3')");
			if($row === false)
				alert(0,0,null,'添加失败，请检查');
			unlink('./sundry/cache/json/custom/custom.php');
			alert(1,0,'?','幻灯片组创建成功');
		}

		public function hdp_delete(){
			if(empty($_GET['k'])){
				header('Location: ?');
				exit;
			}

			$pdo = get_pdo();
			$pdo -> sql('delete from `'.DB_PRE."hdp` where `custom_id` = '{$_GET['k']}'");
			$pdo -> sql('delete from `'.DB_PRE."custom` where `id` = '{$_GET['k']}'");
			unlink('./sundry/cache/json/custom/custom.php');
			alert(1,0,'?','删除成功');
		}

		public function hdp_update(){
			if(empty($_GET['k'])){
				header('Location: ?');
				exit;
			}
			$this -> output();
		}

		public function hdp_ziduan_create(){
			$this -> output();
		}

		public function hdp_ziduan_create_submit(){
			if(empty($_FILES['file']['name']))
				alert(0,0,null,'请选择图片',1);
			$fileUpload = new fileUpload(array('type'=>'1'));
			$arr = $fileUpload -> upload($_FILES['file']);
			if(empty($arr['num']))
				alert(0,0,null,$arr['msg'],0);
			$pic = $arr['new_file'];
			$pdo = get_pdo();
			$row = $pdo -> sql('insert into '.DB_PRE."hdp (`title`,`alt`,`con`,`pic`,`custom_id`) values('{$_POST['title']}','{$_POST['alt']}','{$_POST['con']}','{$pic}','{$_POST['custom_id']}')");
			if($row === false)
				alert(0,0,null,'添加失败，请检查',1);
			alert(1,0,"?h=custom&c=hdp_update&k={$_POST['custom_id']}",'添加成功');
		}

		public function hdp_ziduan_delete(){
			if(empty($_GET['k']))
				exit;
			$pdo = get_pdo();
			$pdo -> sql('delete from `'.DB_PRE."hdp` where `id`='{$_GET['k']}'");
			alert(1,0,null,'删除成功');
		}
		public function hdp_ziduan_update(){
			if(empty($_GET['k']))
				exit;
			$this -> output();
		}
		public function hdp_ziduan_update_submit(){
			if(!empty($_FILES['file']['name'])){
				$fileUpload = new fileUpload(array('type'=>'1'));
				$arr = $fileUpload -> upload($_FILES['file']);
				if(empty($arr['num']))
					alert(0,0,null,$arr['msg'],0);
				$_POST['pic'] = $arr['new_file'];
			}
			$pdo = get_pdo();
			$row = $pdo -> sql('update `'.DB_PRE."hdp` set `title`= '{$_POST['title']}',`alt`='{$_POST['alt']}',`con`='{$_POST['con']}',`pic`='{$_POST['pic']}' where id ='{$_POST['id']}'");
			if($row === false)
				alert(0,0,null,'修改失败，请检查',1);
			alert(1,0,null,'修改成功');
		}

		public function hdp_update_submit(){
			$pdo = get_pdo();
			foreach($_POST as $v){
				$v['paixu'] = empty($v['paixu'])?0:$v['paixu'];
				$v['paixu'] = max($v['paixu'],0);
				$v['paixu'] = min($v['paixu'],60000);
				$v['xianshi'] = empty($v['xianshi'])?0:1;
				$pdo -> sql('update `'.DB_PRE."hdp` set `paixu`='{$v['paixu']}',`title`='{$v['title']}',`alt`='{$v['alt']}',`pic`='{$v['pic']}',`xianshi`='{$v['xianshi']}' where `id` = '{$v['id']}'");
			}
			alert(1,0,null,'修改成功');
		}


	}