<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if( empty($top_title)): ?>乐随贸易<?php else: ?><?php echo $top_title; ?><?php endif; ?></title>
<meta name="keywords" content="乐随 施耐德 天猫 贸易 团购" />
<meta name="description" content="司主要代理施耐德旗下，奇胜，梅兰日兰品牌的开关、插座、断路器弱电箱等所有产品" />
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
<a href="web.php" title="上海乐随贸易有限公司"><img src="./sundry/uploads/20150203/1422928220706.gif" style="height:71px;"  title="上海乐随贸易有限公司"/></a></div>
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
<div class="ind_news">
<div class="title">
<a href="web.php?h=index&c=news" class="indmore"></a>
<h2>新闻动态</h2>
</div>
<div class="indlist borl_r">
<ul class="ind_newsul">
<?php 
	$pdo = get_pdo();
	$res = $pdo -> query('select title,id from '.DB_PRE."z_web_news order by id desc limit 5");
	$res = empty($res) ? array() : $res;
	foreach($res as $v){
?>
<li><a href="web.php?h=index&c=news_content&k=<?php echo $v['id']; ?>"" target="_blank" title="<?php echo $v['title']; ?>"><?php echo $v['title']; ?></a></li>
<?php } ?>
</ul>
</div>
<div class="indnewbot"></div>
</div>
<div class="ind_pro">
<div class="title">
<a href="web.php?h=index&c=product" class="indmore"></a>
<h2>产品展示</h2>
</div>
<div class="indpic borl_r">
<a id="prev" href="javascript:void(0)"></a>
<a id="next" href="javascript:void(0)"></a>
<div id="gun">
<ul id="gunul">
<?php
	$res = $pdo -> query('select * from '.DB_PRE."z_web_product order by id desc limit 5");
	$res = empty($res) ? array() : $res;
	foreach($res as $v){
?>
<li><a href="web.php?h=index&c=product_content&k=<?php echo $v['id']; ?>"" target="_blank" title="<?php echo $v['title']; ?>"><img src="<?php echo $v['pic']; ?>" style="height:85px;width:121px;" alt="<?php echo $v['title']; ?>"/></a><h3><a href="web.php?h=index&c=product_content&k=<?php echo $v['id']; ?>" target="_blank" title="<?php echo $v['title']; ?>"><?php echo $v['title']; ?></a></h3></li>
<?php } ?>
</ul>
</div>
</div>
<div class="indprobot"></div>
</div>
<?php
	$configs = $pdo -> query('select * from '.DB_PRE."z_web_config where id in(1,2,3)");
	$config = array();
	foreach($configs as $v){
		$config[$v['k']] = str_replace("\n",'<br />',str_replace(" ",'&nbsp;',$v));
	}
?>
<div class="ind_contact">
<h2>联系我们</h2>
<div class="catacta borl_r">
<?php echo $config['lxwm']['v']; ?>
</div>
<div class="catacta_bot"></div>
</div>
<div class="clear"></div>
<div class="blank10"></div>
<div class="adoutus">
<div class="title">
<a href="web.php?h=index&c=user" class="indmore"></a>
<h2>公司简介</h2>
</div>
<div class="ina_acon borl_r">
<?php echo $config['gsjj']['v']; ?>
</div>
<div class="ina_abot"></div>
</div>
<div class="alli">
<div class="title">
<a href="web.php?h=index&c=casez" class="indmore"></a>
<h2>客户案例</h2>
</div>
<div class="anliacon  borl_r">
<p style="border:0;"><?php echo $config['khal']['v']; ?></p>

</div>
<div class="alli_bot"></div>
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
<p>Program by <strong><a href="http://www.ithhc.cn/" title="郝海川博客" target="_blank">郝海川博客</a></strong> &nbsp;&nbsp;&copy; Copyright 上海乐随贸易有限公司&nbsp;&nbsp;&nbsp;<a href="#" target="_blank">沪ICP备14034501号</a>&nbsp;&nbsp;&nbsp;<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000267880'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s96.cnzz.com/z_stat.php%3Fid%3D1000267880%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script></p>
<p></p>
</div>
</div>
</div>
</body>
</html>
