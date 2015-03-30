<?php
include('include/config.php');
include('include/class/database.class.php');
include('include/class/table.class.php');
include('include/function.php');
ini_set('display_errors','1');
error_reporting(E_ALL);
date_default_timezone_set('PRC');

header('Content-Type:text/html;charset=utf-8');
header('Cache-Control:private');
	
session_start();
?>