<?php

/******************************************
 * config.php 	程序主配置文件
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-06-21 08:45';
 ******************************************
 * 除数据库信息外 请勿修改
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
	define('DB_PASSWORD','root');
	define('DB_NAME','ithhc');
	define('DB_PORT','3306');
	define('DB_PRE','hhc_');

	/**
	 *	初始化当前项目绝对路径
	 */
	define('ROOT',str_replace('\\','/',dirname(__FILE__)).'/');	

	/**
	 *	定义项目所需常量
	 *	@ ERROR_Level 应用模式  flase运营模式 true为开发模式
	 *	@ HHC_BUG 是否开启hhc_bug
	 *	@ CACHE 是否开启模板文件缓存 开发时必须开启 运行时必须关闭 否则会消耗大量资源
	 *	@ CACHE_DIR 模板缓存文件路径
	 *	@ SUNDRY 资源目录
	 */
	$c=false;
	define('ERROR_Level',true);
	define('TEMP_CACHE',false);
	define('DATA_CACHE',false);
	define('CACHE_DIR',ROOT.'/sundry/cache');
	define('FRAME_DIR','./ithhc');



?>