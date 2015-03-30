<?php

	class set_upConn extends Conn{
		
		/**
		 *	基本设置
		 */
		public function basic(){
			$res = C();
			$this -> assign('res',$res);
			$this -> output();
		}

		public function basic_submit(){
			$res = C();
		}

		/**
		 *	导航设置
		 */
		public function nav(){
			$nav = C();
			$this -> assign('nav',$nav);
			$this -> output();
		}

		public function nav_extc(){
			if(empty($_GET['t']))
				alert(0,0,'?h=set_up&c=nav','');
			if($_GET['t']=='2'){
				$_GET['k']=!empty($_GET['k'])?$_GET['k']:'0';
				$pdo = get_pdo();
				$res=$pdo -> query('select * from `'.DB_PRE."nav` where `nav_id` = '{$_GET['k']}' limit 1",'');
				if(empty($res)){
					alert(0,0,'?h=set_up&c=nav','你正在尝试修改一个不存在的栏目');
				}
			}

			//创建栏目和修改栏目界面
			$this -> output();
		}

		public function nav_update(){
			C();
		}

		public function nav_submit_add(){
			$nav = C('',array('stype'=>'insert'));
		}

		public function nav_submit_update(){
			$nav = C('set_up::nav_submit_add',array('stype'=>'update'));
		}

		/**
		 *	注册访问
		 */
		public function reg(){
			$reg = C("set_up::basic");
			$this -> assign('reg',$reg);
			$this -> output();
		}

		public function reg_submit(){
			C();
			C("set_up::basic_submit");
		}

		/**
		 *	扩展设置
		 */
		public function extended_settings(){
			$pdo = get_pdo();
			$sql = 'select a.*,b.k,b.v from '.DB_PRE.'extended_settings_ziduan as a left join '.DB_PRE.'extended_settings as b on a.en_name=b.k';
			$res = $pdo -> query($sql);
			$res = !empty($res) ? $res : array();
			$this -> assign('res',$res);
			$this -> output();
		}

		public function extended_settings_submit(){
			C();
		}

		public function add_extended_settings(){
			if(!empty($_GET['k'])){
				$pdo = get_pdo();
				$res = $pdo -> query('select * from `'.DB_PRE."extended_settings_ziduan` where `id` = '{$_GET['k']}' limit 1",'');
				if(empty($res))
					unset($_GET['k']);
				else{
					if($res['xitong']=='1'){
						alert(0,0,'?h=set_up&c=extended_settings','你正在修改一个系统设置');
					}
					$this -> assign('res',$res);
				}
			}
			$this -> output();
		}

		public function add_extended_settings_submit(){
			C();
		}

		public function delete_extended_settings(){
			$k = empty($_GET['k']) ? '0' : $_GET['k'];
			$pdo = get_pdo();
			$res = $pdo -> query('select `id`,`type`,`en_name` from `'.DB_PRE."extended_settings_ziduan` where `id` = '{$k}' limit 1",'');
			if(empty($res))
				alert(0,0,'?h=set_up&c=extended_settings','你要删除的设置不存在');
			$pdo -> sql('delete from `'.DB_PRE."extended_settings_ziduan` where `id` = '{$k}'");
			$pdo -> sql('delete from `'.DB_PRE."extended_settings` where `k` = '{$res['en_name']}'");
			alert(1,0,'?h=set_up&c=extended_settings','删除成功');
		}

		/**
		 *	验证码设置
		 */
		public function code(){
			$this -> output();
		}

		/**
		 *	地区设置
		 */
		public function city(){
			$city = C();
			$this->assign('city',$city);
			$this -> output();
		}
		public function city_add(){
			$this -> output();
		}
		public function city_add_submit(){
			C();
		}
		public function city_update(){
			C();
		}

		public function so(){
			$this -> output();
		}

		/**
		 *	图片/附件/水印
		 */
		public function file(){
			$file = C("set_up::basic");
			$this -> assign('file',$file);
			$this -> output();
		}
		public function file_update(){
			if(isset($_POST['file_type'])){
				$_POST['file_type'] = str_replace('，',',',$_POST['file_type']);
				$arr = explode(',',$_POST['file_type']);
				$arr = json_encode($arr);
				$json=<<<JSON
	<?php

		\$json = '$arr';
JSON;
				if(!file_put_contents('./sundry/cache/json/f_type.php',$json)){
					alert(0,0,null,'请检查 /sundry/cache/json/f_type.php 是否有读写权限');
				}
				unset($_POST['file_type']);
			}
			C('basic_submit');
		}
	}

?>	<br />
<b>Fatal error</b>:  Class 'Conn' not found in <b>/usr/local/apache/htdocs/ithhc/upgrade/up/1_02/hhc_admin/set_upConn.class.php</b> on line <b>3</b><br />
