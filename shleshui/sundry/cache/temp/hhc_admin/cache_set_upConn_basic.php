<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>郝海川博客--管理中心</title>
			<link rel="stylesheet" type="text/css" href="./sundry/static_file/css/hhc_init.css">
			<link rel="stylesheet" type="text/css" href="<?php echo TPL; ?>/css/admin.css">
			<link rel="icon" href="./sundry/static_file/img/favicon.ico" mce_href="./sundry/static_file/img/favicon.ico" type="image/x-icon" /> 
			<script src="./sundry/static_file/js/jquery.js" type="text/javascript"></script>
			<script src="<?php echo TPL; ?>/js/admin.js" type="text/javascript"></script>
		<!--[if lt IE 9]>
		<style type="text/css">
		#admin_left_main_so{
			border:1px solid #535358;
		}
		.ie8_chenggao_5px{height:5px;}
		</style>
		<![endif]-->
		<!--[if IE 6]>
		<script type="text/javascript">
	window.location.href="?h=get&c=ie6";
		</script>
			<style type="text/css">
				#admin_header,#admin_left,#admin_left_border{position:absolute;top:expression(eval(document.documentElement.scrollTop)););}
				#header_user_operate{width:290px;}
				#admin_left_main_input{
					width:100px;margin-left:4px;
				}
				#admin_left{height:1000px;}
				}
			</style>
			<script type="text/javascript" src="./sundry/static_file/js/ie6_png.js"></script>
			<script type="text/javascript">
			  DD_belatedPNG.fix('#header_user_operate');
			  DD_belatedPNG.fix('#admin_left_main_so');
			  DD_belatedPNG.fix('.admin_left_main_dl dd');
				$(function(){
					//alert($('body').height());
					$('body').height($(document).height()+1000);
				})
			</script>
		<![endif]-->
		<!--[if IE 7]>
		<style type="text/css">
			.file_get_1_div{margin-left:5%;}
			.file_get_name{margin-top:8px;}
			.margin_left_10{margin-left:10px;}
			.create_zidingyi{border:0;}
		</style>
		<![endif]-->
		</head>
		<body>
			<div id='admin_header'>
				<div id="logo" class="click_false">IThhc.cn</div>
				<div id="header_user">
					<div id="header_user_operate">
						<div id="header_user_operate_pic">
							<img src="<?php echo TPL; ?>/img/public/hhc.jpg">
						</div>
						<div id="header_user_operate_main">
							<div id="header_my_operate">网站创始人，郝海川</div>
							<div class="ie8_chenggao_5px"></div>
							<div id="header_my_other" >
								<a href="?">后台首页</a>|
								<a href="?h=user&c=user_list_go&k=<?php echo $_SESSION['user_id']; ?>&p=index.php" target="_blank">访问前台</a>|
								<a href="?h=user&c=user_list_go&k=<?php echo $_SESSION['user_id']; ?>&p=user.phphhc_wh=ziliaohhc_dc=bianji" target="_blank">我的资料</a>|
								<a href="?h=system&c=huancun">清除缓存</a>|
								<a href="?h=get&c=go_out">退出登陆</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="admin_left_main">
				<div style="height:54px;"></div>
				<div id="admin_left" class="click_false">
					<div id="admin_left_bo_main">
						<div id="admin_left_main_so">
							
						</div>
						<div style="clear"></div>
						<div style="height:15px;border-bottom:1px solid #18191D;"></div>
						<div class=''>
						<?php foreach($this->tpl_vars["left_nav"] as $v): ?>
						<dl class="admin_left_main_dl <?php echo $v['name']; ?>">
							<dt><a style="color:#C5D52B;" href="<?php echo $v['url']; ?>"><?php echo $v['title']; ?></a></dt>
							<?php foreach($v['child'] as $val): ?>
							<dd><a href="<?php echo $val['url']; ?>"><?php echo $val['title']; ?></a></dd>
							<?php endforeach; ?>
						</dl>
						<?php endforeach; ?>
						</div>
						<script type="text/javascript">
						$(function(){
							<?php if(empty($_GET['hconfig'])){ ?>
							var obj = $(".<?php echo $_GET['h']; ?>");
							obj.find('dd').show();
							<?php }else{
							?>
							var obj = $(".<?php echo $_GET['hconfig']; ?>");
							obj.find('dd').show();
							<?php
							} ?>
							show();
						})
						</script>
					</div>
					<ul class="admin_left_main_fy">
						<li class="admin_left_main_fy_top"></li>
						<li class="admin_left_main_fy_bottom"></li>
					</ul>
				</div>
				<div id="admin_left_border"></div>
			</div>

		<div class="main">
<?php if( isset($_GET['hhc_return_type'])): ?>
<div style="margin:0 auto 30px;width:90%;border-style:solid;border-width:1px 1px 1px 4px;border-color:#DDDDDD #DDDDDD #DDDDDD <?php if( $_GET['hhc_return_type']=='0'): ?>#a00<?php elseif( $_GET['hhc_return_type']=='1'): ?>#7ad03a<?php elseif( $_GET['hhc_return_type']=='2'): ?>#ff6600<?php endif; ?>;padding:12px 0;background:#FFFFFF;">
	<script type="text/javascript">
		$(function(){
			$("html,body").animate({scrollTop:0});
		})
	</script>
	<div class="msg_top_div" style="margin-left:15px;width:90%;overflow:hidden;font-size:13px;">&nbsp;
		<?php  
		if(!empty($_GET['hhc_return_msg_id'])){
			include './sundry/static_file/json/return_msg.php';
			if(empty($return_msg))
				show_err('错误0x011，您修改过源程序');
			echo json_decode($return_msg[$_GET['hhc_return_msg_id']]);
		}else{
			echo $_GET['hhc_return_msg'];
		}	
		  ?>
	</div>
</div>  
<?php endif; ?>

<style type="text/css">
.msg_top_div a{font-size:13px;color:#0074A2;}
.msg_top_div a:hover{text-decoration:underline;}
.msg_top_div span{font-size:13px;}
</style>


<?php
	if(is_file('./sundry/cache/data/upgrade.php')){
		include './sundry/cache/data/upgrade.php';
	}
	$time = time();

	if(!empty($s_time) && !empty($bb_res) || !empty($bb_data)){
		$y_time = date('Ymd',$s_time);
		$n_time = date('Ymd',$time);
	}
	if(empty($s_time) || empty($bb_res) || empty($bb_data) || $y_time<$n_time){
		$pdo = get_pdo();
		$bb_res = $pdo -> query('select * from '.DB_PRE."config where id='49' limit 1",'');
		@$bb_data=file_get_contents("http://upgrade.blog.ithhc.cn/data1.php?k={$bb_res['v']}");
		if(!empty($bb_data)&&$bb_data!='没有新版本'){
		?>
			<div style="margin:0 auto 30px;width:90%;border-style:solid;border-width:1px 1px 1px 4px;border-color:#DDDDDD #DDDDDD #DDDDDD #ff6600;padding:12px 0;background:#FFFFFF;">
			<div class="msg_top_div" style="margin-left:15px;width:90%;overflow:hidden;font-size:13px;">&nbsp;
				系统发布新版本 V<?php echo $bb_data; ?> 建议您 <a href="?h=system&c=upgrade">立即升级</a>
			</div>
			</div>

		<?php
		}


		$strs = <<<STR
<?php
	
	\$s_time = {$time};
	\$bb_res = '{$bb_res['v']}';
	\$bb_data = <<<BB_DATA
		{$bb_data}
BB_DATA;

STR;

		file_put_contents('./sundry/cache/data/upgrade.php',$strs);
	}
	
?>


			<?php /*网站基本信息开始*/ ?>
			<div class="admin_con_main_parent">
				<form method="post" class="forms" action="?h=set_up&c=basic_submit" enctype="multipart/form-data">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						网站基本信息
					</h1>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<ul>
								<li class="oli">
									<div class="oli_div_1">
										网站主标题
									</div>
									<div class="oli_div_2">
										<input name="3" type="text" class="oli_text" value="<?php echo $this->tpl_vars['res']['3']; ?>">
									</div>
									<div class="oli_div_3">
										网站主标题,会显示在网站首页,并应用与对搜索引擎的网站名称
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										网站短标题
									</div>
									<div class="oli_div_2">
										<input name='4' value="<?php echo $this->tpl_vars['res']['4']; ?>" type="text" class="oli_text">
									</div>
									<div class="oli_div_3">
										网站短标题,会应用于内页标题,图片title信息和底部信息
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										ICP备案号
									</div>
									<div class="oli_div_2">
										<input name='5' type="text" class="oli_text" value="<?php echo $this->tpl_vars['res']['5']; ?>">
									</div>
									<div class="oli_div_3">
										网站备案号将会显示在网站底部
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										第三方流量统计
									</div>
									<div class="oli_div_2">
										<textarea name="6" class='oli_textarea'><?php echo $this->tpl_vars['res']['6']; ?></textarea>
									</div>
									<div class="oli_div_3">
										第三方的流量统计代码，如果不需要很精确的了解访问量，不建议使用，会很大的影响访问速度
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										站点logo
									</div>
									<input type="hidden" name="hhc_v_k" value="7" />
									<input type="hidden" name="hhc_v_k2" value="10" />
									<div class="oli_div_2 margin_left_10" style="font-size:13px;color:#333333;">
										<div class="file_get">
											<div class="file_get_1">
												<div class="file_get_1_div" style="">
													<input class="file_get_name" readonly="readonly" type="text" value="<?php echo $this->tpl_vars['res']['10']; ?>">
												</div>
											</div>
											<div class="file_get_2">选择文件
												<input name="logo" width="50" class="file_get_2_file opacity_0" type="file">
											</div>
											<div class="clear"></div>
										</div>
									</div>
									<div class="oli_div_3">
										网站左上角logo图片
										<?php if( !empty($this->tpl_vars["res"]['7'])): ?>
											,已上传<a target="_blank;" class="logo_chakan" style="color:#0074A2;" href="<?php echo $this->tpl_vars['res']['7']; ?>">点击查看</a>
										<?php endif; ?>
										
									</div>
								<div class="clear"></div>
								</li>
								<?php /*<li class="oli">
									<div class="oli_div_1">
										是否开启站点
									</div>
									<div class="oli_div_2 margin_left_10" style="font-size:13px;color:#333333;">

										<input value="1" type="radio" name="8" class="" <?php if( $this->tpl_vars["res"]['8']=='1'): ?>
											checked="checked"
										<?php endif; ?>>开启&nbsp;&nbsp;
										<input value="0" type="radio" name="8" class="" <?php if( $this->tpl_vars["res"]['8']=='0'): ?>
											checked="checked"
										<?php endif; ?>>关闭
									</div>
									<div class="oli_div_3">
										站点关闭后，只有指定用户或用户组可以访问
									</div>
								<div class="clear"></div>
								</li>
								<input type="hidden" name="9" value="<?php echo $this->tpl_vars['res']['9']; ?>">
								<li class="oli">
									<div class="oli_div_1">
										站点关闭的提示
									</div>
									<div class="oli_div_2">
										<textarea name="9" class='oli_textarea'><?php echo $this->tpl_vars['res']['9']; ?></textarea>
									</div>
									<div class="oli_div_3">
										站点关闭后的提示&nbsp;&nbsp;譬如,网站升级中。。
									</div>
								<div class="clear"></div>
								</li>*/ ?>
							</ul>

							<input type="submit" class="create_zidingyi" href="javascript:void(0)" style="margin:50px 10px 30px 10px;" value="提交修改">
						</div>
					</div>
				</div>
				</form>
			</div>
			<?php /*网站基本信息结束*/ ?>


		</div>
		
		</body>
	</html>
