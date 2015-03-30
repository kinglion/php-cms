<?php
	if(empty($_GET['key']))
		alert(0,0,null,'请先选择要编辑的内容',1);
	switch($_GET['key']){
		case 'news':
			$class_key = 'news';
			$class_id = '1';
		break;
		case 'product':
			$class_key = 'product';
			$class_id = '2';
		break;
		case 'casez':
			$class_key = 'case';
			$class_id = '3';
		break;
		case 'solution':
			$class_key = 'solution';
			$class_id = '4';
		break;
		default :
			$class_key = 'news';
			$class_id = '1';
		break;
	}
	$pdo = get_pdo();
	$class_resz = $pdo -> query('select id,title,type from '.DB_PRE."z_web_class where type='{$class_id}'");
	$class_res = array();
	foreach($class_resz as $v){
		$class_res[$v['id']] = $v;
	}
	if(empty($_GET['k'])){
		//添加
	}else{
		$artcle = $pdo -> query('select * from '.DB_PRE."z_web_{$class_key} where id='{$_GET['k']}' limit 1",'');
	}
?>
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
				<form method="post" class="forms" action="?h=web&c=update_submit" enctype="multipart/form-data">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						内容发布
					</h1>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<ul>
								<li class="oli">
									<div class="oli_div_1">
										文章标题
									</div>
									<div class="oli_div_2" style="width:65%;">
										<input type="text" name="title" value="<?php if(!empty($artcle)){echo $artcle['title'];} ?>" class="oli_text">
									</div>
								<div class="clear"></div>
								</li>
<input type="hidden" name="key" value="<?php echo $class_key; ?>">
<input type="hidden" name="id" value="<?php echo $class_id; ?>">
<?php if(!empty($artcle)){ ?>
<input type="hidden" name="k" value="<?php echo $artcle['id']; ?>">
<?php } ?>
					 			<li class="oli">
									<div class="oli_div_1">
										选择分类
									</div>
									<div class="oli_div_2" style="width:65%;">
										<select name="fenlei">
									<?php foreach($class_res as $v){ ?>
											<option <?php if(!empty($artcle['class_id'])){if($v['id']==$artcle['class_id']){echo 'selected="selected"';}} ?> value="<?php echo $v['id']; ?>"><?php echo $v['title']; ?></option>
									<?php } ?>
										</select>
									</div>
								<div class="clear"></div>
								</li>
<?php if($class_key != 'news'){ ?>
								<li class="oli">
									<div class="oli_div_1">
										文章略缩图
									</div>
									<div class="oli_div_2 margin_left_10" style="font-size:13px;color:#333333;">
										<div class="file_get">
											<div class="file_get_1">
												<div class="file_get_1_div" style="">
													<input class="file_get_name" readonly="readonly" type="text" value="">
												</div>
											</div>
											<div class="file_get_2">选择文件
												<input name="pic" width="50" class="file_get_2_file opacity_0" type="file">
											</div>
											<div class="clear"></div>
										</div>
									</div>
									<input type="hidden" name="pic" value="<?php echo $artcle['pic']; ?>">
									<div class="oli_div_3">
										
										<?php if( !empty($artcle['pic'])): ?>
											已上传<a target="_blank;" class="logo_chakan" style="color:#0074A2;" href="<?php echo $artcle['pic']; ?>">点击查看</a>
										<?php endif; ?>
										
									</div>
								<div class="clear"></div>
								</li>
<?php } ?>
<script type="text/javascript" src="./sundry/plus/ue/ueditor.config.js"></script>
<script type="text/javascript" src="./sundry/plus/ue/ueditor.all.min.js"></script>
<script type="text/javascript" src="./sundry/plus/ue/lang/zh-cn/zh-cn.js"></script>
								<li class="oli">
									<div class="oli_div_1">
										文章内容
									</div>
									<div class="oli_div_2" style="width:65%;">
										<script id="pl" type="text/plain" style="width:100%;height:200px;" name="content"><?php if(!empty($artcle)){echo $artcle['content'];} ?></script>
    <script type="text/javascript">
    var ue = UE.getEditor('pl', {   
    toolbars:[[
      'source','bold','italic','link','unlink','imagenone','imagecenter','imageleft','imageright','simpleupload','insertimage','inserttable','insertcode','deletetable','forecolor','customstyle','paragraph','fontfamily','fontsize','emotion','map','attachment','spechars','searchreplace',    ]]
});
    </script>
									</div>
								<div class="clear"></div>
								</li>
							</ul>


							<input type="submit" class="create_zidingyi" href="javascript:void(0)" style="margin:50px 10px 30px 10px;" value="提交">
						</div>
					</div>
				</div>
				</form>

			</div>
			<?php /*网站基本信息结束*/ ?>




































<div style="height:100px;"></div>

			</div>






		</div>
		
		</body>
	</html>