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
			<?php  
				include './sundry/cache/json/reg_baoliu.php';
				if(!isset($baoliu_name) || !isset($baoliu_key)){
				show_err("错误 0x005 您修改过源程序 导致程序无法正常运行！");
			}
			  ?>
			<form method="post" action="?h=set_up&c=reg_submit">
			<div class="admin_con_main_parent">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						注册/访问设置
					</h1>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<ul>
								<li class="oli">
									<div class="oli_div_1">
										是否允许注册
									</div>
									<div class="oli_div_2">
<input type="radio" value="0" <?php if( $this->tpl_vars["reg"]['11']=='0'): ?>checked="checked"<?php endif; ?> name="11" class="zhuce"><span style="font-size:13px;">不允许注册</span>
<div style="height:10px;"></div>
<input type="radio" <?php if( $this->tpl_vars["reg"]['11']=='1'): ?>checked="checked"<?php endif; ?> name="11"  value="1" class="zhuce"><span style="font-size:13px;">开启普通注册</span>
<div style="height:10px;"></div>
<input type="radio" <?php if( $this->tpl_vars["reg"]['11']=='2'): ?>checked="checked"<?php endif; ?> name="11" value="2" class="zhuce"><span style="font-size:13px;">开启邀请码注册</span>									</div>
									<div class="oli_div_3">
										已注册用户可以通过积分购买 或 其他用户赠送的方式获得邀请码
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli gm_yqm" style="display:none;">
									<div class="oli_div_1">
										购买邀请码
									</div>
									<div class="oli_div_2">
<input type="radio" <?php if( ceil($this->tpl_vars["reg"]['12'])=='1'): ?>checked="checked"<?php endif; ?>  value="1" class="goumai_yzm" name="12"><span style="font-size:13px;">开启</span>&nbsp;&nbsp;
<input type="radio" <?php if( $this->tpl_vars["reg"]['12']=='0'): ?>checked="checked"<?php endif; ?> value="0" name="12" class="goumai_yzm"><span style="font-size:13px;">不开启</span>									</div>
									<div class="oli_div_3">
用户可以通过在线购买获得邀请码，请确定配置好了 系统扩展=》在线支付 与 系统扩展 =》邮箱配置。&nbsp;&nbsp;邀请码的价格 请在 用户管理=》积分奖惩制度中修改
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli yqm_show" style="display:none">
									<div class="oli_div_1">
										购买的提示名
									</div>
									<div class="oli_div_2">
										<input type="text" class="oli_text" name="13" value="<?php echo $this->tpl_vars['reg']['13']; ?>">
									</div>
									<div class="oli_div_3">
						验证码购买的提示文字
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli yqm_show" style="display:none">
									<div class="oli_div_1">
										购买时的动作
									</div>
									<div class="oli_div_2" style="font-size:13px;color:#333333;">
										<input <?php if( $this->tpl_vars["reg"]['14']=='0'): ?>checked="checked"<?php endif; ?> type="radio" value="0" name="14" class="goumai_yzm_type_input">直接购买&nbsp;&nbsp;
										<input <?php if( $this->tpl_vars["reg"]['14']=='1'): ?>checked="checked"<?php endif; ?> type="radio" value="1" name="14" class="goumai_yzm_type_input">跳转到一个指定的地址
									</div>
									<div class="oli_div_3">
										
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli yqm_show goumai_yzm_type" style="display:none">
									<div class="oli_div_1">
										跳转的地址
									</div>
									<div class="oli_div_2">
										<input name="15" type="text" class="oli_text" value="<?php echo $this->tpl_vars['reg']['15']; ?>">
									</div>
									<div class="oli_div_3">
										点击验证码购买时 跳转的地址&nbsp;&nbsp;必须填完整url 如：http://ithhc.cn
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli close_zhuce_tishi" style="display:none;">
									<div class="oli_div_1">
										关闭注册的提示
									</div>
									<div class="oli_div_2">
										<input name="16" type="text" class="oli_text" value="<?php echo $this->tpl_vars['reg']['16']; ?>">
									</div>
									<div class="oli_div_3">
										不开启注册时的提示信息
									</div>
								<div class="clear"></div>
								</li>
								<?php /*<li class="oli">
									<div class="oli_div_1">
										用户注册后的角色
									</div>
									<div class="oli_div_2" style="font-size:13px;color:#333333;">
										<select name="17">
											<option value="1" class="reg_op_1">平民</option>
											<option value="0" class="reg_op_0">囚犯</option>
											<option value="2" class="reg_op_2">尚书</option>
											<option value="3" class="reg_op_3">宰相</option>
											<script type="text/javascript">
											$(function(){
												$('.reg_op_<?php echo $this->tpl_vars['reg']['17']; ?>').attr('selected','selected')
											})
											</script>
										</select>
									</div>
									<div class="oli_div_3">
										用户注册后的默认角色 设置更多请移步至 会员管理=》权限/级别设置
										如果在这里设置的级别被删除了  则自动使用系统保留级别，也就是0级的平民
									</div>
								<div class="clear"></div>
								</li>*/ ?>
								<li class="oli">
									<div class="oli_div_1">
										是否邮件注册
									</div>
									<div class="oli_div_2" style="font-size:13px;color:#333333;">
										<input <?php if( $this->tpl_vars["reg"]['18']=='1'): ?>checked="checked"<?php endif; ?> type="radio" value="1" name="18" class="">开启&nbsp;&nbsp;
										<input <?php if( $this->tpl_vars["reg"]['18']=='0'): ?>checked="checked"<?php endif; ?> type="radio" value="0" name="18" class="">关闭
									</div>
									<div class="oli_div_3">
										开启邮件注册后 用户必须验证邮箱才能获取注册信息
										请先配置好 系统扩展=》邮箱配置
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										保留用户名
									</div>
									<div class="oli_div_2">
										<textarea name="baoliu_name" class='oli_textarea'><?php  
											foreach(json_decode($baoliu_name) as $v){
												echo $v."\n";
											}
											  ?></textarea>
									</div>
									<div class="oli_div_3">
										保留的用户名 一行一个 如 admin 则用户使用admin时无法注册 使用administrator 时 不会影响注册
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										保留关键词
									</div>
									<div class="oli_div_2">
										<textarea name="baoliu_key" class='oli_textarea'><?php  
											foreach(json_decode($baoliu_key) as $v){
												echo $v."\n";
											}
											  ?></textarea>
									</div>
									<div class="oli_div_3">
										保留的关键词 一行一个 比如 法轮功，当用户名中[含有]法轮功时，无法注册，而如果是法-轮-功，则不影响注册
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										屏蔽用户名提示
									</div>
									<div class="oli_div_2">
										<input name="19" type="text" class="oli_text" value="<?php echo $this->tpl_vars['reg']['19']; ?>">
									</div>
									<div class="oli_div_3">
						当用户使用的用户名被屏蔽时提示的信息
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										用户名最小长度
									</div>
									<div class="oli_div_2">
										<input name="20" type="text" class="oli_text" value="<?php echo $this->tpl_vars['reg']['20']; ?>">
									</div>
									<div class="oli_div_3">
						用户名 密码 长度 为0或不填 则不限制
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										用户名最大长度
									</div>
									<div class="oli_div_2">
										<input name="21" type="text" class="oli_text" value="<?php echo $this->tpl_vars['reg']['21']; ?>">
									</div>
									<div class="oli_div_3">
							最大只能到50
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										密码最小长度
									</div>
									<div class="oli_div_2">
										<input name="22" type="text" class="oli_text" value="<?php echo $this->tpl_vars['reg']['22']; ?>">
									</div>
									<div class="oli_div_3">
						
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										密码最大长度
									</div>
									<div class="oli_div_2">
										<input name="23" type="text" class="oli_text" value="<?php echo $this->tpl_vars['reg']['23']; ?>">
									</div>
									<div class="oli_div_3">
						
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										注册后操作
									</div>
									<div class="oli_div_2" style="font-size:13px;color:#333333;">
										<input <?php if( $this->tpl_vars["reg"]['24']=='0'): ?>checked="checked"<?php endif; ?> type="radio" name="24" value="0" class="">自动开通个人主页&nbsp;&nbsp;
										<input <?php if( $this->tpl_vars["reg"]['24']=='1'): ?>checked="checked"<?php endif; ?> type="radio" name="kaitong_zhuye" value="1" class="">
										手动开通
									</div>
									<div class="oli_div_3">
										用户注册成功后是否立即开通个人主页[企业用户则是企业网站]&nbsp;&nbsp;&nbsp;如果开通主页需要一定的权限 则需要使用手动开通
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										是否审核
									</div>
									<div class="oli_div_2" style="font-size:13px;color:#333333;">
										<input <?php if( $this->tpl_vars["reg"]['25']=='0'): ?>checked="checked"<?php endif; ?> type="radio" name="25" value="0" class="">不审核&nbsp;&nbsp;
										<input <?php if( $this->tpl_vars["reg"]['25']=='1'): ?>checked="checked"<?php endif; ?> value="1" type="radio" name="25" class="">
										需要审核
									</div>
									<div class="oli_div_3">
										用户是否需要审核后才能正常操作
									</div>
								<div class="clear"></div>
								</li>
								<?php /*<li class="oli">
									<div class="oli_div_1">
										注册后状态
									</div>
									<div class="oli_div_2" style="font-size:13px;color:#333333;">
										<input <?php if( $this->tpl_vars["reg"]['26']=='0'): ?>checked="checked"<?php endif; ?> name="26" type="radio" value="0" class="">正常用户&nbsp;&nbsp;
										<input <?php if( $this->tpl_vars["reg"]['26']=='1'): ?>checked="checked"<?php endif; ?> type="radio" name="26" value="1" class="">
										实习期
									</div>
									<div class="oli_div_3">
										
									</div>
								<div class="clear"></div>
								</li>
								<li class="oli">
									<div class="oli_div_1">
										实习期时间
									</div>
									<div class="oli_div_2">
										<input name="27" type="text" class="oli_text" value="<?php echo $this->tpl_vars['reg']['27']; ?>">
									</div>
									<div class="oli_div_3">
						这里单位是分钟  更多设置请查看 会员管理=》权限/级别设置
									</div>
								<div class="clear"></div>
								</li>*/ ?>
								<li class="oli">
									<div class="oli_div_1">
										注册后类型
									</div>
									<div class="oli_div_2" style="font-size:13px;color:#333333;">
										<input <?php if( $this->tpl_vars["reg"]['28']=='1'): ?>checked="checked"<?php endif; ?> value="1" type="radio" name="28" class="">个人用户&nbsp;&nbsp;
										<input <?php if( $this->tpl_vars["reg"]['28']=='0'): ?>checked="checked"<?php endif; ?> value="0" type="radio" name="28" class="">
										企业用户
									</div>
									<div class="oli_div_3">
										
									</div>
								<div class="clear"></div>
								</li>
							</ul>

							<input type="submit" class="create_zidingyi" style="margin:50px 10px 30px 10px;" value="提交修改">
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(function(){
					if($('input[name=11]:checked').val()=='2'){
						$('.gm_yqm').show();
					}else{
						$('.gm_yqm').hide();
						$('.yqm_show').hide();
					}
					$('input[name=11]').change(function(){
						if($(this).val()=='2'){
							$('.gm_yqm').show();
							if($('input[name=12]:checked').val()=='1'){
								$('.yqm_show').show();
							}
						}else if($(this).val()=='1'){
							$('.gm_yqm').hide();
							$('.yqm_show').hide();
						}else{
							$('.gm_yqm').hide();
							$('.yqm_show').hide();
						}
					})
				})
			</script>
			</form>
			<?php /*网站基本信息结束*/ ?>


		</div>
		
		</body>
	</html>
