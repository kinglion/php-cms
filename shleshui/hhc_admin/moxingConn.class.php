<?php

	class moxingConn extends Conn{
		/**
		 *	模型管理
		 */
		public function index(){
			$moxing = C();
			$this -> assign('moxing',$moxing);
			$this -> output();
		}

		/**
		 *	模型创建
		 */
		public function moxing_create(){
			$this -> output();
		}
		public function moxing_create_submit(){
			C();
		}

		/**
		 *	模型编辑
		 */
		public function moxing_update(){
			if(empty($_GET['k'])){
				header('?h=moxing');
			}
			$moxing=C();
			$this->assign('moxing',$moxing);
			$this -> output();
		}
		public function moxing_update_submit(){
			$pdo = get_pdo();
			$row = $pdo -> sql('update `'.DB_PRE."moxing` set `fabu_quanxian`='{$_POST['quanxian']}',`fabu_level`='{$_POST['jibie']}' where `id` = '{$_POST['k']}'");
			if($row===false)
				alert(0,0,null,'修改失败',1);
			else
				alert(1,0,null,'修改成功');
			unlink('./sundry/cache/json/moxing/moxing.php');
		}

		/**
		 *	模型删除
		 */
		public function moxing_delete(){
			if(empty($_GET['k'])){
				header('?h=moxing');
			}
			include './sundry/cache/json/moxing/moxing.php';
			if(!isset($json))
				show_err('错误0x010 您修改过源程序 导致程序无法运行！');
			$json=json_decode($json,true);
			$table_name=$json[$_GET['k']]['moxing_ziduan_table_name'];
			if(empty($table_name))
				alert(0,0,'?h=moxing','无此模型');
			$pdo = get_pdo();
			//删除栏目 delete from hhc_nav where nav_moxing=$_GET['k']
			//删除数据和表 drop table $table_name
			//删除字段 delete from hhc_ziduan where moxing_id = $_GET['k']
			//删除该模型 delete from hhc_moxing where id=$_GET['k']
			$db_pre = DB_PRE;
			$sql = "delete from `{$db_pre}nav` where nav_type='1' and `nav_moxing`='{$_GET['k']}'";
			$pdo -> sql($sql);
			$sql = "drop table `{$db_pre}{$table_name}`";
			$pdo -> sql($sql);
			$sql = "delete from `{$db_pre}ziduan` where `moxing_id` = '{$_GET['k']}'";
			$pdo -> sql($sql);
			$sql = "delete from `{$db_pre}pic` where `moxing_id`='{$_GET['k']}'";
			$pdo -> sql($sql);
			$sql = "delete from `{$db_pre}fenlei` where `moxing_id`='{$_GET['k']}'";
			$pdo -> sql($sql);
			$sql = "delete from `{$db_pre}moxing` where `id`='{$_GET['k']}'";
			$pdo -> sql($sql);
			
			unlink('./sundry/cache/json/moxing/moxing.php');
			unlink('./sundry/cache/json/nav.php');
			unlink("./sundry/cache/json/moxing/ziduan/{$_GET['k']}.php");
			alert(1,7);
		}

		/**
		 *	字段
		 */
		public function ziduan_list(){
			if(empty($_GET['k']))
				header('Location:?h=moxing&c=index');
			$ziduan = C();
			$this -> assign('ziduan',$ziduan);
			$this->output();
		}

		/**
		 *	创建字段
		 */
		public function ziduan_create(){
			$_GET['k']=empty($_GET['k'])?'0':$_GET['k'];
			$pdo = get_pdo();
			$res = $pdo -> query('select id from '.DB_PRE."moxing where id = {$_GET['k']} limit 1 ",'');
			if(empty($res))
				alert(0,0,'?h=moxing','模型不存在，请重新选择');
			$this -> output();
		}
		public function ziduan_create_submit(){
			C();
		}
		
		/**
		 *	修改删除字段
		 */
		public function ziduan_update(){
			$res = C();
			$this -> assign('ziduan',$res);
			$this -> output();
		}
		public function ziduan_update_submit(){
			C();
		}
		public function ziduan_delete(){
			if(empty($_GET['k']))
				alert(0,0,null,'请选择要使用删除的对象',1);
			C();
		}

	}