<?php

/******************************************
 * timer.class 	程序运行时间
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-06-25 07:30';
 ******************************************/


	class timer{
		static $start_time;
		static $stop_time;

		static $seconds;

		static function start(){
			list($s1, $s2) = explode(' ', microtime()); 
			self::$start_time = (float)sprintf('%.0f', (floatval($s1) + floatval($s2)) * 1000); 
		}

		static function stop(){
			list($s1, $s2) = explode(' ', microtime()); 
			self::$stop_time = (float)sprintf('%.0f', (floatval($s1) + floatval($s2)) * 1000);
			self::$seconds=(self::$stop_time - self::$start_time)/1000;
		}


	}

?>