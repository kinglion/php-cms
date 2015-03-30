<?php

/******************************************
 * config.php 	程序主配置文件
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-06-21 08:45';
 ******************************************/

	/**
	 *	初始化数据库信息
	 *	@ DB_HOST 数据库地址 
	 *	@ DB_USER_NAME 数据库用户名
	 *	@ DB_PASSWORD 数据库密码
	 *	@ DB_NAME 数据库名称
	 *	@ DB_PORT 数据库端口
	 *	@ DB_PRE 数据表前缀
	 */
	define('DB_HOST','localhost');
	define('DB_USER_NAME','root');
	define('DB_PASSWORD','');
	define('DB_NAME','ithhc');
	define('DB_PORT','3306');
	define('DB_PRE','hhc_');

	define('ROOT',str_replace('\\','/',dirname(__FILE__)).'/');	

	$c=false;
	define('ERROR_Level',false);
	define('TEMP_CACHE',false);
	define('CACHE_DIR',ROOT.'/sundry/cache');
	define('FRAME_DIR','./ithhc');



?>