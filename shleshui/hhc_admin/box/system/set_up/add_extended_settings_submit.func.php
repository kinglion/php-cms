<?php

	function add_extended_settings_submit(){
		if(empty($_POST['cn_name']) && $_POST['cn_name']!=='0')
			alert(0,0,null,'请输入中文名称',1);
		if(empty($_POST['en_name']) && $_POST['en_name']!=='0')
			alert(0,0,null,'请输入英文名称',1);
		if(str_len($_POST['cn_name'])>29)
			alert(0,0,null,'中文名称长度不能超过30个字符',1);
		if(str_len($_POST['en_name'])>29)
			alert(0,0,null,'英文名称长度不能超过30个字符',1);
		if(str_len($_POST['tishi'])>299)
			alert(0,0,null,'提示长度不能超过300个字符',1);
		$guolv='0';
		$dan_type='0';
		$default_val='';
		$duo_type='';
		$db_pre = DB_PRE;
		$xitong='0';
		if($_POST['xitong']=='1')
			$xitong='1';
		switch($_POST['xxz']){
			case '0':
				//单行文本
				/*$_POST['buguolv'] = str_replace('，',',',$_POST['buguolv']);
				if(!empty($_POST['guolv']))
					$guolv='1';
				$default_val=$_POST['buguolv'];*/
				if($_POST['dan_type']=='0'||$_POST['dan_type']=='1'||$_POST['dan_type']=='2'){
					$dan_type = $_POST['dan_type'];
				}else{
					$dan_type = '0';
				}
			break;
			case '1':
				//多行文本
			/*	$_POST['buguolv'] = str_replace('，',',',$_POST['buguolv']);
				if(!empty($_POST['guolv']))
					$guolv='1';
				$default_val=$_POST['buguolv'];
				if(!empty($_POST['duo_type'])){
					$duo_type = implode(',',$_POST['duo_type']);
				}*/
			break;
			case '2':
				//html文本
				if(!empty($_POST['html_gongneng']))
					$default_val = implode(',',$_POST['html_gongneng']);
			break;
			case '3':
				//图片上传
			break;
			case '4':
				//option下拉列表
				$default_val = str_replace('，',',',$_POST['default_val']);
				if(str_len($default_val)>799)
					alert(0,0,null,'option下拉列表默认值较多，不能超过800个字符');
			break;
			case '5':
				//checkbox多选框
				$default_val = str_replace('，',',',$_POST['default_val']);
				if(str_len($default_val)>799)
					alert(0,0,null,'checkbox多选框默认值较多，不能超过800个字符');
			break;
			default :
				alert(0,0,null,'类型选择有误',1);
				exit;
			break;
		}
		$pdo = get_pdo();
		$res = $pdo -> query("select * from `{$db_pre}extended_settings_ziduan` where `en_name`='{$_POST['en_name']}' limit 1",'');
		if(!empty($res)){
			if(empty($_POST['s_id'])){
				alert(0,0,null,'英文名已存在 请修改',1);
			}else{
				if($_POST['s_id']!=$res['id']){
					alert(0,0,null,'英文名已存在 请修改',1);
				}
			}
		}
		if(empty($_POST['s_id'])){
			$sql = <<<SQL
	insert into 
		`{$db_pre}extended_settings_ziduan`
	(`cn_name`,`en_name`,`tishi`,`type`,`xitong`,`guolv`,`dan_type`,`duo_type`,`default_val`)
		values
	('{$_POST['cn_name']}','{$_POST['en_name']}','{$_POST['tishi']}','{$_POST['xxz']}','{$xitong}','{$guolv}','{$dan_type}','{$duo_type}','{$default_val}')

SQL;
			$sql2='insert into '.DB_PRE."extended_settings(`k`,`v`)values('{$_POST['en_name']}','')";
		}else{
			$sql = <<<SQL
	update `{$db_pre}extended_settings_ziduan` set 
		`cn_name`= '{$_POST['cn_name']}',
		`en_name` = '{$_POST['en_name']}',
		`tishi` = '{$_POST['tishi']}',
		`type` = '{$_POST['xxz']}',
		`xitong` = '{$xitong}',
		`guolv` = '{$guolv}',
		`dan_type` = '{$dan_type}',
		`duo_type` = '{$duo_type}',
		`default_val` = '{$default_val}'
	where `id` = '{$_POST['s_id']}'
SQL;
			$sql2 = 'update `'.DB_PRE."extended_settings` set `k`='{$_POST['en_name']}' where `ziduan_id` = '{$_POST['s_id']}'";
		}
		$row = $pdo -> sql($sql);
		if($row === false)
			alert(0,0,null,'网络繁忙，请稍后重试');
		if(empty($_POST['s_id'])){
			$id = $pdo->last_id();
			$pdo -> sql($sql2);
			alert(1,0,'?h=set_up&c=extended_settings','添加成功',0);
		}else{
			$pdo -> sql($sql2);
			alert(1,0,"?h=set_up&c=add_extended_settings&k={$_POST['s_id']}",'修改成功',0);
		}
	}