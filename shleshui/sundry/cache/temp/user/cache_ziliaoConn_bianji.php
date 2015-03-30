<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>郝海川博客0--会员中心</title>
			<link rel="stylesheet" type="text/css" href="./sundry/static_file/css/hhc_init.css">
			<link rel="stylesheet" type="text/css" href="<?php echo TPL; ?>/default/css/user.css">
			<script src="./sundry/static_file/js/jquery.js" type="text/javascript"></script>
			<script src="<?php echo TPL; ?>/default/js/user.js" type="text/javascript"></script>
			<!--[if IE 6]>
				<style type="text/css">
				#user_top,.position_right_title,.zan_user{position:absolute;top:expression(eval(document.documentElement.scrollTop)););}
				.position_right_title{margin-top:200px;}
				#user_top_main,.user_main{_width:expression((documentElement.clientWidth < 960) ? "950px" : "" );}
				</style>
			<![endif]-->
			<!--[if lt IE 10]>
			<style type="text/css">
				.vip_dl dd span,.r_c_p_f{float:none;}
			</style>
			<![endif]-->
		</head>
		<body>

<?php
	$pdo = get_pdo();
	//$pdo -> sql('alter table '.DB_PRE."xiaoxi add on_read tinyint not null default 0");
	$xiaoxi_num = $pdo -> query('select count(*) from '.DB_PRE."xiaoxi where user_id = {$_SESSION['user']['user_id']} and on_read='0' limit 1",'');
	$xiaoxi_num = empty($xiaoxi_num['count(*)']) ? '0' : $xiaoxi_num['count(*)'];
?>
			<div id="user_top" class="click_false">
				<div id="user_top_main" style="overflow:hidden;">
					<div id="user_top_main_left"><img src="<?php echo TPL; ?>/default/img/logo.jpg"></div>
					<div id="user_top_main_medium">
						<ul>
							<li><a href="index.php">网站首页</a></li>
							<li><a href="?">会员中心</a></li>
							<?php /*<li><a href="">个人主页</a></li>*/ ?>
						</ul>
					</div>
					<div id="user_top_main_right">
						<ul>
							<div class="set_pic"><a href="?h=ziliao&c=avatar" title="设置我的头像"><img src="<?php echo $_SESSION['user']['pic']; ?>"></a></div>
							<li class="user_top_main_right_text"><a title="编辑我的资料" href="?h=ziliao&c=bianji"><?php
	echo empty($_SESSION['user']['username'])?$_SESSION['user']['user_name']:$_SESSION['user']['username'];
?></a></li>
							<li class="user_top_main_right_text"><a title="我的消息" href="?h=hudong&c=xiaoxi">消息(<?php echo $xiaoxi_num; ?>)</a></li>
							<li class="user_top_main_right_text"><a title="我要充值">充值</a></li>
							<li class="user_top_main_right_text"><a title="安全退出" href="?h=login&c=goout">退出</a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div style="height:100px;"></div>
		<div class="user_main">
					<div class='user_main_left'>
			<dl style="padding-bottom:10px;">
				<dt>我的资料</dt>
				<dd class="user_left_top" style="overflow:hidden;">
					<img src="<?php echo $_SESSION['user']['pic']; ?>">
					<a class="user_name" href="?h=ziliao&c=bianji"><?php echo $_SESSION['user']['user_name']; ?></a>
					<div class="user_left_top_dengji">
					<?php if( $_SESSION['user']['vip']==='0'): ?>
						<a title="未点亮VIP" class="no_vip" href=""></a>
					<?php elseif( $_SESSION['user']['vip']==='1'): ?>
						<?php if( $_SESSION['user']['sex']==='0'): ?>
							<a title="个性VIP 点击查看我的特权" class="gx_vip_0" href=""></a>
						<?php else: ?>
							<a title="个性VIP 点击查看我的特权" class="gx_vip_1" href=""></a>
						<?php endif; ?>
					<?php elseif( $_SESSION['user']['vip']==='2'): ?>
						<a title="黄金VIP 点击查看我的特权" class="hj_vip" href=""></a>
					<?php endif; ?>
					</div>
					<div class="clear"></div>
				</dd>
				<dd><a title="当前等级：Lv<?php echo $_SESSION['user']['level_class']; ?>  ">等级：Lv<?php echo $_SESSION['user']['level_class']; ?></a>&nbsp;[<span style="color:#<?php echo $_SESSION['user']['level_color']; ?>;"><?php echo $_SESSION['user']['level_name']; ?></span>]</dd>
				<dd>我的积分：<?php echo $_SESSION['user']['user_integral']; ?></dd>
				<dd>金币余额：<?php echo $_SESSION['user']['jinbi']; ?></dd>
				<dd>金豆余额：<?php echo $_SESSION['user']['jindou']; ?></dd>
			</dl>

			<dl class="list_dl">
				<dt>完善资料</dt>
				<a href="?h=ziliao&c=bianji"><dd><span>></span>编辑资料</dd></a>
				<a href="?h=ziliao&c=avatar"><dd><span>></span>修改头像</dd></a>
				<a href="?h=ziliao&c=password"><dd><span>></span>修改密码</dd></a>
				<a href="?h=ziliao&c=jifen"><dd><span>></span>积分</dd></a>
				<!--<a href="?h=ziliao&c=dengji"><dd><span>></span>等级</dd></a>-->
				<a href="?h=ziliao&c=tuiguang"><dd class=""><span>></span>推广</dd></a>
			</dl>

			<dl class="list_dl">
				<dt>文章管理 - 选择栏目</dt>
				<?php
					$pdo = get_pdo();
					$left_res = $pdo -> query('select `nav_name`,`nav_id` from `'.DB_PRE."nav` where `nav_type` = '1' order by `nav_paixu` desc");
					$left_res = empty($left_res) ? array() : $left_res;
					foreach($left_res as $v){
				?>
				<a href="?h=article&c=manage&k=<?php echo $v['nav_id']; ?>"><dd><span>></span><?php echo $v['nav_name'] ?></dd></a>
				<?php } ?>
			</dl>

			<dl class="list_dl">
				<dt>会员互动</dt>
				<dd><span>></span><a href="?h=hudong&c=sc_xiangce" class='list_dl_dd_a'>上传</a><a href="?h=hudong&c=xiangce">我的相册</a></dd>
				<a href="?h=hudong&c=rizhi"><dd><span>></span>我的日志</dd></a>
				<a href="?h=hudong&c=xiaoxi"><dd><span>></span>我的消息</dd></a>
				<!--<a href="?h=hudong&c=haoyou"><dd><span>></span>好友列表</dd></a>
				<a href="?h=hudong&c=guanzhu"><dd><span>></span>我的关注</dd></a>-->
				<a href="?h=hudong&c=weibo"><dd><span>></span>心情微博</dd></a>
				<!--<a href="?h=hudong&c=kanwo"><dd><span>></span>谁看过我</dd></a>
				<a href="?h=hudong&c=ceshi"><dd class=""><span>></span>心理测试</dd></a>-->
			</dl>
<!--
			<dl class="list_dl">
				<dt>个人主页</dt>
				<a href="hhc.php?h=website&c=index&k=<?php echo $_SESSION['user']['user_id']; ?>" target="_blank"><dd><span>></span>我的主页</dd></a>
				<a href="?h=website&c=setting"><dd><span>></span>网站设置</dd></a>
				<a href="?h=website&c=temp"><dd><span>></span>编辑模板</dd></a>
				<a href="?h=website&c=url"><dd class=""><span>></span>个性网址</dd></a>
			</dl>
-->
		</div>



			<div class="n_main">
				
				<div class="n_main_title">
					<a href="?" class="hyzx">会员中心&nbsp;&nbsp;</a> 
					<a>>>&nbsp;&nbsp;</a>
					<a href="?h=<?php echo $_GET['h']; ?>&c=<?php echo $_GET['c']; ?>">
						<?php if((!empty($this->tpl_vars["right_title"]))): ?>
							<?php echo $this->tpl_vars["right_title"]; ?>
							<?php else: ?>
								<?php
									switch($_GET['c']){
										case 'jifen':
								?>
									我的积分
								<?php
										break;
										case 'jinbi':
								?>
									我的金币
								<?php
										break;
										case 'jindou':
								?>
									我的金豆
								<?php
										break;
										case 'zhuanhuan':
								?>
									积分转换
								<?php
										break;
										case 'chongzhi':
								?>
									金币充值
								<?php
										break;
									}

								?>
						<?php endif; ?>
					</a>
				</div>
				<?php
				?>
				<div class="n_main_main">
					<div class="n_main_main_title">
						<ul>
							<li style="border-bottom:0;height:35px;background:#FFFFFF;cursor:default;">基本资料</li>
							<a href="?h=ziliao&c=lianxi"><li>联系方式</li></a>
							<a href="?h=ziliao&c=xiangxi"><li>详细信息</li></a>
						</ul>
					</div>
					<form action="?h=ziliao&c=bianji_submit" method="post" enctype="multipart/form-data">
					<div class="n_main_main_main">
						<ul class="n_main_main_main_sul">
							<li>
								<div class="n_main_main_main_li_l">用户名&nbsp;</div>
								<div class="n_main_main_main_li_m"> 	<input class="text readonly" readonly="readonly" type="text" value="<?php echo $_SESSION['user']['user_name']; ?>">&nbsp;</div>
								<div class="n_main_main_main_li_r">注册时的用户名 无法修改&nbsp;
								</div>
								<div class="clear"></div>
							</li>
							<li>
								<div class="n_main_main_main_li_l">真实姓名&nbsp;</div>
								<div class="n_main_main_main_li_m"> 	<input class="text" name="username" type="text" value="<?php echo $_SESSION['user']['username']; ?>">&nbsp;</div>
								<div class="n_main_main_main_li_r">&nbsp;
								</div>
								<div class="clear"></div>
							</li>
							<li>
								<div class="n_main_main_main_li_l">性别&nbsp;</div>
								<div class="n_main_main_main_li_m"> 
									<span class="r_c_p_f">
										<input value="1" <?php if( $_SESSION['user']['sex']=='1'): ?>checked="checked"<?php endif; ?> name="sex" type="radio">&nbsp;男
									</span>
									<span class="r_c_p_f">
										<input value="0" <?php if( $_SESSION['user']['sex']=='0'): ?>checked="checked"<?php endif; ?> name="sex" type="radio">&nbsp;女
									</span>
									&nbsp;</div>
								<div class="n_main_main_main_li_r">&nbsp;
								</div>
								<div class="clear"></div>
							</li>
							<li>
								<div class="n_main_main_main_li_l">出生日期&nbsp;</div>
								<div class="n_main_main_main_li_m"> 	<?php
			$year=ceil(date('Y',time()));
			$month=ceil(date('m',time()));
			$day=ceil(date('d',time()));
			echo "<select class='birthday' name='birthday[year]'>";
			$c = '';
			for($l=$year;$l>$year-100;$l--){
				$c = '';
				if($l==$_SESSION['user']['b_year'])
					$c = 'selected="selected"';
				echo "<option {$c} >{$l}</option>";
			}
			echo '</select>&nbsp;<span>年</span>&nbsp;';

			echo "<select class='birthday' name='birthday[month]'>";
			for($l=1;$l<13;$l++){
				$c = '';
				if($l==$_SESSION['user']['b_month'])
					$c = 'selected="selected"';
				echo "<option {$c}>{$l}</option>";
			}
			echo '</select>&nbsp;<span>月</span>&nbsp;';

			echo "<select class='birthday' name='birthday[day]'>";
			for($l=1;$l<32;$l++){
				$c = '';
				if($l==$_SESSION['user']['b_day'])
					$c = 'selected="selected"';
				echo "<option {$c}>{$l}</option>";
			}
			echo '</select>&nbsp;<span>日</span>';
									?>
								&nbsp;
								</div>
								<div class="n_main_main_main_li_r">&nbsp;
								</div>
								<div class="clear"></div>
							</li>
							<?php
								$pdo = get_pdo();
								$res = $pdo -> query('select * from `'.DB_PRE."myform` where `hc` = '1' and type < 100 ");
								foreach($res as $v){
							?>
							<li>
								<div class="n_main_main_main_li_l"><?php echo $v['cn_name']; ?>&nbsp;</div>
								<div class="n_main_main_main_li_m"> 	<?php
										switch($v['type']){
											case '1':
												?>
													<input name="<?php echo $v['en_name']; ?>" class="text" value="<?php echo $_SESSION['user'][$v['en_name']]; ?>" type="text">
												<?php
											break;
											case '2':
												?>
													<textarea name="<?php echo $v['en_name']; ?>" noresize class="text"><?php echo $_SESSION['user'][$v['en_name']]; ?></textarea>
												<?php
											break;
											case '3':
												?>
													<input name="<?php echo $v['en_name']; ?>" type="file">
												<?php
											break;
											case '4':
												$arr = explode(',',$v['defaults']);
												foreach($arr as $vf){
													?>
				<input class='<?php echo $v['en_name']; ?>' value='<?php echo $vf; ?>' type='checkbox' name='<?php echo $v['en_name']; ?>[]' />&nbsp;<?php echo $vf; ?>
				<?php
			}
											break;
											case '5':
												$arr = explode(',',$v['defaults']);
												foreach($arr as $vf){
													?>
				<input class='<?php echo $v['en_name']; ?>' value='<?php echo $vf; ?>' type='radio' name='<?php echo $v['en_name']; ?>' />&nbsp;<?php echo $vf; ?>
				<?php
			}
											break;
											case '6':
												$arr = explode(',',$v['defaults']);
												?>
								<select name="<?php echo $v['en_name']; ?>">
												<?php
												foreach($arr as $vf){
													?>
				<option><?php echo $vf; ?></option>
				<?php
			}
			?>
			</select>
			<?php
											break;
										}
									?>&nbsp;</div>
								<div class="n_main_main_main_li_r"><?php echo $v['tishi']; ?><?php if($v['type']=='3' && !empty($_SESSION['user'][$v['en_name']])){echo '已上传，<a target="_blank" href="'.$_SESSION['user'][$v['en_name']].'">点击查看</a>';} ?>&nbsp;
								</div>
								<div class="clear"></div>
							</li>
							<?php } ?>
						</ul>
						<div style="margin:30px 0 0 20px;">
							<input class="submit" type="submit" value="提交">
						</div>
					</div>
				</div>
</form>
				<ul class="position_right_title">
					<li><a href="?h=ziliao&c=bianji">基本资料</a></li>
					<li><a href="?h=ziliao&c=lianxi">联系方式</a></li>
					<li><a href="?h=ziliao&c=xiangxi">详细信息</a></li>
				</ul>
			</div>




		</div>
			
		</body>
	</html>