<?php

/******************************************
 * index.php 	模型应用程序入口文件
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-06-21 08:20';
 ******************************************/

	/**
	 *	定义项目所需常量
	 *	@ APP_DIR 应用程序的路径
	 *	@ APP_NAME 应用程序入口文件名
	 *	@ TEMPS 本应用是否开启多模板
	 *	@ TPL_LEFT 模板中 左标识符
	 *	@ TPL_RIGHT 模板中 右标识符
	 *	@ SUFFIX 模板文件后缀名
	 */
	define('APP_DIR','./index');
	define('APP_NAME','index.php');
	define('TEMPS',true);
	define('TPL_LEFT','<{');
	define('TPL_RIGHT','}>');
	define('SUFFIX','hhc');
	define('INDEX',true);//如果是index.php 必须存在此项 其他不能

	/**
	 *	引入主程序
	 */
	require('./ithhc/ithhc.php');


?>