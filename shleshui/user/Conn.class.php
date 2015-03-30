<?php

	class Conn extends tpl{
		public function __construct(){
			$this->temps='default';
		}
		public function Model(){
			echo 'Model不存在';
		}

		public function Action(){
			echo 'Action 不存在';
		}

		public function run(){
			if(!isset($_SESSION)){
				if(!empty($_COOKIE['sess_oid']))
					session_id($_COOKIE['sess_oid']);
				session_start();
			}
			if(empty($_SESSION['user'])){
				header('Location: ?h=login&c=login');
				exit;
			}
		}
	}
?>