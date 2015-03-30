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
	define('DB_HOST','{$ip}');
	define('DB_USER_NAME','{$db_username}');
	define('DB_PASSWORD','{$db_pwd}');
	define('DB_NAME','{$db_name}');
	define('DB_PORT','{$db_port}');
	define('DB_PRE','{$db_pre}');

	define('ROOT',str_replace('\\','/',dirname(__FILE__)).'/');	

	$c=false;
	define('ERROR_Level',false);
	define('TEMP_CACHE',false);
	define('CACHE_DIR',ROOT.'/sundry/cache');
	define('FRAME_DIR','./ithhc');



?>