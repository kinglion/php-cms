<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>郝海川博客-后台登陆</title>
		<meta name="generator" content="郝海川博客" />
		<meta name="Author" content="郝海川 IThhc.cn " />
		<meta name="Robots" content="nofollow" />
		<link rel="stylesheet" type="text/css" href="./sundry/static_file/css/hhc_init.css"> 
		<script type="text/javascript" src="./sundry/static_file/js/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo TPL; ?>/css/admin_login.css">
		<script type="text/javascript" src="<?php echo TPL; ?>/js/admin_login.js"></script>
		<!--[if IE 6]>
		<script type="text/javascript" src="./sundry/static_file/js/ie6_png.js"></script>
			<script type="text/javascript">
			  DD_belatedPNG.fix('.admin_login_font_default');
			  DD_belatedPNG.fix('#admin_login_rem_pwd div');
			  document.execCommand('BackgroundImageCache', false, true);
			</script>
			<style type="text/css">
				body{padding-top:8%;}
			</style>
		<![endif]-->
	</head>
	<body id="admin_login_body" class="click_false">
		<div id="admin_login_div">
			<h1 id="admin_login_title">郝海川博客--管理登陆</h1>
			<form action="?" method="post" class="admin_login_form">
			<div id="admin_login_frame">
				<div>
					<div class="admin_login_font_default">
						<input id="username" type="text" name="name" autocomplete="off">
						<span>账号</span>
					</div>
					<div class="admin_login_font_default">
						<input type="password" name="pwd">
						<span>密码</span>
					</div>
					<input id="admin_login_submit" type="submit" name="submit" value="提交">
				</div>
				<div class="clear"></div>
				<div id="admin_login_info">
					<div id="admin_login_rem_pwd">
						<div class="input_bg"></div>&nbsp;记住密码
						<input name="rem_pwd" type="hidden" id="rem_pwd" value="0">
					</div>
					<a id="admin_login_forget_pwd" class="transition" href="#">忘记密码？</a>
				</div>
				<div class="clear"></div>
		<div class="admin_login_notice opacity_8">

		</div>
			</div>
			</form>
		</div>
	</body>
	</html>
