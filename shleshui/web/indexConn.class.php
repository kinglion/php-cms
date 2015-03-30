<?php

	class indexConn extends Conn{
		public function index(){
			$m = get_mobile();
			if($m=='1'){
				$this -> output('mobile/index');
			}else{
				$this -> output();
			}
		}
		public function news(){
			$m = get_mobile();
			if($m=='1'){
				$this -> output('mobile/news');
			}else{
				$this -> output();
			}
		}
		public function news_content(){
			$m = get_mobile();
			if($m=='1'){
				$this -> output('mobile/news_content');
			}else{
				$this -> output();
			}
		}
		public function product(){
			$m = get_mobile();
			if($m=='1'){
				$this -> output('mobile/product');
			}else{
				$this -> output();
			}
		}
		public function product_content(){
			$m = get_mobile();
			if($m=='1'){
				$this -> output('mobile/product_content');
			}else{
				$this -> output();
			}
		}
		public function solution(){
			$m = get_mobile();
			if($m=='1'){
				$this -> output('mobile/solution');
			}else{
				$this -> output();
			}
		}
		public function solution_content(){
			$m = get_mobile();
			if($m=='1'){
				$this -> output('mobile/solution_content');
			}else{
				$this -> output();
			}
		}
		public function casez(){
			$m = get_mobile();
			if($m=='1'){
				$this -> output('mobile/casez');
			}else{
				$this -> output();
			}
		}
		public function casez_content(){
			$m = get_mobile();
			if($m=='1'){
				$this -> output('mobile/casez_content');
			}else{
				$this -> output();
			}
		}
		public function comment(){
			$m = get_mobile();
			if($m=='1'){
				$this -> output('mobile/comment');
			}else{
				$this -> output();
			}
		}
		public function comment_submit(){
			if(empty($_POST['fasongzhe']))
				alert_2(1,'请输入姓名','',3);
			if(empty($_POST['title']))
				alert_2(1,'请输入联系方式','',3);
			if(empty($_POST['neirong']))
				alert_2(1,'请输入内容','',3);
			$pdo = get_pdo();
			$time = date('Y-m-d H:i');
			$r = rand(1,30);
			$pic = !empty($_POST['pic']) ? "./sundry/static_file/img/pic/{$_POST['pic']}.jpg" : "./sundry/static_file/img/pic/{$r}.jpg";
			$row = $pdo -> sql('insert into '.DB_PRE."lyfk(fasongzhe,neirong,title,time,pic)values('{$_POST['fasongzhe']}','{$_POST['neirong']}','{$_POST['title']}','{$time}','{$pic}')");
			if(empty($row)){
				alert_2(1,'服务器繁忙 请稍后再试','',3);
			}
			alert_2(0,'留言成功 我们会尽快为您解答','web.php?h=index&c=comment',3);
		}
		public function jobs(){
			$m = get_mobile();
			if($m=='1'){
				$this -> output('mobile/jobs');
			}else{
				$this -> output();
			}
		}
		public function user(){
			$m = get_mobile();
			if($m=='1'){
				$this -> output('mobile/user');
			}else{
				$this -> output();
			}
		}
		public function so(){
			$this -> output();
		}

	}
?>