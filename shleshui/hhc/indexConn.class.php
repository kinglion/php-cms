<?php

/******************************************
 * indexConn 	
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-08-02 17:46';
 ******************************************/

	class indexConn extends Conn{
		public function file_upload(){
			$file = new fileUpload(array('type'=>'1'));
			$file->upload($_FILES['file']);
		}
		public function pdo_not_connect(){
			echo '数据库连接失败';
		}

	}
?>