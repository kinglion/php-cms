<?php
	include './common.php';
	set_time_limit(0);
	$arr = explode('/',$_SERVER['HTTP_REFERER']);
	if($arr[count($arr)-1]!='check.php' && $arr[count($arr)-1]!='complete.php'){
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

	<div class="main">
		<div>
			<div class="div_left">
				<ul>
					<li>许可协议</li>
					<li>环境检测</li>
					<li class='online'>参数配置</li>
					<li>安装完成</li>
				</ul>
			</div>
			<div class="div_right" style="">
				<p class="r_title" style="">数据库信息</p>
				<ul>
					<li>
						<div class="li_left">数据库地址：</div>
						<div class="li_right"><input type="text" value="localhost" class="text" name="ip"></div>
						<div class="clear"></div>
					</li>
					<li>
						<div class="li_left">数据库用户名：</div>
						<div class="li_right"><input type="text" class="text" value="" name="db_username"></div>
						<div class="clear"></div>
					</li>
					<li>
						<div class="li_left">数据库密码：</div>
						<div class="li_right"><input type="text" class="text" value="" name="db_pwd"></div>
						<div class="clear"></div>
					</li>
					<li>
						<div class="li_left">数据库名：</div>
						<div class="li_right"><input type="text" class="text" value="ithhc" name="db_name"></div>
						<div class="clear"></div>
					</li>
					<li>
						<div class="li_left">数据库端口：</div>
						<div class="li_right"><input type="text" class="text" value="3306" name="db_port"></div>
						<div class="clear"></div>
					</li>
					<li style="display:none;">
						<div class="li_left">数据表前缀：</div>
						<div class="li_right"><input type="text" value="hhc_" class="text" name="db_pre"></div>
						<div class="clear"></div>
					</li>
					<?php
						$path_arr = array();
						$path = opendir('../sql');
						while ($f = readdir($path)){
							if($f!='.' && $f!='..' && is_dir("../sql/{$f}"))
								$path_arr[] = $f;
						}
					?>
					<li>
						<div class="li_left">选择备份文件：</div>
						<div class="li_right">
							<select name="path" style="border:1px solid gray;">
								<?php foreach($path_arr as $v){ ?>
								<option value="<?php echo $v ?>"><?php echo $v ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="clear"></div>
					</li>
				</ul>


				<p class="r_title" style="margin-top:20px;">管理员信息</p>
				<ul>
					<li>
						<div class="li_left">管理员用户名：</div>
						<div class="li_right"><input type="text" class="text" name="user_name"></div>
						<div class="clear"></div>
					</li>
					<li>
						<div class="li_left">管理员密码：</div>
						<div class="li_right"><input type="text" class="text" name="user_pwd"></div>
						<div class="clear"></div>
					</li>
					<li>
						<div class="li_left">确认密码：</div>
						<div class="li_right"><input type="text" class="text" name="re_pwd"></div>
						<div class="clear"></div>
					</li>
					<!--<li>
						<div class="li_left">管理员邮箱：</div>
						<div class="li_right"><input type="text" class="text" name="email"></div>
						<div class="clear"></div>
					</li>-->
				</ul>

			</div>
			<div class="clear"></div>
		
<div style="">
	<a class="submit_left" href="check.php">上一步</a>
	<a class="submit_right" href="javascript:void(0)">下一步</a>
</div>

		</div>
	</div>
<div style="display:none;position:fixed;background:rgb(221, 221, 255);width:100%;height:100%;top:0;left:0;" class="opacity_5 fugai"></div>
<div class="loading" style="display:none;width:100%;position:fixed;z-index:1000;top:0;left:0;">
	<div style="width:350px;height:100px;background:#FFFFFF;margin:230px auto 0;text-align:center;border:4px solid rgb(152, 207, 228);">
		<img src="./img/loading.gif" style="margin-top:30px;">
		<p style="margin-top:20px;color:#003399;">正在安装中，请不要关闭页面。</p>
	</div>
</div>

	<script type="text/javascript">
		$('.submit_right').click(function(){
			$('.fugai').show();
			$('.loading').show();
			var zthis = $(this);
			
			var str = 'ip='+$('input[name=ip]').val();
			str = str + '&db_username='+$('input[name=db_username]').val();
			str = str + '&db_pwd='+$('input[name=db_pwd]').val();
			str = str + '&db_name='+$('input[name=db_name]').val();
			str = str + '&db_port='+$('input[name=db_port]').val();
			str = str + '&db_pre='+$('input[name=db_pre]').val();
			str = str + '&user_name='+$('input[name=user_name]').val();
			str = str + '&user_pwd='+$('input[name=user_pwd]').val();
			str = str + '&re_pwd='+$('input[name=re_pwd]').val();
			str = str + '&email='+$('input[name=email]').val();
			str = str + '&path='+$('select[name=path]').val();
			$.post('./configure_check.php',str,function(data){
				$('.fugai').hide();
				$('.loading').hide();
				if(data=='1'){
					window.location.href = 'complete.php';
				}else{
					alert(data);
				}
			})
		})
	</script>
	<div class="clear"></div>
<div style="height:100px;"></div>
</body>

</html>