<?php

/******************************************
 * ithhc.php 	主框架入口文件
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-06-21 09:12';
 ******************************************/


	/**
	 *	引入主配置文件
	 */
	if(file_exists('./config.php')){
		require('./config.php');
	}else{
		file_not_exists('./config.php',__FILE__,__LINE__);
	}

	/**
	 *	引入主函数库
	 */
	if(file_exists(FRAME_DIR.'/func/func.hhc.php')){
		require(FRAME_DIR.'/func/func.hhc.php');
	}else{
		file_not_exists(FRAME_DIR.'/func/func.hhc.php',__FILE__,__LINE__);
	}

	if(!is_file('./sundry/static_file/install.hhc')){
		header('Location: ./sundry/static_file/install/index.php');
		exit;
	}

	if(defined('INDEX') && empty($_GET['h']) && empty($_GET['c'])){
		$nav = include_nav();
		foreach($nav as $v){
			if($v['nav_shouye']=='1'){
				if($v['nav_type']=='0'){
					$index = $v['nav_link'];
				}else if($v['nav_type']=='1'){
					$index = "index.php?h=index&c=moxing_list&moxing_id={$v['nav_moxing']}&lanmu_id={$v['nav_id']}";
				}else if($v['nav_type']=='2'){
					//模块
				}else if($v['nav_type']=='100'){
					$index = 'index.php?h=index&c=index';
				}
			}
		}

		if(!empty($index))
			header("Location:{$index}");
	}

	/**
	 *	定义错误处理函数
	 */
	if(!defined('ERROR_Level'))
		define('ERROR_Level',false);

	if(!ERROR_Level){
		set_error_handler('all_err');
		register_shutdown_function('onload');
		error_reporting(0);
	}else{
		ini_set('error_reporting',E_ALL | E_STRICT);
	}

	/**
	 *	include 
	 */
	$include_path=get_include_path();  
	$include_path.=PATH_SEPARATOR.FRAME_DIR.'/ithhc';
	$include_path.=PATH_SEPARATOR.APP_DIR;
	$include_path.=PATH_SEPARATOR.APP_DIR.'/box/';
	$include_path.=PATH_SEPARATOR.FRAME_DIR.'/classes';
	set_include_path($include_path);	
	
	if(is_file(APP_DIR.'/box/func/func.hhc.php'))
		include APP_DIR.'/box/func/func.hhc.php';

	/**
	 *	自动加载机制
	 */
	spl_autoload_register('hhc_load');
	
	if(!defined('HHC_BUG'))
		define('HHC_BUG',false);

	/**
	 *	计算程序执行时间
	 */
	if(HHC_BUG){
		timer::start();
	}

	ob_start();

	/**
	 *	编码
	 */
	header('Content-Type: text/html; charset=utf-8');

	if(!empty($_POST) || !empty($_FILES)){
		$arr = explode('/',$_SERVER['HTTP_REFERER']);
		if($arr['2']!=$_SERVER['HTTP_HOST'])
			exit;
	}

	/**
	 *	定义全局常量
	 */
	if(!defined('APP_DIR'))
		define('APP_DIR','./index/');
	if(!defined('APP_NAME'))
		define('APP_NAME','index.php');
	if(!defined('TEMPS'))
		define('TEMPS',false);
	if(!defined('TPL_LEFT'))
		define('TPL_LEFT','<{');
	if(!defined('TPL_RIGHT'))
		define('TPL_RIGHT','}>');
	if(!defined('SUFFIX'))
		define('SUFFIX','hhc');
	if(!defined('TEMP_CACHE'))
		define('TEMP_CACHE',true);
	if(!defined('DATA_CACHE'))
		define('DATA_CACHE',true);
	if(!defined('CACHE_DIR'))
		define('CACHE_DIR','./sundry/cache/');
	if(!defined('FRAME_DIR'))
		define('FRAME_DIR','./ithhc');
	
	/**
	 *	设置时区
	 */
	date_default_timezone_set("PRC");

	/**
	 *	控制脚本执行时间
	 */
	set_time_limit(0);

	/**
	 *	强行关闭 register_globals
	 */
	if(ini_get('register_globals')){
    	show_err('php.ini register_globals 必须关闭');
	}

	if(isset($_COOKIE['sessid']))
		session_id($_COOKIE['sessid']);

	if(!empty($_GET['extension_uid'])){
		setcookie('extension_uid',$_GET['extension_uid']);
	}

	
	/**
	 *	文件不存在时，输出错误的函数
	 */
	function file_not_exists($file,$path,$line){
		echo('文件'.$file.'不存在');exit;
	}

	$_GET['h'] = !empty($_GET['h']) ? $_GET['h'] : 'index';
	$_GET['c'] = !empty($_GET['c']) ? $_GET['c'] : 'index';
	

	/**
	 *	超全局数组转译
	 */
	$_GET = Translation($_GET);
	$_POST = Translation($_POST);
	$_COOKIE = Translation($_COOKIE);

	if(isset($_COOKIE['hhc_return_msg_id'])){
		$_GET['hhc_return_msg_id'] = $_COOKIE['hhc_return_msg_id'];
		setcookie('hhc_return_msg_id','1',time()-100);
	}if(isset($_COOKIE['hhc_return_type'])){
		$_GET['hhc_return_type'] = $_COOKIE['hhc_return_type'];
		setcookie('hhc_return_type','1',time()-100);
	}if(isset($_COOKIE['hhc_return_msg'])){
		$_GET['hhc_return_msg'] = $_COOKIE['hhc_return_msg'];
		setcookie('hhc_return_msg','1',time()-100);
	}
	/*$_GET = I($_GET);
	$_POST = I($_POST);
	$_COOKIE = I($_COOKIE);*/

	$_SERVER['HTTP_REFERER']=empty($_SERVER['HTTP_REFERER'])?'?':$_SERVER['HTTP_REFERER'];

	if(!empty($_SERVER['REQUEST_URI']))	
		setcookie('last_url',$_SERVER['REQUEST_URI']);
	 		
	 		
	/**
	 *	定义几个可能会经常在模板和程序中使用的常量
	 */
	define('TPL',APP_DIR."/box/tpl");

	/**
	 *	实例化控制器
	 */
	$class_name = $_GET['h'].'Conn';
	$controller = new $class_name();
	$controller -> run();
	if(method_exists($class_name,$_GET['c']))
			$controller -> $_GET['c']();
		else{
			$controller -> action();
			exit;
		}
	

	/**
	 *	如果开启了hoppy_bug 计算时间
	 */
	if(HHC_BUG){
		timer::stop();
		$all_php =  timer::$seconds;
		$start_time =  timer::$start_time;
		hhc_bug::add('php执行时间'.$all_php.'秒','0');
		hhc_bug::go();
		echo <<<TIME
				<script>
				window.onload=function(){
					var onload_time=new Date().getTime();
					var time = (onload_time-{$start_time})/1000;
					//页面加载完成时间
					//time = time.toFixed(3);
					var hhc_onload_id=document.getElementById('hhc_onload_time');
					if(hhc_onload_id){
						hhc_onload_id.innerHTML='页面加载完成时间'+time+'秒';
					}
				}
				</script>
TIME;
	}

	$c=true;
	
?>