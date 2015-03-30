<?php

/******************************************
 * hhc_bug.class 	hhc_bug
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-06-23 11:12';
 ******************************************/

	class hhc_bug{
		static $data=array(array(),array(),array());
		static function go(){
			require './sundry/tpl/hhc_bug/hhc_bug.tpl';
		}
		static function add($v,$t){
			$t=empty($t)?'0':$t;
			self::$data[$t][]=$v;
		}
	}

?>