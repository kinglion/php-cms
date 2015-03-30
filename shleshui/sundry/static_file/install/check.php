<?php
	include './common.php';
	set_time_limit(0);
	$arr = explode('/',$_SERVER['HTTP_REFERER']);
	if($arr[count($arr)-1]!='index.php' && $arr[count($arr)-1]!='configure.php'){
		header('location: ./index.php');
		exit;
	}
	$gml = explode('sundry',$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/hhc_init.css" rel="stylesheet" type="text/css" />
<link href="./common.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../img/favicon.ico" />
<script type="text/javascript" src="../js/jquery.js"></script>
<title>安装向导 - 郝海川博客</title>
</head>
<body>
	<?php
		check();
	?>
	<div class="header">
		<div class="top_main">
			<p>郝海川博客 - 安装向导</p>
		</div>
	</div>
	<div style="height:150px;"></div>
<style type="text/css">

</style>
	<div class="main">
		<div>
			<div class="div_left">
				<ul>
					<li>许可协议</li>
					<li class='online'>环境检测</li>
					<li>参数配置</li>
					<li>安装完成</li>
				</ul>
			</div>
			<div class="div_right">
				<p class="r_title">服务器和系统信息</p>
				<ul>
					<li>服务器解译引擎：<span><?php echo $_SERVER['SERVER_SOFTWARE'].'<br/>'; ?></span></li>
					<li>服务器IP：<span><?php echo GetHostByName($_SERVER['SERVER_NAME']); ?></span></li>
					<li>PHP版本：<span><?php echo PHP_VERSION; ?></span></li>
				</ul>
				
				<p class="r_title" style="margin-top:15px;">系统函数检测</p>
				<ul class="check_func">
					<?php 
						if(function_exists('curl_init')){
					?>
						<li>curl_init：<span>[已开启]</span></li>
						<input type="hidden" class="curl_init" value="1">
					<?php
						}else{
					?>
						<li>curl_init：<span style="color:red;">[未开启]</span></li>
						<input type="hidden" class="curl_init" value="0">
					<?php
						}
					?>

					<?php 
						if(class_exists('PDO')){
					?>
						<li>PDO驱动：<span>[已开启]</span></li>
						<input type="hidden" class="pdo" value="1">
					<?php
						}else{
					?>
						<li>PDO驱动：<span style="color:red;">[未开启]</span></li>
						<input type="hidden" class="pdo" value="0">
					<?php
						}
					?>

					<?php 
						if(function_exists('mysql_connect')){
					?>
						<li>mysql_connect：<span>[已开启]</span></li>
						<input type="hidden" class="mysql_connect" value="1">
					<?php
						}else{
					?>
						<li>mysql_connect：<span style="color:red;">[未开启]</span></li>
						<input type="hidden" class="mysql_connect" value="0">
					<?php
						}
					?>

					<?php 
						if(function_exists('imagecreatetruecolor')){
					?>
						<li>imagecreatetruecolor：<span>[已开启]</span></li>
						<input type="hidden" class="imagecreatetruecolor" value="1">
					<?php
						}else{
					?>
						<li>imagecreatetruecolor：<span style="color:red;">[未开启]</span></li>
						<input type="hidden" class="imagecreatetruecolor" value="0">
					<?php
						}
					?>
				</ul>
			
				<p class="r_title" style="margin-top:15px;">目录权限检测</p>
				<?php

					$path = "../../../";
					$arr = open_dir($path);
					function open_dir($path){
						static $arr = array();
						if(is_dir($path)){
							$$path = opendir($path);
							while ($f = readdir($$path)){
								if($f!='.' && $f!='..'){
									$name = str_replace('../../../','',$path.'/'.$f);
									$arr[$name] = check_authority($path.'/'.$f);
									if(empty($arr[$name]))
										unset($arr[$name]);
									if(is_dir($path.'/'.$f)){
										open_dir($path.'/'.$f);
									}elseif(is_file($path.'/'.$f)){
										//
									}
								}
							}
						}

						return $arr;
					}

					function check_authority($file){
						if(is_file($file))
							return false;
						$str = '';
						if(!is_readable($file)){
							$str .= '可读、';
						}
						if(!is_writable($file)){
							$str .= '可写、';
						}
						$str = trim($str,'、');
						if(!empty($str))
							return $str;
					}
				?>
				<ul>
					<?php if(empty($arr)){ ?>
					<li><span>√检测完成 不存在权限问题</span></li>
					<?php }else{ ?>
					<table style="width:100%">
						<tr>
							<th>目录或文件名称</th>
							<th>所需权限</th>
						</tr>
						<?php foreach($arr as $k => $v){
							?>
							<tr class="xxz">
								<td><?php echo $k; ?></td>
								<td style="color:red;"><?php echo $v; ?></td>
							</tr>
							<?php
						} ?>
					</table>
					<?php } ?>
				</ul>

			</div>
			<div class="clear"></div>
		
<div style="">
	<a class="submit_left" href="index.php">上一步</a>
	<a class="submit_right" href="configure.php">下一步</a>
</div>
<script type="text/javascript">
	$(function(){
		$('.submit_right').click(function(){
			var s = true;
			$('.check_func input').each(function(){
				if($(this).val()=='0'){
					alert($(this).attr('class')+' 未开启');
					s = false;
				}
			})
			if(!s)
				return false;
			if($('table tr').hasClass('xxz')){
				return false;
			}
		})
	})
</script>
		</div>
	</div>
	<div style="height:100px;"></div>
</body>

</html>