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
				<form method="post" class="forms" action="?h=set_up&c=<?php if( $_GET['t']=='1'): ?>nav_submit_add<?php elseif( $_GET['t']=='2'): ?>nav_submit_update<?php endif; ?>">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						<?php if( $_GET['t']=='1'): ?>
							创建新栏目
						<?php elseif( $_GET['t']=='2'): ?>
							栏目修改
							<input type="hidden" name="id" value="">
						<?php endif; ?>
					</h1>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<ul>
								<li class="oli">
									<div class="oli_div_1">
										栏目名称
									</div>
									<div class="oli_div_2">
										<input name="nav_name" type="text" class="oli_text" value="">
									</div>
									<div class="oli_div_3">
										栏目的名称
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										隐藏名称
									</div>
									<div class="oli_div_2">
										<input name='nav_yincang' value="" type="text" class="oli_text">
									</div>
									<div class="oli_div_3">
										栏目的隐藏名称，可不填 当鼠标移动到栏目上时 会在一个白框里显示隐藏名称 比如：<span title="隐藏名称">标题</span>
									</div>
								<div class="clear"></div>
								</li>
								<?php if( $_GET['t']=='1' && !empty($_GET['k'])): ?>
								<?php  
								$nav=include_nav();
								  ?>
								<?php if( !empty($nav[$_GET['k']])): ?>
								<li class="oli">
									<div class="oli_div_1">
										父栏目名称
									</div>
									<div class="oli_div_2">
										<input type="hidden" name="nav_parent_id" value="<?php echo $_GET['k']; ?>">
										<input readonly="readonly" value="<?php echo $nav[$_GET['k']]['nav_name']; ?>" style="background:#EEEEEE;" type="text" class="oli_text">
									</div>
									<div class="oli_div_3">
										上级栏目的名称
									</div>
								<div class="clear"></div>
								</li>
								<?php endif; ?>
								<?php endif; ?>
								<li class="oli">
									<div class="oli_div_1">
										栏目的类型
									</div>
									<div class="oli_div_2 margin_left_10" style="font-size:13px;color:#333333;">

										<input checked="checked" name="nav_type" value="1" type="radio" class="type_1">模型栏目&nbsp;&nbsp;
										<input name="nav_type" value="0" type="radio" class="type_0">普通链接
									</div>
									<div class="oli_div_3">
										选择栏目的类型
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli nav_type_moxing">
									<div class="oli_div_1">
										栏目的类型
									</div>
									<div class="oli_div_2 margin_left_10" style="font-size:13px;color:#333333;">
										<select name="nav_moxing">
											<?php include './sundry/cache/json/moxing/moxing.php'; 
											$json=json_decode($json,true);
											foreach($json as $v){
											?>
											<option value="<?php echo $v['id']; ?>" class="moxing_1"><?php echo $v['name']; ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="oli_div_3">
										选择本栏目所使用的模型 您可以进入应用中心 安装新的模型 
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli nav_type_link">
									<div class="oli_div_1">
										链接地址
									</div>
									<div class="oli_div_2">
										<input name='nav_link' type="text" class="oli_text" value="">
									</div>
									<div class="oli_div_3">
										栏目的链接地址，注意：请填写完整的链接地址 需要以http://或者https://开头  如：http://ithhc.cn
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										排序号
									</div>
									<div class="oli_div_2">
										<input name='nav_paixu' type="text" class="oli_text" value="">
									</div>
									<div class="oli_div_3">
										栏目的排序号 必须是正整数或0
										最大60000  前台显示时 由大=》小排列
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										打开方式
									</div>
									<div class="oli_div_2 margin_left_10" style="font-size:13px;color:#333333;">

										<input value="0" type="radio" name="nav_dakai" checked="checked" class="dakai_0">本页打开&nbsp;&nbsp;
										<input value="1" type="radio" name="nav_dakai" class="dakai_1">新窗口打开
									</div>
									<div class="oli_div_3">
										在前台点击时的打开方式
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										是否显示
									</div>
									<div class="oli_div_2 margin_left_10" style="font-size:13px;color:#333333;">

										<input value="1" type="radio" name="nav_xianshi" checked="checked" class="nav_xianshi_1">显示&nbsp;&nbsp;
										<input value="0" type="radio" name="nav_xianshi" class="nav_xianshi_0">不显示
									</div>
									<div class="oli_div_3">
										栏目是否在前台显示
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										是否允许发布
									</div>
									<div class="oli_div_2 margin_left_10" style="font-size:13px;color:#333333;">

										<input value="0" type="radio" name="fabu" checked="checked" class="nav_fabu_0">允许发布文章&nbsp;&nbsp;
										<input value="1" type="radio" name="fabu" class="nav_fabu_1">只允许后台发布文章
									</div>
									<div class="oli_div_3">
										是否允许用户在本栏目下发布文章
									</div>
								<div class="clear"></div>
								</li>
							</ul>

							<input type="submit" class="create_zidingyi" href="javascript:void(0)" style="margin:50px 10px 30px 10px;" value="提交">
						</div>
					</div>
				</div>
				<?php if( $_GET['t']=='2'): ?>
				<?php  
				$nav = include_nav();
				$nav=$nav[$_GET['k']];
				  ?>
				<script type="text/javascript">
					$(function(){
						$('input[name=id]').val('<?php echo $nav["nav_id"]; ?>')
						$('input[name=nav_name]').val('<?php echo $nav["nav_name"]; ?>')
						$('input[name=nav_yincang]').val("<?php echo $nav['nav_yincang']; ?>")
						$('input[name=nav_paixu]').val("<?php echo $nav['nav_paixu']; ?>")
						$('input[name=nav_link]').val('<?php echo $nav["nav_link"]; ?>')
						
						$(".type_<?php echo $nav['nav_type']; ?>").attr('checked','checked');
						nav_type();
						$(".moxing_<?php echo $nav['nav_moxing']; ?>").attr('selected','selected');

						$(".dakai_<?php echo $nav['nav_dakai']; ?>").attr('checked','checked');
						$(".nav_xianshi_<?php echo $nav['nav_xianshi']; ?>").attr('checked','checked');
						$(".nav_fabu_<?php echo $nav['fabu']; ?>").attr('checked','checked');
					})
				</script>
				<?php endif; ?>
				</form>
			</div>
			<?php /*网站基本信息结束*/ ?>


		</div>
		
		</body>
	</html>
