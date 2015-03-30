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
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						城市设置  
					</h1>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<div class="city_div">
									<a target="_blank" href="?h=set_up&c=city_add" style="margin:5px 0 20px;" class="create_zidingyi">添加一个城市</a>
								<div class="city_div_div">
									<div style="float:left;width:75px;" class="city_span">选择地区：</div>
									<div class="city_select" style="width:88%;">
									<?php 
										foreach($this->tpl_vars['city']['select'] as $k => $v){ ?> 
									<select key="<?php echo $k; ?>" name="city_select">
										<?php $arr=array(); foreach($v as $val){
											$arr[$val['id']]=$val['name']
										 ?>
										<?php if(!in_array('--请选择--',$arr)){ $arr['0']='--请选择--'; ?>
										<option value="<?php echo $val['pid'] ?>">--请选择--</option>
										<?php } v($arr); ?>
										<option <?php if(!empty($val['select'])) echo 'selected="selected"'; ?> value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
										<?php }  unset($arr); ?>
									</select>

									<?php } ?>
								</div>
								<div class="clear"></div>
								</div>
								<div class="city_div_div">
									<form method="get">
									<span class="city_span">分类检索：</span>
									<input type="hidden" name="h" value="set_up">
									<input type="hidden" name="c" value="city">
									<select name="xianshi">
										<option value="0">--显示--</option>
										<option value="0">显示当前地区</option>
										<option value="1" <?php if( !empty($_GET['xianshi'])): ?>selected="selected"<?php endif; ?>>显示全部</option>
									</select>&nbsp;&nbsp;

									<span class="city_span">名称：</span>&nbsp;<input name="name" class="city_input" type="text" value="<?php if( !empty($_GET['name'])): ?><?php echo $_GET['name']; ?><?php endif; ?>">&nbsp;&nbsp;
									<input type="submit" value="提交" class="city_submit">
									</form>
								</div>
								<div class="city_main">
 					 <?php if( !empty($this->tpl_vars["city"]['res'])): ?>
									<table class="city_table">
										<tr>
											<th>选中</th>
											<th>排序号</th>
										<th>名称</th>
										<th>&nbsp;</th>
										<th>操作</th></tr>			<form class="form1" method="post" action="?h=set_up&c=city_update">
										<?php 
										foreach($this->tpl_vars['city']['res'] as $v){ ?>
										<tr>
											<td><input class="input_checkbox_s" name="xuanzhong[]" type="checkbox" value="<?php echo $v['id']; ?>"></td>

											<td><input name="<?php echo $v['id']; ?>[paixu]" value="<?php echo $v['paixu']; ?>" type="text" class="city_input city_input_paixu"></td>
										<td><input name="<?php echo $v['id']; ?>[name]" value="<?php echo $v['name']; ?>" type="text" class="city_input city_input_name"></td>
										<td><a target="_blank" href="?h=set_up&c=city_add&k=<?php echo $v['id']; ?>" class="city_erji">添加下级城市</a></td>
										<td><a href='?h=set_up&c=city_update&k=<?php echo $v['id']; ?>' class="city_input_a delete_tishi">删除</a></td>
										<input name="delete" value="0" type="hidden">
										</tr>
										<?php } ?>
										<tr>
											<td>
												&nbsp;
												</td>
											<td>&nbsp;</td>
										<td>&nbsp;</th>
										<td>&nbsp;</td>
										<td>&nbsp;</td></tr>
										<tr>
											<td>
												<span class="quanxuan_s" style="">全选</span>
												</td>
											<td><span class="quanxuan_z" style="">取消</span></td>
										<td>&nbsp;</th>
										<td>&nbsp;</td>
										<td>&nbsp;</td></tr>
									</table>
					<?php else: ?>
						本分类下没有城市 
					<?php endif; ?>	

								</div>
 					 <?php if( !empty($this->tpl_vars["city"]['res'])): ?>
						<div>
							<a class="create_zidingyi nav_update_a" href="javascript:void(0)" style="float:left;margin:50px 10px 30px 10px;">修改全部</a>
							<a class="create_zidingyi nav_delete_a" href="javascript:void(0)" style="float:left;margin:50px 10px 30px 10px;">删除选中</a>
						</div>
					<?php endif; ?>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php /*网站基本信息结束*/ ?>


		</div>
		
		</body>
	</html>
