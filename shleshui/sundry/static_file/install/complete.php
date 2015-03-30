<?php
	include './common.php';
	$arr = explode('/',$_SERVER['HTTP_REFERER']);
	if($arr[count($arr)-1]!='configure.php'){
		header('location: ./index.php');
		exit;
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/hhc_init.css" rel="stylesheet" type="text/css" />
<link href="./common.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../img/favicon.ico" />
<title>安装向导 - 郝海川博客</title>
</head>
<body>
	<?php
		//check();
	?>
	<div class="header">
		<div class="top_main">
			<p>郝海川博客 - 安装向导</p>
		</div>
	</div>
	<div style="height:150px;"></div>

	<div class="main">
		<div>
			<div class="div_left">
				<ul>
					<li>许可协议</li>
					<li>环境检测</li>
					<li>参数配置</li>
					<li class='online'>安装完成</li>
				</ul>
			</div>
			<div class="div_right" style="">
				<p class="r_title" style="">安装完成</p>
				<h1 style="color:#009900;font-size:14px;font-weight:bold;text-align:center;margin:20px 0 30px 0;">恭喜您 成功安装完郝海川博客</h1>
				<div style="margin:0 auto;width:196px;">
					<div style="float:left;padding:5px 10px;background:#ECF9FF"><a href="../../../index.php" target="_blank">网站首页</a></div>
					<div style="float:right;padding:5px 10px;background:#ECF9FF"><a href="../../../admin.php" target="_blank">网站后台</a></div>
				</div>
			</div>
			<div class="clear"></div>


		</div>
	</div>
</body>

</html>