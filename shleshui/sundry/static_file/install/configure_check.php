<?php
	set_time_limit(0);
	//检测管理员用户名密码等
	if(empty($_POST['user_name'])){
		die('请输入管理员用户名');
	}
	if(empty($_POST['user_pwd'])){
		die('请输入管理员密码');
	}
	if(empty($_POST['re_pwd'])){
		die('请输入管理员确认密码');
	}
	if($_POST['user_pwd']!=$_POST['re_pwd']){
		die('管理员密码和确认密码不相同');
	}
	if(empty($_POST['path'])){
		die('备份文件路径必须选择');
	}
	//检测数据库信息等
	$str = file_get_contents('../php/config.php');
	$str = str_replace('{$ip}',$_POST['ip'],$str);
	$str = str_replace('{$db_username}',$_POST['db_username'],$str);
	$str = str_replace('{$db_pwd}',$_POST['db_pwd'],$str);
	$str = str_replace('{$db_name}',$_POST['db_name'],$str);
	$str = str_replace('{$db_port}',$_POST['db_port'],$str);
	$str = str_replace('{$db_pre}',$_POST['db_pre'],$str);
	//chmod('../../../config.php',777);
	@unlink('../../../config.php');
	if(file_put_contents('../../../config.php',$str)===false){
		die('文件config.php写入失败 请检查权限');
	}
	include '../../../config.php';
		if(!defined('HHC_BUG'))
			define('HHC_BUG',false);
	include '../../../ithhc/func/func.hhc.php';
	include '../../../ithhc/ithhc/hhc_bug.class.php';
	include '../../../ithhc/ithhc/pdoDB.class.php';
	include '../../../ithhc/classes/db_manage.class.php';
	$db_pre = DB_PRE;
	$conn = @mysql_connect(DB_HOST.':'.DB_PORT,DB_USER_NAME,DB_PASSWORD);
	if(empty($conn))
		die('数据库连接失败');
	$db = mysql_select_db($_POST['db_name']);
	if(empty($db)){
		$row = mysql_query("create database {$_POST['db_name']}");
	}
	$db = mysql_select_db($_POST['db_name']);
	if(empty($db)){
		die("数据库 {$_POST['db_name']} 不存在 尝试创建失败");
	}
	mysql_close($conn);
	//导入数据库
	$dir = "../sql/{$_POST['path']}";
	if(!is_dir($dir))
		die('你所选择的备份文件不存在或已删除');
	$path = opendir($dir);
	while ($f = readdir($path)){
		if($f!='.' && $f!='..' && is_file("../sql/{$_POST['path']}/$f")){
			$db_mange = new db_manage(DB_HOST,DB_USER_NAME,DB_PASSWORD,DB_NAME,'utf8');
			$db_mange->restore("../sql/{$_POST['path']}/$f");
		}
	}
	/*$pdo = get_pdo();
	//执行删除
	if(!is_file('../sql/drop_table_sql.sql') || !is_file('../sql/create_table_sql.sql')){
		die('备份文件不存在');
	}
	$sql1 = file_get_contents('../sql/drop_table_sql.sql');
	$sql1 = str_replace('{$db_pre}',DB_PRE,$sql1);
	$sql1_arr = explode(';-hhc-;',$sql1);
	foreach($sql1_arr as $v){
		$pdo -> sql($v);
	}
	$sql2 = file_get_contents('../sql/create_table_sql.sql');
	$sql2 = str_replace('{$db_pre}',DB_PRE,$sql2);
	$sql2_arr = explode(';-hhc-;',$sql2);
	foreach($sql2_arr as $v){
		$pdo -> sql($v);
	}
	$dir = opendir('../sql/data');
	if($dir){
		$file_arr = array();
		while ($f = readdir($dir)){
			if(is_file('../sql/data/'.$f)){
				$file_arr[] = $f;
			}
		}
	}else{
		die('备份文件出错');
	}

	$sql = '';
	foreach($file_arr as $v){
		include '../sql/data/'.$v;
		foreach($sql as $vs){
			$vs = stripslashes($vs);
			$row = $pdo -> sql($vs);
			if(empty($row))
			echo $vs.'<br><br><br><br>';
		}
	}
	exit;*/
	$pdo = get_pdo();
	$pwd = md5(md5($_POST['user_pwd']));
	$sql = 'update '.DB_PRE."user set user_name='{$_POST['user_name']}',user_pwd='{$pwd}' where user_id='1'";
	$row = $pdo -> sql($sql);
	//v($row);
	//v($sql);
	file_put_contents('../install.hhc','ithhc.cn');
	die('1');


