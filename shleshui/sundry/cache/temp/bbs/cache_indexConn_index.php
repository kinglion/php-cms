<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?php 
				if($_GET['h']=='index' && $_GET['c']=='post_list'){
			?>
				帖子列表 - <?php echo $list_section['name']; ?> - 第<?php echo $page -> pages; ?>页 - 郝海川博客0
			<?php
				}else if($_GET['h']=='index' && $_GET['c']=='post_content'){
			?>
			<?php if( isset($thread['title'])): ?><?php echo $thread['title']; ?><?php else: ?>帖子内容<?php endif; ?> - 第<?php echo $page -> pages; ?>页 - 郝海川博客0
			<?php
				}else if($_GET['h']=='index' && $_GET['c']=='list_other'){
			?>
				<?php echo $type_str; ?> - 郝海川博客0
			<?php
				}else if($_GET['h']=='index' && $_GET['c']=='post_add'){
			?>
				发帖 - 郝海川博客0
			<?php
				}else{
			?>
				关注web架构与底层开发,seo和网络营销--郝海川博客
			<?php
				}
			?></title>
		<meta name="keywords" content="关键词是">
		<meta name="description" content="描述">
		<link rel="icon" href="./sundry/static_file/img/favicon.ico" mce_href="./sundry/static_file/img/favicon.ico" type="image/x-icon" /> 
		<link href="./sundry/static_file/css/hhc_init.css" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo TPL; ?>/default/css/bbs.css" rel="stylesheet" type="text/css" media="all">
		<script type="text/javascript" src="./sundry/static_file/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo TPL; ?>/default/js/bbs.js"></script>
		<!--[if IE 6]>
			<style type="text/css">
				#header{position:absolute;top:expression(eval(document.documentElement.scrollTop)););}
				.post_list_left_main{margin:40px auto 20px;}
				.post_list_main{background:#ffffff;}
				.ie6_zhanwei1{height:20px;}
			</style>
		<![endif]-->
		<!--[if IE 7]>
			<style type="text/css">
			</style>
		<![endif]-->
		<!--[if lt IE 8]>
			<style type="text/css">
				.so_key{width:570px;}
				.section_div2_a{display:inline-block;}
			</style>
		<![endif]-->
		<!--[if IE]>
			<style type="text/css">
				.so_input .so_submit{padding:7px 15px 5px;}
			</style>
		<![endif]-->

	</head>
	<body>
		<div id="header">
			<div class="header_main">
				<div class="logo"><a href="bbs.php">郝海川博客0</a></div>
				<ul class="nav">
					<?php
	$nav = include_nav();
	foreach($nav as $v){
		if($v['nav_xianshi']!='1' || $v['nav_parent_id']!='0'){
			continue;
		}
		?>
		
					<li><a href="<?php if($v['nav_type']=='0'){
	echo $v['nav_link'];
}else if($v['nav_type']=='1'){
	echo "index.php?h=index&c=moxing_list&moxing_id={$v['nav_moxing']}&lanmu_id={$v['nav_id']}";
}else if($v['nav_type']=='2'){
	//模块
}else if($v['nav_type']=='100'){
	echo 'index.php';
}

?>" <?php
	if($v['nav_dakai']=='1'){
		echo 'target="_blank"';
	}
?> title="<?php echo str_replace('_ueditor_page_break_tag_','',$v['nav_yincang']);
		?>"><?php echo str_replace('_ueditor_page_break_tag_','',$v['nav_name']);
		?></a></li>
					
		<?php
	}
?>
				</ul>
				<div class="user_info">
					<?php if( empty($_SESSION['user']['user_id'])): ?>
					<a target="_blank" href="user.php?h=login&c=login">登陆</a> |
					<a target="_blank" href="user.php?h=login&c=register">注册</a>
					<?php else: ?>
					<a target="_blank" href="user.php">会员中心</a> |
					<a target="_blank" href="user.php?h=login&c=goout">退出登陆</a>
					<?php endif; ?>
				</div>
			</div>
		</div>

<div style="height:80px;"></div>

		<div class="all_main">

			<?php /*搜索部分*/ ?>
			<?php
				$pdo = get_pdo();
				$hot_key = $pdo -> query('select * from '.DB_PRE."z_bbs_config where id='1' limit 1",'');
				$hot_key = str_replace('，',',',$hot_key['v']);
				$hot_key = explode(',',$hot_key);
			?>
			<form method="get" action="bbs.php">
			<div class="all_b">
			<input type="hidden" name="h" value="index">
			<input type="hidden" name="c" value="list_other">
				<h3 class="b_title">站内搜索</h3>
				<div class="top_so">
					<div class="so_input">
						<input type="text" name="so" class="so_text" value="请输入关键词...">
						<input type="submit" class="so_submit" value="搜索">
					</div>
					<div class="so_key">
						<span>热搜：</span>
						<?php foreach($hot_key as $v): ?>
						<a href="bbs.php?h=index&c=list_other&so=<?php echo $v; ?>"><?php echo $v; ?></a>&nbsp;
						<?php endforeach; ?>
					</div>

					<div class="clear"></div>
				</div>
			</div>
			</form>
			<?php /*/搜索部分*/ ?>


	<?php /*帖子统计*/ ?>
		<?php /*<div class="post_statistics">
			<span class="span1">今日：124</span>
			<span class="span2">&nbsp;|&nbsp;</span>
			<span class="span1">昨日：467</span>
			<span class="span2">&nbsp;|&nbsp;</span>
			<span class="span1">最高日：557035</span>
			<span class="span2">&nbsp;|&nbsp;</span>
			<span class="span1">帖子：15545517</span>
		</div>*/ ?>
	<?php /*/帖子统计*/ ?>


	<?php /*论坛版块*/ ?>
	<?php
		$pdo = get_pdo();
		$res = $pdo -> query('select * from '.DB_PRE."z_bbs_section_class where xianshi=0 order by paixu desc");
		$res = empty($res) ? array() : $res;
		$section_class = array();
		foreach($res as $v){
			$section_class[$v['id']] = $v;
		}
		$res = $pdo -> query('select id,name,thread,post,last_time,last_id,sc_id from '.DB_PRE."z_bbs_section where xianshi='0' order by paixu desc");
		$res = empty($res) ? array() : $res;
		$section = array();
		foreach($res as $v){
			if(isset($section_class[$v['sc_id']])){
				$section_class[$v['sc_id']]['section'][$v['id']] = $v;
			}
		}
	?>
		<div id="section">
			<?php foreach($section_class as $v){ ?>
			<dl>
				<dt><?php echo $v['name']; ?></dt>
				<?php $v['section'] = empty($v['section']) ? array() : $v['section']; ?>
				<?php foreach($v['section'] as $vs){ ?>
				<dd>
					<div class="section_pic">
						<?php if(ceil(date('d',$vs['last_time']))<ceil(date('d',time()))){ ?>
						<img src="<?php echo TPL; ?>/default/img/old.gif">
						<?php }else{
						?>
						<img src="<?php echo TPL; ?>/default/img/new.gif">
						<?php
						} ?>
					</div>
					<div class="section_main">
						<div style="width:180px;overflow:hidden;height:18px;" class="section_main_div1"><a href="bbs.php?h=index&c=post_list&k=<?php echo $vs['id']; ?>"><?php echo $vs['name']; ?></a></div>
						<div class="section_main_div2">主题：<?php echo $vs['thread']; ?>&nbsp;&nbsp;&nbsp;回复：<?php echo $vs['post']; ?></div>
						<div class="section_main_div3">最后发表：<a href="bbs.php?h=index&c=post_content&k=<?php echo $vs['last_id']; ?>"><?php 
						if(empty($vs['last_time'])){
							
						}else{
							echo mb_substr(date_change(date('Y-m-d H:i',$vs['last_time'])),0,10,'utf-8');
						} ?></a></div>
					</div>
				</dd>
				<?php } ?>
			</dl>
					<div class="clear"></div>
			<?php } ?>
		</div>
	<?php /*/论坛版块*/ ?>




<div style="height:30px;"></div>
	<?php /*友情链接*/ ?>
			<div class="all_b links">
	<?php
		$pdo = get_pdo();
		$res = $pdo -> query('select name,link from '.DB_PRE."links order by paixu desc");
		$res = empty($res) ? array() : $res;
	?>
				<h3 class="b_title">友情链接</h3>
				<div>
					<ul style="overflow:hidden;">
				<?php foreach($res as $v){ ?>
						<li><a href="<?php echo $v['link']; ?>" target="_blank"><?php echo $v['name']; ?></a></li>
				<?php } ?>
						<div class="clear"></div>
						<div style="height:1px;"></div>
					</ul>
				</div>
			</div>
	<?php /*/友情链接*/ ?>		
		<div style="border-top:1px solid #ccc;margin-top:30px;"></div>
		<div style="margin-bottom:20px;border:1px solid #ffffff;"></div>
		<div class="footer">©&nbsp;郝海川博客0&nbsp;&nbsp;Program&nbsp;By&nbsp;&nbsp;<a href="http://ithhc.cn">郝海川博客</a>&nbsp;&nbsp;<a href="http://ithhc.cn">Download</a>.</div>

		</div>		
	</body>
</html>





