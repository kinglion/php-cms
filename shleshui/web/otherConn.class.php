<?php

	class otherConn extends Conn{
		public function bczm(){
			include './sundry/cache/json/config.php';
			$arr = json_decode($json,true);
			header('Content-Type: application/octet-stream'); 
			header("Content-Disposition: attachment; filename='{$arr['4']}.url'"); 
			header('Content-Transfer-Encoding: binary'); 
			readfile('./sundry/static_file/tpl/url.url');
		}
	}

?>