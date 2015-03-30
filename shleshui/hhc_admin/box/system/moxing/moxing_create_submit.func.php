<?php

	function moxing_create_submit(){
		if(empty($_POST['cn_name'])){
			alert(0,0,null,'请输入模型名称',1);
		}
		if(empty($_POST['en_name'])){
			alert(0,0,null,'请输入模型英文名',1);
		}
		if(empty($_POST['author'])){
			alert(0,0,null,'请输入模型作者',1);
		}
		if(!empty($_FILES['logo']['name'])){
			$fileUpload = new fileUpload(array('type'=>'1'));
			$arr = $fileUpload -> upload($_FILES['logo']);
			if(empty($arr['num']))
				alert(0,0,null,$arr['msg'],0);
			//判断大小 做缩放
			$img = new img($arr['new_file']);
			$w = $img -> w_h(100,100);
			$path = $img -> __zoom($w['width'],$w['height']);
			$pic = $arr['new_file'];
		}else{
			$pic='';
		}
		$db_pre=DB_PRE;
		$sql = "insert into `{$db_pre}moxing` (`name`,`pic`,`author`,`moxing_ziduan_table_name`)values('{$_POST['cn_name']}','{$pic}','{$_POST['author']}','{$_POST['en_name']}')";
		$pdo = get_pdo();
		$row = $pdo -> sql($sql);
		if(empty($row))
			alert(0,0,null,'执行失败，请检查信息是否填写正确',1);
		$id = $pdo -> last_id();
		$sql = <<<SQL
		create table `{$db_pre}{$_POST['en_name']}` (
			`con_id` int unsigned not null primary key auto_increment,
			`con_time` int unsigned not null default 0,
			`con_lanmu_id` smallint unsigned not null default 0,
			`con_biaoti` varchar(60) not null default '',
			`con_liulan` int unsigned not null default 0,
			`con_user_id` int unsigned not null default 0,
			`con_quanxian` smallint unsigned not null default 0
		) engine=myisam charset=utf8;
SQL;
		$row = $pdo -> sql($sql);
		if($row===false){
			$pdo -> sql("delete from `{$db_pre}moxing` where `id` = '{$id}'");
			alert(0,0,null,"创建表{$db_pre}{$_POST['en_name']}失败，请检查是否有执行权限，以及填写是否标准,以及此表是否已经存在");
		}
		$id = $pdo -> last_id();
			$res = $pdo -> query('select * from `'.DB_PRE."ziduan` where `moxing_id` = '{$_GET['k']}' order by `xitong` desc");
			$res = !empty($res) ? $res : array();
			$data = json_encode($res);
			$json = <<<JSON
<?php
	
	\$json='$data';
JSON;
			file_put_contents("./sundry/cache/json/moxing/ziduan/{$_GET['k']}.php",$json);
	
		unlink('./sundry/cache/json/moxing/moxing.php');
		alert(1,5,'?h=moxing&c=index');
	}


