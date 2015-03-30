<?php

	class articleConn extends Conn{
		/**
		 *	发布文章--选择栏目
		 */ 
		public function article_lanmu(){
			$pdo = get_pdo();
			$res = $pdo -> query('select * from `'.DB_PRE."nav` where `nav_type`='1' and `nav_moxing`<>'0' ");
			$res = !empty($res) ? $res : array();
			$this -> assign('lanmu',$res);
			$this -> output();
		}

		/**
		 *	发布文章
		 */
		public function article_fabu(){
			$res = C();
			$this -> assign('moxing_id',$res['moxing_id']);
			unset($res['moxing_id']);
			$this -> assign('ziduan',$res);
			$this -> output();
		}

		public function article_fabu_submit(){
			C();
		}

		/**
		 *	内容编辑
		 */
		public function article_update(){
			$res = C();
			$this -> assign('res',$res);
			$_GET['lanmu'] = $res['con_lanmu_id'];
			$ziduan=C('article_fabu');
			$this -> assign('moxing_id',$ziduan['moxing_id']);
			unset($ziduan['moxing_id']);
			$this -> assign('ziduan',$ziduan);
			$this -> output();
		}

		public function article_update_submit(){
			C();
		}

		/**
		 *	发布文章--选择模型
		 */ 
		public function article_moxing(){
			$this -> assign('k',1);
			include './sundry/cache/json/moxing/moxing.php';
			$json=json_decode($json,true);
			$this->assign('moxing',$json);
			$this -> output();
		}
		public function article_moxing_2(){
			$this -> assign('k',2);
			include './sundry/cache/json/moxing/moxing.php';
			$json=json_decode($json,true);
			$this->assign('moxing',$json);
			$this -> output('article_moxing');
		}

		/**
		 *	文章列表
		 */
		public function article_list(){
			$res = C();
			$this -> assign('data',$res['data']);
			$this -> assign('page',$res['page']);
			$this -> output();
		}

		/**
		 *	列表页面信息提交
		 */
		public function article_list_submit(){
			c();
		}


		/**
		 *	评论
		 */
		public function pinglun(){
			$res = C();
			$res['0'] = !empty($res['0']) ? $res['0'] : array();
			$this -> assign('data',$res['0']);
			$this -> assign('page',$res['1']);
			$this -> output();
		}

		public function pinglun_update(){
			$res = C();
			$this -> assign('res',$res);
			$this -> output();
		}

		public function pinglun_update_submit(){
			$pdo = get_pdo();
			$row = $pdo -> sql('update `'.DB_PRE."pinglun` set `con` = '{$_POST['pl']}' where `pinglun_id`='{$_POST['k']}'");
			if($row===false)
				alert(0,0,null,'网络繁忙，请稍后重试',1);
			alert(1,0,null,'修改成功');
		}

		public function pinglun_delete(){
			C();
		}

		/**
		 *	回收站
		 */
		public function huishouzhan(){
			$this -> output();
		}
	}

?>