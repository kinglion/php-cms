<?php
	if(empty($_GET['k'])){
		alert_2(1,'请选择一个产品','',3);
	}
	$pdo = get_pdo();
	$artcle = $pdo -> query('select * from '.DB_PRE."z_web_case where id = '{$_GET['k']}' limit 1",'');
	if(empty($artcle))
		alert_2(1,'产品不存在或已被删除','',3);
    include './sundry/cache/json/config.php';
    $arr = json_decode($json,true);
	$top_title = "{$artcle['title']} - 客户案例 - {$arr['4']}";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="author" content="www.pcwap.cn" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title><?php if( empty($top_title)): ?>关注web架构与底层开发,seo和网络营销--郝海川博客<?php else: ?><?php echo $top_title; ?><?php endif; ?></title>
		<meta name="keywords" content="关键词是" />
		<meta name="description" content="描述" />
		<link href="./sundry/static_file/img/favicon.ico" rel="icon" type="image/x-icon" />
		<link href="./sundry/static_file/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link type="text/css" rel="stylesheet" href="<?php echo TPL; ?>/css/m/flexslider.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo TPL; ?>/css/m/jquery.mmenu.all.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo TPL; ?>/css/m/style.css" />
		<script type="text/javascript" src="<?php echo TPL; ?>/js/m/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo TPL; ?>/js/m/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript" src="<?php echo TPL; ?>/js/m/jquery.flexslider.js"></script>
		<script type="text/javascript" src="<?php echo TPL; ?>/js/m/o-script.js"></script>
		
	</head>
	<body class="o-page">
		<div id="page">
			<!-- Header -->
			<div id="header">
				<a href="#menu"></a>
				<span id="Logo" class="svg">
				</span>
				<a class="backBtn" href="javascript:history.back();"></a>
			</div>
			<div class="subHeader"><a href="web.php?m=1"><i class="i-home i-small"></i></a></div>
			
			<div id="content" style="min-height:500px;">
				<h2 style="margin-bottom:20px;font-weight:bold;text-align:center;"><?php echo $artcle['title']; ?></h2>
<div>				
<p>
<?php echo $artcle['content']; ?>
</p>
</div>				
			</div>
			<div class="block">
				
			</div>
			
			
<div style="clear:both;"></div>
			<!-- Social Icons -->
			<div class="socialMedia  scl-grey ">
				<font color="white">Program by <a href="http://www.ithhc.cn/" title="郝海川博客" target="_blank">郝海川博客</a>  &nbsp;&nbsp;@ Copyright 郝海川博客0&nbsp;&nbsp;tj0</font>
			</div>
			<!-- Menu navigation -->
			<nav id="menu">
				<ul>
					<li>
						<a href="web.php?m=1">
							<i class="i-home i-small"></i>网站首页
						</a>
					</li>
					<li>
						<a href="web.php?h=index&c=news&m=1">
							<i class="i-home i-small"></i>新闻动态
						</a>
					</li>
					<li>
						<a href="web.php?h=index&c=product&m=1">
							<i class="i-home i-small"></i>产品展示	
						</a>
					</li>
					<li>
						<a href="web.php?h=index&c=casez&m=1">
							<i class="i-home i-small"></i>客户案例				
						</a>
					</li>	
					<li>
						<a href="web.php?h=index&c=solution&m=1">
							<i class="i-home i-small"></i>解决方案
						</a>
					</li>
					<li>
						<a href="web.php?h=index&c=comment&m=1">
							<i class="i-home i-small"></i>留言反馈
						</a>
					</li>
					<li>
						<a href="web.php?h=index&c=jobs&m=1">
							<i class="i-home i-small"></i>人才招聘
						</a>
					</li>
					<li>
						<a href="web.php?h=index&c=user&m=1">
							<i class="i-home i-small"></i>客户服务
						</a>
					</li>
					<li>
						<a href="web.php?m=0">
							<i class="i-home i-small"></i>电脑版
						</a>
					</li>
				</ul>
			</nav>
			
			
		</div>
	</body>
</html>
