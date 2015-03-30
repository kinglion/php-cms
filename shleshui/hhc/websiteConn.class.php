<?php

	class websiteConn extends Conn{
		public function index(){
			$c = C();
			$this -> assign('ks','index');
			$this -> output('default/index');
		}
	}