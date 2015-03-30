<?php
error_reporting(0);
session_start();
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PSW","");
define("DB_NAME","momocms");
define("DB_PREFIX","momo_");
define("URL","http://10.1.57.38/");
date_default_timezone_set('PRC');
try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PSW); //初始化一个PDO对象
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
$db->exec("SET character_set_connection=utf8, character_set_results=utf8, character_set_client=binary");
$db->exec("SET sql_mode=''");
$sql="select * from ".DB_PREFIX."product order by sort desc";
$query=$db->query($sql);
$arr=array();
while($tmp=$query->fetch()){
	$arr[]=$tmp;
}
?>