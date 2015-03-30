<?php
require("./database.php");
if(strpos($_SERVER['REQUEST_URI'],"page")){
	$_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'],0,strpos($_SERVER['REQUEST_URI'],"page")-1);
}
if(stristr($_SERVER['HTTP_USER_AGENT'], 'android') || stristr($_SERVER['HTTP_USER_AGENT'], 'iphone') || stristr($_SERVER['HTTP_USER_AGENT'], 'ipad')) {
	header("Location:".URL."/m".$_SERVER['REQUEST_URI']);
}
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>丽江忆通数码</title>
<meta name="description" content="丽江忆通 数码">
<meta name="keywords" content="丽江忆通 数码">
<link rel="icon" href="<?php echo URL; ?>/resource/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo URL; ?>/resource/favicon.ico" type="image/x-icon">
<link rel="bookmark" href="<?php echo URL; ?>/resource/favicon.ico" type="image/x-icon">
<script src="<?php echo URL; ?>/resource/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo URL; ?>/resource/slide/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/resource/level.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/resource/html5.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/resource/momocms.css">
<link rel="stylesheet" href="<?php echo URL; ?>/resource/slide/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo URL; ?>/resource/slide/nivo-slider.css" type="text/css" media="screen" />
</head>
<body style="height: 100%;">
<header>
  <div class="inner headtop">
  <div class="pp">
  	<a href="<?php echo URL; ?>" title="MoMoCMS" id="web_logo"> <img border="0" src="<?php echo URL; ?>/resource/logo.gif" alt="MoMoCMS" title="MoMoCMS"> </a>
  </div>
   <div class="top-nav list-none">
   		<?php
   		$sql="select * from ".DB_PREFIX."mix where pid=1 order by sort desc";
   		$query=$db->query($sql);
   		$num=$query->rowCount();
   		if($num>0){
   			$count=0;
   			while($arr=$query->fetch()){$count++;	?>
   		<a href="<?php echo $arr['value'];?>"><?php echo $arr['name'];?></a>
   		<?php if($count!=$num){	?>
      	<span> | </span>
   <?php			}}
   		}
   		?>
    </div>
<?php
$id_tmp='';
$sql_tmp="select * from ".DB_PREFIX."pages where isProduct=1";
$query_tmp=$db->query($sql_tmp);
$num_tmp=$query_tmp->rowCount();
if($num_tmp>0){
	$arr_tmp=$query_tmp->fetch();
	$id_tmp=$arr_tmp['id'];
}
?>
   <nav>
   	<ul class="list-none">
   		<li><a class="<?php if(empty($_GET['id'])){echo 'active';} ?>" href="<?php echo URL; ?>"><span>首页</span></a></li>
   		<?php
   		$sql="select * from ".DB_PREFIX."pages where isMenu=1 order by sort desc";
   		$query=$db->query($sql);
   		while($arr=$query->fetch()){	?>
   			<li>
   				<a class="<?php if($_GET['id']==$arr['id'])echo 'active'; 
   					$child_sql="select * from ".DB_PREFIX."pages where id=".intval($_GET['id']);
   					$child_query=$db->query($child_sql);
   					$child_num=$child_query->rowCount();
   					if($child_num>0){
   						$child_arr=$child_query->fetch();
   						if($child_arr['pid']==$arr['id']){echo 'active';}
   					}
   					?>" href="
   					<?php	if(!empty($arr['ext_url'])){
   						echo $arr['ext_url'];
   					}else{echo URL."/list/".$arr['id']; }?>
   					"><span><?php echo $arr['title']; ?></span></a>
   				<?php if($arr['pid']=='-1'){
   					$sec_sql="select * from ".DB_PREFIX."pages where pid=".$arr['id']." order by sort desc";
   					$sec_query=$db->query($sec_sql);
   						?>
   					<dl style="width: 124px;">
   					<?php while($sec_arr=$sec_query->fetch()){
   						 if($sec_arr['module']=='news_module.php'){
   							?>
		   				<dd><a href="
		   					<?php echo URL.'/list/'.$arr['id'].'/ncat/'.$sec_arr['id'];	?>
		   					"><?php echo $sec_arr['title']; ?></a></dd>
		   			<?php	}else{	?>
		   				<dd><a href="
		   					<?php echo URL.'/list/'.$arr['id'].'/nd/'.$sec_arr['id'];?>
		   					"><?php echo $sec_arr['title']; ?></a></dd>
		   			<?php	}}	?>
		   			</dl>
		   		<?php	}	?>
   				<?php if($arr['isProduct']==1){
   					$p_sql="select * from ".DB_PREFIX."product order by sort desc";
   					$p_query=$db->query($p_sql);
   						?>
   					<dl style="width: 124px;">
   					<?php while($p_arr=$p_query->fetch()){	?>
		   				<dd><a href="
		   					<?php
	        	if(!empty($id_tmp)){
	        		echo URL.'/list/'.$id_tmp.'/cat/'.$p_arr['id'];	
	        	}
	        	?>
		   					"><?php echo $p_arr['name']; ?></a></dd>
		   			<?php	}	?>
		   			</dl>
		   		<?php	}	?>
   			</li>
   		<?php	}	?>
   	</ul>
   </nav>

  </div>
</header>


<div class="banner slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
<?php
//打开 images 目录
$dir = dir("./resource/slide/images");
//列出 images 目录中的文件
while (($file = $dir->read()) !== false)
{
	if($file!="." && $file!=".."){
	?>
<img src="<?php echo URL; ?>/resource/slide/images/<?php echo $file; ?>" data-thumb="<?php echo URL; ?>/resource/slide/images/<?php echo $file; ?>" alt="" />
<?php
	}
}
$dir->close();
?> 
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $('#slider').nivoSlider({controlNav: false});
    });
    </script>


<div class="index">
  <div class="inner">
    <div class="content">
	
      <div class="aboutus">
      	<?php
        	$sql_mixsidebar="select * from ".DB_PREFIX."modules where pid='-1' and name='公司简介'";
	       $query_mixsidebar=$db->query($sql_mixsidebar);
	       $num_mixsidebar=$query_mixsidebar->rowCount();
         	if($num_mixsidebar>0){
         		while($arr_mixsidebar=$query_mixsidebar->fetch()){
         			eval("?>".base64_decode($arr_mixsidebar['codes']));
         		}
         	}?>
      </div>

      <div class="news">
        <div class="title">新闻动态</div>
        <div class="tx" style="height: 224px;">
          	<ol class="list-none metlist">
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
          		<li class="list top">
          			<span class="time"><?php echo date('Y-m-d',$arr['time']);?></span>
          			<a href="<?php echo URL; ?>/list/<?php echo $id_tmp; ?><?php if(!empty($arr['news_cat'])){ echo '/ncat/'.$arr['news_cat'];	}?>/nid/<?php echo $arr['id'];?>" title="<?php echo $arr['title'];?>" target="_self"><?php echo $arr['title'];?></a>
          		</li>
          	<?php	}	}	?>
          	</ol>
          </div>
      </div>

      <div class="Contact">
        <?php
        	$sql_mixsidebar="select * from ".DB_PREFIX."modules where pid='-1' and name='联系我们'";
	       $query_mixsidebar=$db->query($sql_mixsidebar);
	       $num_mixsidebar=$query_mixsidebar->rowCount();
         	if($num_mixsidebar>0){
         		while($arr_mixsidebar=$query_mixsidebar->fetch()){
         			eval("?>".base64_decode($arr_mixsidebar['codes']));
         		}
         	}?>
      </div>
	  
      <div class="product">
        <div class="title">产品展示</div>
      	<div id="move" style="width:962px;margin:0 20px;padding-top: 4px;font-family: 'Microsoft YaHei',微软雅黑,Arial,Helvetica,sans-serif;"></div>
      <?php
        $str='';
        $id_tmp='';
        $sql_tmp="select * from ".DB_PREFIX."pages where isProduct=1";
		    $query_tmp=$db->query($sql_tmp);
		  $num_tmp=$query_tmp->rowCount();
		if($num_tmp>0){
			$arr_tmp=$query_tmp->fetch();
			$id_tmp=$arr_tmp['id'];
		}
      $sql="select * from ".DB_PREFIX."product_sub order by sort desc";
      $query=$db->query($sql);
      $num=$query->rowCount();
      if($num>0){
      	while($arr=$query->fetch()){
      		$str.='<a href="'.URL.'/list/'.$id_tmp.'/sid/'.$arr['id'].'"><img src="./admin/'.$arr['pic'].'" border="0" style="margin-right:40px;width:160px;height:130px;"></a>';
      	}
      }
      ?>
      </div>
	  <script type="text/javascript">Move_level("move",962,130,'<?php echo $str; ?>');</script>
   
      <div class="index-link linkx inner">
        <h3 class="title"> 友情链接:</h3>
        <div class="txt" style="width: 883px;">
	        	<ul class="list-none">
	        		<?php
   		$sql="select * from ".DB_PREFIX."mix where pid=2 order by sort desc";
   		$query=$db->query($sql);
   		$num=$query->rowCount();
   		if($num>0){
   			$count=0;
   			while($arr=$query->fetch()){$count++;	?>
   		<li><a target="_blank" href="<?php echo $arr['value'];?>"><?php echo $arr['name'];?></a></li>
   <?php			}
   		}
   		?>
			</ul>
		</div>
      </div>
      
    </div>
  </div>
</div>

<footer>
	<div class="inner">
		<div class="foot-nav">
			<?php
   		$sql="select * from ".DB_PREFIX."mix where pid=3 order by sort desc";
   		$query=$db->query($sql);
   		$num=$query->rowCount();
   		if($num>0){
   			$count=0;
   			while($arr=$query->fetch()){$count++;	?>
   		<a href="<?php echo $arr['value'];?>"><?php echo $arr['name'];?></a>
   		<?php if($count!=$num){	?>
      	<span> | </span>
   <?php			}}
   		}
   		?>
		</div>
	</div>
</footer>
</body></html>