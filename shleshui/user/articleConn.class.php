<?php

	class articleConn extends Conn{
		public function manage(){
			if(empty($_GET['k'])){
				header('Location: ?');
				exit;
			}
			$this -> assign('right_title','文章管理');
			$this -> output();
		}
		public function manage_submit(){
			if(!empty($_POST['go_type'])){
				$id = implode(',',$_POST['con_id']);
				if($_POST['go_type']=='scxz'){
					$sql = "delete from {$_POST['tb_name']} where con_id in ($id)";
				}
			}else if(!empty($_GET['k1'])){
				$sql = "delete from {$_GET['k3']} where con_id = {$_GET['k1']}";
			}else{
				exit;
			}
			$pdo = get_pdo();
			$row = $pdo -> sql($sql);
			if($row === false)
				alert_2(1,'网络繁忙 删除失败','',3);
			alert_2(0,"文章删除成功 共删除了{$row}篇","?h=article&c=manage&k={$_GET['k2']}",3);
		}
		public function manage_update(){
			if(empty($_GET['k'])){
				header('Location: ?');
				exit;
			}
			if(empty($_GET['k2'])){
				header("Location: ?h=article&c=manage&k={$_GET['k']}");
				exit;
			}
			$this -> assign('right_title','文章编辑');
			$this -> output();
		}
		public function manage_update_submit(){
			C();
		}

		public function release(){
			if(empty($_GET['k'])){
				header('Location: ?');
				exit;
			}
			$this -> assign('right_title','发布文章');
			$this -> output();
		}
		public function release_submit(){
			C();
		}

		public function comment(){
			if(empty($_GET['k'])){
				header('Location: ?');
				exit;
			}
			$this -> assign('right_title','评论管理');
			$this -> output();
		}
		public function comment_update(){
			$this -> output();
		}
		public function comment_update_submit(){
			if(empty($_POST['k']))
				alert_2(1,'请选择要修改的评论','',3);
			if(empty($_POST['con']))
				alert_2(1,'评论内容不能为空','',3);
			$pdo = get_pdo();
			$row = $pdo -> sql('update '.DB_PRE."pinglun set con='{$_POST['con']}' where pinglun_id='{$_POST['k']}' and user_id ='{$_SESSION['user']['user_id']}'");
			if($row === false)
				alert_2(1,'网络繁忙 修改失败','',3);
			alert_2(0,"评论修改成功","?h=article&c=comment_update&k={$_POST['kk']}&k2={$_POST['k']}",3);
		}
	}


