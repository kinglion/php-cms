<?php
	$w = '1';
	if(!empty($_GET['key']))
		$w = "class_id='{$_GET['key']}' ";
	$order = ' order by id desc';
	$page = new page(DB_PRE.'z_web_case','title,id,pic',$w.$order,12,'p');
	$artcle = $page->page_2(10);
	$artcle['0'] = !empty($artcle['0']) ? $artcle['0'] : array();
	$pages = $page -> pages;
    include './sundry/cache/json/config.php';
    $arr = json_decode($json,true);
	$top_title = "客户案例 - 第{$pages}页 - {$arr['4']}";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if( empty($top_title)): ?>瑞思企业网站<?php else: ?><?php echo $top_title; ?><?php endif; ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo TPL; ?>/css/main.css" rel="stylesheet" type="text/css" />
<link href="./sundry/static_file/img/favicon.ico" rel="icon" type="image/x-icon" />
<link href="./sundry/static_file/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<script type="text/javascript" src="<?php echo TPL; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo TPL; ?>/js/webskys.js"></script>
<script type="text/javascript" src="<?php echo TPL; ?>/js/ie6png.js"></script>
<script type="text/javascript" src="<?php echo TPL; ?>/js/gun.js"></script>
</head>
<body>
<div class="top">
<div class="topright">
<ul>
<li class="li01"><a href='web.php'>首页</a></li>
<li class="li02"><a href='web.php?m=1'>手机版</a></li>
<li class="li03"><a onclick="" href="web.php?h=other&c=bczm" rel="nofollow">保存到桌面</a></li>
</ul>
</div>
<div class="logo">
<a href="web.php" title="瑞思企业网站"><img src="./sundry/uploads/20150122/1421909766907.jpg" style="height:71px;"  title="瑞思企业网站"/></a></div>
<div class="righttel">
</div>
<div class="webnav">
<ul>
<?php
	$nav = include_nav();
	foreach($nav as $v){
		if($v['nav_xianshi']!='1' || $v['nav_parent_id']!='0'){
			continue;
		}
		?>
		
<li class=""><a href="<?php if($v['nav_type']=='0'){
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
<script type="text/javascript">
    $(function(){
        <?php if($_GET['h']=='index' && $_GET['c']=='index'){
        ?>
            $('.webnav li a').each(function(){
                if($(this).attr('href')=='web.php'){
                    $(this).parent().addClass('licurs');
                }
            })
        <?php
        }else if($_GET['c']=='news' || $_GET['c']=='news_content'){
        ?>
            $('.webnav li a').each(function(){
                if($(this).attr('href')=="web.php?h=index&c=news"){
                    $(this).parent().addClass('licurs');
                }
            })
        <?php
        }else if($_GET['c']=='product'||$_GET['c']=='product_content'){
        ?>
            $('.webnav li a').each(function(){
                if($(this).attr('href')=="web.php?h=index&c=product"){
                    $(this).parent().addClass('licurs');
                }
            })
        <?php
        }else if($_GET['c']=='comment'){
        ?>
            $('.webnav li a').each(function(){
                if($(this).attr('href')=="web.php?h=index&c=comment"){
                    $(this).parent().addClass('licurs');
                }
            })
        <?php
        }else if($_GET['c']=='solution'||$_GET['c']=='solution_content'){
        ?>
            $('.webnav li a').each(function(){
                if($(this).attr('href')=="web.php?h=index&c=solution"){
                    $(this).parent().addClass('licurs');
                }
            })
        <?php
        }else if($_GET['c']=='casez'||$_GET['c']=='casez_content'){
        ?>
            $('.webnav li a').each(function(){
                if($(this).attr('href')=="web.php?h=index&c=casez"){
                    $(this).parent().addClass('licurs');
                }
            })
        <?php
        }else if($_GET['c']=='jobs'){
        ?>
            $('.webnav li a').each(function(){
                if($(this).attr('href')=="web.php?h=index&c=jobs"){
                    $(this).parent().addClass('licurs');
                }
            })
        <?php
        }else if($_GET['c']=='user'){
        ?>
            $('.webnav li a').each(function(){
                if($(this).attr('href')=="web.php?h=index&c=user"){
                    $(this).parent().addClass('licurs');
                }
            })
        <?php
        } ?>
    })
</script>
</ul>
</div>
</div>
<div class="banner">
<div id="banlbar"></div>
<div id="banrbar"></div>
<div id="banh">
<ul>
<?php
    $pdo = get_pdo();
    $res = $pdo -> query('select * from '.DB_PRE."z_web_hdp order by paixu desc");
    $res = empty($res) ? array() : $res;
    foreach($res as $v){
?>
<a href="<?php echo $v['link']; ?>" target="_blank"><li><img title="<?php echo $v['title']; ?>" class="top_hdp_pic" src="<?php echo $v['pic']; ?>" /></li></a>
<?php } ?>
</ul>
<script type="text/javascript">
    window.onload = function(){
        $('.top_hdp_pic').each(function(){
            var h = 279/$(this).height();
            var w = 968/$(this).width();
            if(h > w){
                $(this).css('height','279px');
            }else{
                $(this).css('width','968px');
            }
        })
    }
</script>

</div>
</div>
<div class="index_con">
<div class="page_left">
<h2 class="left_title">客户案例</h2>
<div class="leftbg borl_r">
<ul class="classul">
<?php
	$pdo = get_pdo();
	$res = $pdo -> query('select * from '.DB_PRE."z_web_class where type='3'");
	foreach($res as $v){
?>
<li><a href="web.php?h=index&c=casez&key=<?php echo $v['id']; ?>" title="<?php echo $v['title']; ?>"><?php echo mb_substr($v['title'],'0','12','utf-8'); ?></a></li>
<?php } ?>
</ul>
</div>
<div class="left_bot"></div>
<div class="magtop10 search">
<p class="searchp01">站内搜索</p>
<form action="web.php" method="get">
<input name="name" type="text" class="searchinp"/>
<input type="hidden" name="h" value="index">
<input type="hidden" name="c" value="so">
<p class="searchp02"><input type="submit" value="" class="searchbon" /></p>
</form>

</div>
<div class="magtop10"><a href="web.php?h=index&c=comment" title="留言反馈"><img src="<?php echo TPL; ?>/images/left01.gif"  alt="留言反馈"/></a></div>
<?php /*<div class="magtop10"><a href="#" title=""><img src="<?php echo TPL; ?>/images/left02.gif"  alt="在线加盟"/></a></div>*/ ?>
</div>
<div class="page_right">
<div class="pagetop"><span class="web_navi">当前位置：<a href="web.php">首页</a> &gt;&gt; <a href="web.php?h=index&c=casez">客户案例</a></span><h2>客户案例</h2></div><div class="borl_r">
<ul class="picul">
<?php 
	foreach($artcle['0'] as $v){
?>
<li><a href="web.php?h=index&c=casez_content&k=<?php echo $v['id']; ?>"  title="<?php echo $v['title']; ?>"><img src="<?php echo $v['pic']; ?>" alt="<?php echo $v['title']; ?>" width="192" height="135" /></a><p><a href="web.php?h=index&c=casez_content&k=<?php echo $v['id']; ?>"  title="<?php echo $v['title']; ?>"><?php echo $v['title']; ?></a></p></li>
<?php } ?>
</ul>
<div class="epages">
	<?php echo $artcle['1']; ?>
</div>
</div>
<div class="page_bot"></div>
</div>
<div class="clear"></div>
<div class="blank10"></div>
</div>

<div class="bot_nav">
<div class="bottom">
<div class="botdiv">
<?php
	$pdo = get_pdo();
	$res = $pdo -> query('select * from '.DB_PRE."z_web_class");
	$data_1 = array();
	$data_2 = array();
	$data_3 = array();
	$data_4 = array();
	foreach($res as $v){
		if($v['type']=='1'){
			$data_1[$v['id']] = $v;
		}elseif($v['type']=='2'){
			$data_2[$v['id']] = $v;
		}elseif($v['type']=='3'){
			$data_3[$v['id']] = $v;
		}elseif($v['type']=='4'){
			$data_4[$v['id']] = $v;
		}
	}
?>
<h2><a href="web.php?h=index&c=news">新闻动态</a></h2>
<ul>
<?php foreach($data_1 as $v){ ?>
<li><a href="web.php?h=index&c=news&key=<?php echo $v['id']; ?>" title="<?php echo $v['title']; ?>"><?php echo mb_substr($v['title'],'0','12','utf-8'); ?></a></li>
<?php } ?>
</ul>
</div>
<div class="botdiv">
<h2><a href="web.php?h=index&c=product">产品展示</a></h2>
<ul>
<?php foreach($data_2 as $v){ ?>
<li><a href="web.php?h=index&c=product&key=<?php echo $v['id']; ?>" title="<?php echo $v['title']; ?>"><?php echo mb_substr($v['title'],'0','12','utf-8'); ?></a></li>
<?php } ?>
</ul>
</div>
<div class="botdiv">
<h2><a href="web.php?h=index&c=casez">客户案例</a></h2>
<ul>
<?php foreach($data_3 as $v){ ?>
<li><a href="web.php?h=index&c=casez&key=<?php echo $v['id']; ?>" title="<?php echo $v['title']; ?>"><?php echo mb_substr($v['title'],'0','12','utf-8'); ?></a></li>
<?php } ?>
</ul>
</div>
<div class="botdiv">
<h2><a href="web.php?h=index&c=solution">解决方案</a></h2>
<ul>
<?php foreach($data_4 as $v){ ?>
<li><a href="web.php?h=index&c=solution&key=<?php echo $v['id']; ?>" title="<?php echo $v['title']; ?>"><?php echo mb_substr($v['title'],'0','12','utf-8'); ?></a></li>
<?php } ?>
</ul>
</div>
<div class="botdiv">
<h2><a href="#">其他</a></h2>
<ul>
<li><a href="web.php?h=index&c=comment">留言反馈</a></li>
<li><a href="web.php?h=index&c=jobs">人才招聘</a></li>
<li><a href="web.php?h=index&c=user">客户服务</a></li>
</ul>
</div>
<div class="clear"></div>
<div class="copyright">
<p>Program by <strong><a href="http://www.ithhc.cn/" title="郝海川博客" target="_blank">郝海川博客</a></strong> &nbsp;&nbsp;&copy; Copyright 瑞思企业网站&nbsp;&nbsp;&nbsp;<a href="#" target="_blank">沪ICP备14034501号</a>&nbsp;&nbsp;&nbsp;<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000267880'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s96.cnzz.com/z_stat.php%3Fid%3D1000267880%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script></p>
<p></p>
</div>
</div>
</div>
</body>
</html>

