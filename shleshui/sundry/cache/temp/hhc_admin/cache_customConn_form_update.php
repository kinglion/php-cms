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


			<?php /*网站栏目设置开始*/ ?>
			<form class="form1" method="post" action="?h=custom&c=form_ziduan_update_submit">
			<div class="admin_con_main_parent">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						自定义表单编辑
						<span style="color:#FFFFFF;margin-left:100px;"> </span>
					</h1>
					<?php
						$pdo = get_pdo();
						if(!empty($_GET['k'])){
							if(in_array($_GET['k'],array('reg'))){
								if($_GET['k']=='reg'){
									//注册
									$res = $pdo -> query('select * from `'.DB_PRE."myform` where `hc` = '1' order by `paixu` desc ");
									$res = empty($res) ? array() : $res;
								}
							}
						}else{
							if(empty($_GET['key']))
								exit;
							$res = $pdo -> query('select * from `'.DB_PRE."myform` where k='{$_GET['key']}'");
							if($res===false)
								alert(0,0,'?','不存在的表单');
							$res = empty($res) ? array() : $res;
						}
						
					?>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<table class='admin_main_table admin_nav_layout_table'>
								<tr class='admin_con_tr_title admin_nav_layout'>
									<th class="nav_th_text_shunxu">顺序</th>
									<th class="nav_th_text">名称</th>
									<th class="nav_th_text">英文名称</th>
									<th class="nav_th_text">类型</th>
									<th class="nav_th_text">提示</th>
									<th class="nav_th_leixing">显示</th>
									<th class="nav_th_leixing">列表显示</th>
									<th class="nav_th_leixing">操作</th>
								</tr>
								<?php /*循环*/ ?>
								<?php foreach($res as $v){ ?>
								<tr class="admin_con_tr_con">
									<td><input name="s<?php echo $v['id'] ?>[paixu]" class="nav_input_text" type="text" value="<?php echo $v['paixu']; ?>"></td>
									<td><input name="s<?php echo $v['id'] ?>[cn_name]" value="<?php echo $v['cn_name']; ?>" class="nav_input_text" type="text"></td>
									<td><input readonly="readonly" value="<?php echo $v['en_name']; ?>" class="nav_input_text bgie6" type="text"></td>
									
									<td><input readonly="readonly" value="<?php switch($v['type']){case '101': echo '用户名称[单行文本 varchar(50)]'; break;case '102': echo '用户名称[单行文本 char(32) 双层md5加密]'; break;case '103': echo '确认密码[单行文本 只做判断，不进入数据库]'; break;case '104': echo '用户真实姓名或企业名称[单行文本 varchar(30)]'; break;case '105': echo '用户性别[radio单选框 tinyint]'; break;case '106': echo '出生日期[select下拉列表 int-unsigned]'; break;case '107': echo '用户头像[input-File varchar(100)]'; break;
									case '1': echo '单行文本'; break;
									case '2': echo '多行文本'; break;
									case '3': echo '文件上传'; break;
									case '4': echo 'checkbox多选框'; break;
									case '5': echo 'radio单选框'; break;
									case '6': echo 'select下拉列表'; break;
								} ?>" class="nav_input_text bgie6" type="text"></td>
								<input type="hidden" name="s<?php echo $v['id'] ?>[id]" value="<?php echo $v['id'] ?>">
									<td><input name="s<?php echo $v['id'] ?>[tishi]" value="<?php echo $v['tishi']; ?>" class="nav_input_text" type="text"></td>
									<td><input <?php if($v['xianshi']==='1'){echo 'checked="checked"';} ?> name="s<?php echo $v['id'] ?>[xianshi]" value="1" type="checkbox"></td>
									<td><input <?php if($v['list_xianshi']==='1'){echo 'checked="checked"';} ?> name="s<?php echo $v['id'] ?>[list_xianshi]" value="1" type="checkbox"></td>
									<td><a class="delete_tishi" href="?h=custom&c=form_ziduan_delete<?php if(!empty($_GET['k'])){echo "&k={$_GET['k']}";}if(!empty($_GET['key'])){echo "&key={$_GET['key']}";} ?>&v=<?php echo $v['en_name']; ?>">删除</a></td>
								</tr>
								<?php } ?>
								<?php /*/循环*/ ?>
							</table>
<a href="?h=custom&c=form_ziduan_create<?php if(!empty($_GET['k'])){echo "&k={$_GET['k']}";} if(!empty($_GET['key'])){echo "&key={$_GET['key']}";} ?>" class="a_F60" style="display:block;margin:5px 0 0 15px;float:left;">创建新的项</a>
<div class="clear"></div>
							<input class="create_zidingyi" style="float:left;margin:50px 10px 30px 10px;" type="submit" value="修改全部">
						</div>
					</div>
				</div>
			</div>
			</form>
			<?php /*网站栏目设置结束*/ ?>


		</div>
		
		</body>
	</html>
