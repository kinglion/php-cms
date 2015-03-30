<?php 
	$tb_name = DB_PRE.'z_bbs_thread';
	$type = 'a.id,a.title,a.time,a.top,b.user_name,b.username,c.name';
	$w = '1';
	$order = ' order by a.id desc ';
	$even_arr = array(
			array('table_k'=>'b','table_name'=>DB_PRE.'user','where'=>'on a.user_id=b.user_id'),
			array('table_k'=>'c','table_name'=>DB_PRE.'z_bbs_section','where'=>'on a.s_id=c.id'),
		);
	$page = new page($tb_name,$type,$w.$order,20,'p',true,'a',$even_arr);
	$res = $page->page_2(10);
	$res['0'] = !empty($res['0']) ? $res['0'] : array();
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


			<?php /*文章管理管理开始*/ ?>
			<div class="admin_con_main_parent">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						博客文章管理
					</h1>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<form class="all_form1" method="post" action="?h=bbs&c=art_delete">
							<table class='admin_main_table' style="margin:0;">
								<tr class='admin_con_tr_title'>
									<th style="">删除</th>
									<th style="">标题</th>
									<th style="">作者</th>
									<th style="">版块</th>
									<th style="">发布时间</th>
									<th style="">状态</th>
									<th style="">操作</th>
								</tr>
<?php $top_arr = array('0'=>'普通','1'=>'置顶1','2'=>'置顶2','4'=>'热门','5'=>'精华','6'=>'推荐'); ?>
								<?php foreach($res['0'] as $v){ ?>
								<tr class="admin_con_tr_con">
									<td><input class="check_all" name="all[<?php echo $v['id']; ?>]" value="<?php echo $v['id']; ?>" type="checkbox"></td>
									<td><a target="_blank" title="<?php echo $v['title']; ?>" href="bbs.php?h=index&c=post_content&k=<?php echo $v['id']; ?>"><?php echo mb_substr($v['title'],0,'10','utf-8'); ?></a></td>
									<td><?php echo $v['user_name']; ?></td>
									<td><?php echo $v['name']; ?></td>
									<td><?php echo date('Y-m-d H:i',$v['time']); ?></td>
									<td>
<?php 
	foreach($top_arr as $ks => $vs){
		if($v['top']!=$ks){
			echo "<a href='?h=bbs&hconfig=mokuai&c=top_update&k={$ks}&id={$v['id']}' class='color_a'>{$vs}</a>&nbsp;";
		}else{
			echo "{$vs}&nbsp;";
		}
	}
?>
									</td>
									<td><a target="_blank" href="bbs.php?h=index&c=post_update&k=<?php echo $v['id']; ?>">编辑</a>&nbsp;|&nbsp;<a class="delete_tishi" href="?h=bbs&c=art_delete&k=<?php echo $v['id']; ?>">删除</a></td>
								</tr>
								<?php } ?>
							</table>
							<div style="border-width:0px 1px 1px 1px;border-color:#CCCCCC;border-style:solid;padding:8px 10px;" class="art_list_call">
								<?php if( !empty($res['0'])): ?>
								<a class="quanxuan art_list_call_s" href="javascript:void(0)">全选</a>&nbsp;
								<a class="quanbuxuan art_list_call_s" href="javascript:void(0)">全不选</a>&nbsp;&nbsp;&nbsp;
								<input name="shanchu" type="submit" class="quanxuan_shanchu art_list_call_s" value="删除选中">&nbsp;&nbsp;&nbsp;
							<style type="text/css">
								.art_list_call_s{font-size:13px;color:#0074A2;cursor:pointer;}
								.art_list_call_s:hover{text-decoration:underline;}
							</style>
							<script type="text/javascript">
								$(function(){
									$('.quanxuan').click(function(){
										$('.check_all').prop("checked",true);
			  						});  
									$('.quanbuxuan').click(function(){
										$('.check_all').prop("checked",false);
			  						});  
			  						$('.quanxuan_shanchu').click(function(){
			  							if(!confirm('确定要删除选中项吗？'))
			  								return false;
			  						})
								})
					
					
					
					</script>
								<?php else: ?>
								没有数据
								<?php endif; ?>
							</form>
							</div>
							<?php /*分页和检索*/ ?>
							<div class="page_so_parent">
								<div class="hhc_page">
									<?php echo $res['1']; ?>
								</div>
								<div style="height:10px;">&nbsp;</div>
								
								</div>
							<div class="clear"></div>
							</div>
							<?php /*/分页和检索*/ ?>
							&nbsp;
						</div>
					</div>
				</div>
					<?php /*/文章管理结束*/ ?>

			



			<?php /*文章管理管理开始*/ ?>
<?php
	$pdo = get_pdo();
	$res = $pdo -> query('select * from '.DB_PRE."z_bbs_section_class order by paixu desc");
?>
			<div class="admin_con_main_parent">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						版块分类管理<span></span>
					</h1>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<table class='admin_main_table' style="margin:0;">
								<tr class='admin_con_tr_title'>
									<th style="width:40%;">分类的名称</th>
									<th style="width:10%;">排序</th>
									<th style="width:15%;">状态</th>
									<th style="width:15%;">操作</th>
									<th style="width:20%;"></th>
								</tr>
								<?php foreach($res as $v){ ?>
								<tr class="admin_con_tr_con">
									<td><?php echo $v['name']; ?></td>
									<td><?php echo $v['paixu']; ?></td>
									<td>
										<?php if( $v['xianshi']=='0'): ?>
											显示&nbsp;|&nbsp;<a class="color_a" href="?h=bbs&c=s_fenlei_xianshi&k=1&id=<?php echo $v['id']; ?>">不显示</a>
										<?php else: ?>
											<a class="color_a" href="?h=bbs&c=s_fenlei_xianshi&k=0&id=<?php echo $v['id']; ?>">显示</a>&nbsp;|&nbsp;不显示
										<?php endif; ?>
									</td>
									<td><a href="?h=bbs&c=s_fenlei&k=<?php echo $v['id']; ?>">编辑</a>&nbsp;|&nbsp;<a class="delete_tishi" href="?h=bbs&c=s_fenlei_d&k=<?php echo $v['id']; ?>">删除</a></td>
									<td></td>
								</tr>
								<?php } ?>
							</table>
							
							<?php /*分页和检索*/ ?>
<a href="?h=bbs&c=s_fenlei" class="create_zidingyi" style="margin:50px 10px 30px 10px;">创建分类</a>
							</div>
							<?php /*/分页和检索*/ ?>
							&nbsp;
						</div>
					</div>
				</div>
					<?php /*/文章管理结束*/ ?>






			<?php /*文章管理管理开始*/ ?>
<?php
	$pdo = get_pdo();
	$res = $pdo -> query('select * from '.DB_PRE."z_bbs_section order by paixu desc");
?>
			<div class="admin_con_main_parent">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						版块管理<span></span>
					</h1>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<table class='admin_main_table' style="margin:0;">
								<tr class='admin_con_tr_title'>
									<th style="width:40%;">版块的名称</th>
									<th style="width:10%;">排序</th>
									<th style="width:15%;">状态</th>
									<th style="width:15%;">操作</th>
									<th style="width:20%;"></th>
								</tr>
								<?php foreach($res as $v){ ?>
								<tr class="admin_con_tr_con">
									<td><?php echo $v['name']; ?></td>
									<td><?php echo $v['paixu']; ?></td>
									<td>
										<?php if( $v['xianshi']=='0'): ?>
											显示&nbsp;|&nbsp;<a class="color_a" href="?h=bbs&c=s_bankuai_xianshi&k=1&id=<?php echo $v['id']; ?>">不显示</a>
										<?php else: ?>
											<a class="color_a" href="?h=bbs&c=s_bankuai_xianshi&k=0&id=<?php echo $v['id']; ?>">显示</a>&nbsp;|&nbsp;不显示
										<?php endif; ?>
									</td>
									<td><a href="?h=bbs&c=section&k=<?php echo $v['id']; ?>">编辑</a>&nbsp;|&nbsp;<a class="delete_tishi" href="?h=bbs&c=section_d&k=<?php echo $v['id']; ?>">删除</a></td>
									<td></td>
								</tr>
								<?php } ?>
							</table>
							
							<?php /*分页和检索*/ ?>
<a href="?h=bbs&c=section" class="create_zidingyi" style="margin:50px 10px 30px 10px;">创建版块</a>
							</div>
							<?php /*/分页和检索*/ ?>
							&nbsp;
						</div>
					</div>
				</div>
					<?php /*/文章管理结束*/ ?>



<?php 
	$b_arr = array();
	foreach($res as $v){
		$b_arr[$v['id']] = $v['name'];
	}
?>



			<?php /*文章管理管理开始*/ ?>
<?php
	$pdo = get_pdo();
	$res = $pdo -> query('select * from '.DB_PRE."z_bbs_post_class order by s_id desc");
?>
			<div class="admin_con_main_parent">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						文章分类管理<span></span>
					</h1>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<table class='admin_main_table' style="margin:0;">
								<tr class='admin_con_tr_title'>
									<th style="width:40%;">分类的名称</th>
									<th style="width:10%;">排序</th>
									<th style="width:25%;">所属版块</th>
									<th style="width:15%;">操作</th>
									<th style="width:10%;"></th>
								</tr>
								<?php foreach($res as $v){ ?>
								<tr class="admin_con_tr_con">
									<td><?php echo $v['name']; ?></td>
									<td><?php echo $v['paixu']; ?></td>
									<td><?php if(!empty($b_arr[$v['s_id']])){echo $b_arr[$v['s_id']];} ?></td>
									<td><a href="?h=bbs&c=fenlei&k=<?php echo $v['id']; ?>">编辑</a>&nbsp;|&nbsp;<a class="delete_tishi" href="?h=bbs&c=fenlei_d&k=<?php echo $v['id']; ?>">删除</a></td>
									<td></td>
								</tr>
								<?php } ?>
							</table>
							
							<?php /*分页和检索*/ ?>
<a href="?h=bbs&c=fenlei" class="create_zidingyi" style="margin:50px 10px 30px 10px;">创建分类</a>
							</div>
							<?php /*/分页和检索*/ ?>
							&nbsp;
						</div>
					</div>
				</div>
					<?php /*/文章管理结束*/ ?>








<?php
	$configs = $pdo -> query('select * from '.DB_PRE."z_bbs_config");
	$config = array();
	foreach($configs as $v){
		$config[$v['k']] = $v;
	}
?>



<?php /*网站基本信息开始*/ ?>
			<div class="admin_con_main_parent">
				<form method="post" action="?h=bbs&c=config_submit">
				<div class="admin_con_main">
					<h1 class="admin_con_main_title">
						论坛设置
					</h1>
					<div class="admin_con_main_con">
						<div class="admin_con_main_con_main">
							<ul>
								<li class="oli">
									<div class="oli_div_1">
										热搜关键词
									</div>
									<div class="oli_div_2" style="width:65%;" name="title">
										<textarea name="t_title" class="oli_textarea"><?php echo $config['hot_key']['v']; ?></textarea>
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