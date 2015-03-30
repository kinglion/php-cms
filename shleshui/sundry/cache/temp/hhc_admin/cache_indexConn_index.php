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



<?php

	$str = false;

	if(is_file('./sundry/cache/data/con_top.php')){
		include './sundry/cache/data/con_top.php';
	}
	if(!empty($str)){
		$y_time = date('Ymd',$time);
		$n_time = date('Ymd',time());
	}

	if(empty($str) || $y_time<$n_time){
		@$str=file_get_contents('http://upgrade.blog.ithhc.cn/data.php');
		$time = time();
		if(!empty($str)){
			$str = <<<STR
	<?php
		\$time = {$time};
		\$str = <<<S
			{$str}
S;

	?>
STR;
			file_put_contents('./sundry/cache/data/con_top.php',$str);
			include './sundry/cache/data/con_top.php';
		}else{
			$str = false;
		}
	}

	if($str!==false){
		$dx_arr = explode('=_=',$str);
?>

			<div class='admin_con_top'>
			<div class="admin_con_main_parent">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						官方动态
					</h1>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<ul>
								<?php echo $dx_arr['0']; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</div>

			<div class='admin_con_top'>
			<div class="admin_con_main_parent">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						热点资讯
					</h1>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<ul>
								<?php echo $dx_arr['1']; ?>
							</ul></div>
					</div>
				</div>
			</div>
			</div>

			<div class='admin_con_top'>
			<div class="admin_con_main_parent">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						广告赞助&nbsp;&nbsp;&nbsp;<a class="admin_con_main_b" href="#" target="_blank">广告服务</a>
					</h1>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<ul>
								<?php echo $dx_arr['2']; ?>
							</ul>

						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="clear"></div>

<?php } ?>


<?php /*自定义 单页/表单/幻灯片 开始*/ ?>
			<div class="admin_con_main_parent">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						自定义 单页/表单/幻灯片
					</h1>
					<?php
						$path1 = './sundry/cache/json/custom/custom.php';
						if(is_file($path1)){
							include $path1;
							$custom=json_decode($json,true);
						}else{
							$pdo = get_pdo();
							$res = $pdo -> query('select * from `'.DB_PRE."custom`");
							$res = empty($res) ? array() : $res;
							$custom = array();
							foreach($res as $v){
								$custom[$v['en_name']]=$v;
							}
							$data = json_encode($custom);
							$json = <<<JSON
<?php
	\$json='{$data}';
?>
JSON;
							file_put_contents($path1,$json);
						}
						$danye = array();
						$biaodan = array();
						$huandengpian = array();
						foreach($custom as $k => $v){
							if($v['type']=='1')
								$danye[$k] = $v;
							else if($v['type']=='2')
								$biaodan[$k] =$v;
							else if($v['type']=='3')
								$huandengpian[$k]=$v;
						}
						unset($custom);
						$path1 = './sundry/cache/json/custom/danye.php';
						if(is_file($path1)){
							include $path1;
							$res = json_decode($json,true);
						}else{
							$pdo = get_pdo();
							$ress = $pdo -> query('select * from '.DB_PRE."danye");
							if($ress===false)
								alert(0,0,'?','不存在的单页',1);
							$res = array();
							foreach($ress as $v){
								$res[$v['k']]=$v;
							}
							$data = json_encode($res);
							$json = <<<JSON
<?php
	\$json='{$data}';
?>
JSON;
							file_put_contents($path1,$json);
						}
					?>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<?php /*单页开始*/ ?>
							<div class='admin_con_main_con_main_div_3'>
								<h2>自定义单页</h2>
								
								<?php foreach($danye as $v){ ?>
								<div class="admin_con_main_con_main_div_3_div"><a target="_blank" href="index.php?h=custom&c=danye&k=<?php echo $v['en_name']; ?>"><?php echo $v['cn_name'] ?></a>&nbsp;&nbsp;<a href="?h=custom&c=danye_update&k=<?php echo $v['en_name']; ?>" class="admin_con_main_con_main_div_3_div_bianji">编辑</a>&nbsp;<a class="admin_con_main_con_main_div_3_div_bianji admin_con_main_con_main_div_3_div_shanchu delete_tishi" href="?h=custom&c=danye_delete&k=<?php echo $v['en_name']; ?>">删除</a></div>
								<?php } ?>
							
							<a href="?h=custom&c=danye_create" class="create_zidingyi">创建一个单页</a>
							</div>
							<?php /*单页结束*/ ?>
							<?php /*表单开始*/ ?>
							<div class='admin_con_main_con_main_div_3'>
								<h2>自定义表单</h2>
								
								<div class="admin_con_main_con_main_div_3_div"><a target="_blank" href="user.php?h=login&c=register">用户注册</a>&nbsp;&nbsp;<a href="?h=custom&c=form_update&k=reg" class="admin_con_main_con_main_div_3_div_bianji">编辑</a></div>

								<?php foreach($biaodan as $v){ ?>
								<div class="admin_con_main_con_main_div_3_div"><a target="_blank" href="index.php?h=custom&c=biaodan&k=<?php echo $v['en_name']; ?>"><?php echo $v['cn_name'] ?></a>&nbsp;&nbsp;<a href="?h=custom&c=form_update&key=<?php echo $v['en_name']; ?>" class="admin_con_main_con_main_div_3_div_bianji">编辑</a>&nbsp;<a class="admin_con_main_con_main_div_3_div_bianji" href="?h=custom&c=form_guanli&k=<?php echo $v['en_name']; ?>" style="color:#ff6600">管理</a>&nbsp;<a href="?h=custom&c=biaodan_delete&k=<?php echo $v['en_name']; ?>" class="admin_con_main_con_main_div_3_div_bianji admin_con_main_con_main_div_3_div_shanchu delete_tishi">删除</a></div>
								<?php } ?>

							<a href="?h=custom&c=form_create" class="create_zidingyi">创建一个表单</a>
							</div>
							<?php /*表单结束*/ ?>
							<?php /*幻灯片开始*/ ?>
							<div class='admin_con_main_con_main_div_3'>
								<h2>自定义幻灯片</h2>

								<?php foreach($huandengpian as $v){ ?>
								<div class="admin_con_main_con_main_div_3_div"><a href="#"><?php echo $v['cn_name'] ?></a>&nbsp;&nbsp;<a href="?h=custom&c=hdp_update&k=<?php echo $v['id']; ?>" class="admin_con_main_con_main_div_3_div_bianji">编辑</a>&nbsp;<a href="?h=custom&c=hdp_delete&k=<?php echo $v['id']; ?>" class="admin_con_main_con_main_div_3_div_bianji admin_con_main_con_main_div_3_div_shanchu delete_tishi">删除</a></div>
								<?php } ?>
							
							<a href="?h=custom&c=hdp_create" class="create_zidingyi">创建一个幻灯片组</a>
							</div>
							<?php /*幻灯片结束*/ ?>
						</div>
					</div>
				</div>
			</div>
<?php /*/自定义 单页/表单/幻灯片 结束*/ ?>

		</div>
		<div class='clear'></div>

		
		</body>
	</html>
