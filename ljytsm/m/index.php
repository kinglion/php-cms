<?php
require("./database.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<title>MoMoCMS手机版</title>
<meta name="description" content="MoMoCMS -- 更好用的企业建站系统">
<meta name="keywords" content="MoMoCMS">
<link rel="icon" href="<?php echo URL; ?>/resource/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo URL; ?>/resource/favicon.ico" type="image/x-icon">
<link rel="bookmark" href="<?php echo URL; ?>/resource/favicon.ico" type="image/x-icon">
<script src="<?php echo URL; ?>/resource/jquery-1.11.1.min.js"></script>
<script src="<?php echo URL_M; ?>/js/jquery.mmenu.min.js"></script>
<script type="text/javascript">
	$(function() {
		$('nav#menu').mmenu();
	});
</script>
<link href="<?php echo URL_M; ?>/css/jquery.mmenu.css?<?php echo time();?>" rel="stylesheet" type="text/css">
<link href="<?php echo URL_M; ?>/css/style.css?<?php echo time();?>" rel="stylesheet" type="text/css">
<link href="<?php echo URL_M; ?>/css/font-face.css?<?php echo time();?>" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo URL_M; ?>/bxslider/jquery.bxslider.min.js"></script>
<link href="<?php echo URL_M; ?>/bxslider/jquery.bxslider.css" rel="stylesheet" />
</head>
<body>
<div id="page">
	<header>
    	<div class="l_tbn"><a href="#menu" class="glyphicon glyphicon-th-large"></a></div>
        <a style="font-size:13px;color:#fff;font-weight:bold;text-decoration:none;" href="<?php echo URL_M; ?>">MoMoCMS手机版</a>
    </header>
    <div class="content">
<ul class="bxslider" style="margin:0;padding:0;display:none">
<?php
//打开 images 目录
$dir = dir("../resource/slide/images");
//列出 images 目录中的文件
while (($file = $dir->read()) !== false)
{
	if($file!="." && $file!=".."){
	?>
<li><img style="border:0;width:100%;" src="<?php echo URL; ?>/resource/slide/images/<?php echo $file; ?>" /></li>
<?php
	}
}
$dir->close();
?> 
</ul>
<script type="text/javascript">
    $(function() {
       $(".bxslider").css({display:"block"});
       $('.bxslider').bxSlider({
       	auto: true,
       	pager:false,
       	pause:'5000'
       	});
    });
    </script>
    <?php
        	$sql_mixsidebar="select * from ".DB_PREFIX."modules where pid='-1' and name='公司简介'";
	       $query_mixsidebar=$db->query($sql_mixsidebar);
	       $num_mixsidebar=$query_mixsidebar->rowCount();
         	if($num_mixsidebar>0){
         		while($arr_mixsidebar=$query_mixsidebar->fetch()){
         			eval("?>".base64_decode($arr_mixsidebar['codes']));
         		}
         	}?>
    <div class="title">新闻动态</div>
     <div class="tx">
     	<div class="editor">
          <ol class="ol">
          		<?php
       $id_tmp='';
       $sql_tmp="select * from ".DB_PREFIX."pages where module='news_module.php' and pid!='-1'";
		$query_tmp=$db->query($sql_tmp);
		$num_tmp=$query_tmp->rowCount();
		if($num_tmp>0){
			$arr_tmp=$query_tmp->fetch();
			$id_tmp=$arr_tmp['pid'];
			if(empty($id_tmp)){$id_tmp=$arr_tmp['id'];}
		}
          		$sql="select * from ".DB_PREFIX."pages where isNews=1 order by time desc,sort desc limit 0,5";
          		$query=$db->query($sql);
          		$num=$query->rowCount();
          		if($num>0){
          			while($arr=$query->fetch()){
          				?>
          		<li class="list">
          			<a href="<?php echo URL_M; ?>/list/<?php echo $id_tmp; ?><?php if(!empty($arr['news_cat'])){ echo '/ncat/'.$arr['news_cat'];	}?>/nid/<?php echo $arr['id'];?>" title="<?php echo $arr['title'];?>" target="_self"><?php echo $arr['title'];?></a>
          		</li>
          	<?php	}	}	?>
          	  </ol>
           </div>
         </div>
     <?php
        	$sql_mixsidebar="select * from ".DB_PREFIX."modules where pid='-1' and name='联系我们'";
	       $query_mixsidebar=$db->query($sql_mixsidebar);
	       $num_mixsidebar=$query_mixsidebar->rowCount();
         	if($num_mixsidebar>0){
         		while($arr_mixsidebar=$query_mixsidebar->fetch()){
         			eval("?>".base64_decode($arr_mixsidebar['codes']));
         		}
         	}?>
        	<footer class="footer">
		    <div class="footer-inner">
		            版权所有，保留一切权利，Powered BY YouYaX
		     </div>
		</footer>
</div>
	<nav id="menu">
        <ul>
           <li class="<?php if(empty($_GET['id'])){echo 'Selected';} ?>"><a href="<?php echo URL_M; ?>"><span>首页</span></a></li>
   		<?php
   		$id_tmp='';
		$sql_tmp="select * from ".DB_PREFIX."pages where isProduct=1";
		$query_tmp=$db->query($sql_tmp);
		$num_tmp=$query_tmp->rowCount();
		if($num_tmp>0){
			$arr_tmp=$query_tmp->fetch();
			$id_tmp=$arr_tmp['id'];
		}
   		$sql="select * from ".DB_PREFIX."pages where isMenu=1 order by sort desc";
   		$query=$db->query($sql);
   		while($arr=$query->fetch()){	?>
   			<li class="<?php if($_GET['id']==$arr['id'])echo 'Selected'; 
   					$child_sql="select * from ".DB_PREFIX."pages where id=".intval($_GET['id']);
   					$child_query=$db->query($child_sql);
   					$child_num=$child_query->rowCount();
   					if($child_num>0){
   						$child_arr=$child_query->fetch();
   						if($child_arr['pid']==$arr['id']){echo 'Selected';}
   					}
   					?>">
   				<a href="
   					<?php	if(!empty($arr['ext_url'])){
   						echo $arr['ext_url'];
   					}else{echo URL_M."/list/".$arr['id']; }?>
   					"><span><?php echo $arr['title']; ?></span></a>
   				<?php if($arr['pid']=='-1'){
   					$sec_sql="select * from ".DB_PREFIX."pages where pid=".$arr['id']." order by sort desc";
   					$sec_query=$db->query($sec_sql);
   						?>
   					<dl>
		   			<?php while($sec_arr=$sec_query->fetch()){
   						 if($sec_arr['module']=='news_module.php'){
   							?>
		   				<dd><a href="
		   					<?php echo URL_M.'/list/'.$arr['id'].'/ncat/'.$sec_arr['id'];	?>
		   					"><?php echo $sec_arr['title']; ?></a></dd>
		   			<?php	}else{	?>
		   				<dd><a href="
		   					<?php echo URL_M.'/list/'.$arr['id'].'/nd/'.$sec_arr['id'];?>
		   					"><?php echo $sec_arr['title']; ?></a></dd>
		   			<?php	}}	?>
		   			</dl>
		   		<?php	}	?>
   				<?php if($arr['isProduct']==1){
   					$p_sql="select * from ".DB_PREFIX."product order by sort desc";
   					$p_query=$db->query($p_sql);
   						?>
   					<dl>
   					<?php while($p_arr=$p_query->fetch()){	?>
		   				<dd><a href="
		   					<?php
	        	if(!empty($id_tmp)){
	        		echo URL_M.'/list/'.$id_tmp.'/cat/'.$p_arr['id'];	
	        	}
	        	?>
		   					"><span><?php echo $p_arr['name']; ?></span></a></dd>
		   			<?php	}	?>
		   			</dl>
		   		<?php	}	?>
   			</li>
   		<?php	}	?>
        </ul>
    </nav>
</div>
</body>
</html>