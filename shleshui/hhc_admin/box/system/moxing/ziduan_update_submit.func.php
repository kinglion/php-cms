<?php

	function ziduan_update_submit(){
		if(empty($_POST['cn_name']))
			alert(0,0,null,'字段中文名不能为空',1);
		if(empty($_POST['en_name']))
			alert(0,0,null,'字段英文名不能为空',1);
		if($_POST['ziduan_guanlian_lanmu']=='1' && !empty($_POST['parent_lanmu'])){
			//关联栏目
			$_POST['parent_lanmu']=implode(',',$_POST['parent_lanmu']);
			unset($_POST['ziduan_guanlian_lanmu']);
		}else{
			//不关联栏目
			unset($_POST['ziduan_guanlian_lanmu']);
			unset($_POST['parent_lanmu']);
		}
		$arr = $_POST;
		$id = $_POST['moxing_id'];unset($_POST['moxing_id']);
		$arr=ziduan_switch($arr);
		$arr['arr']['default_val']=isset($arr['arr']['default_val'])?$arr['arr']['default_val']:'';
		$arr['arr']['html_gongneng']=isset($arr['arr']['html_gongneng'])?$arr['arr']['html_gongneng']:'';
		include './sundry/cache/json/moxing/moxing.php';
		$json = json_decode($json,true);
		$old_en_name = $arr['arr']['old_en_name'];
		$ziduan_id = $arr['arr']['ziduan_id'];
		unset($arr['arr']['ziduan_id']);
		unset($arr['arr']['old_en_name']);
		if(in_array($arr['sql'],array('paixu','duotu'))){
			$c=1;
			if($arr['sql']=='paixu'){
				if(empty($_POST['paixu_ziduan']))
					alert(0,0,null,'排序字段不能为空',1);
				$arr['arr']['default_val']=$_POST['paixu_ziduan'];
				unset($arr['arr']['paixu_ziduan']);
			}
		}else{
			//修改字段名  修改字段类型
			$sql = 'alter table `'.DB_PRE."{$json[$id]['moxing_ziduan_table_name']}` change `{$old_en_name}` `{$arr['arr']['en_name']}` {$arr['sql']}";
		}
		$pdo = get_pdo();
		$w=" where `ziduan_id` = '{$ziduan_id}' ";
		$ress = $pdo -> query('desc '.DB_PRE."{$json[$id]['moxing_ziduan_table_name']}");
		foreach($ress as $v){
			if($v['Field']==$arr['arr']['en_name'] && $old_en_name!=$arr['arr']['en_name']){
				alert(0,0,null,'执行失败，英文名不可与已有字段重复,请更换英文名称',1);
			}
		}
		$row = $pdo -> exec('`'.DB_PRE.'ziduan`','update',$arr['arr'],$w);
		if($row===false)
			//执行失败
			alert(0,0,null,'执行失败，请确认填写是否规范',1);
		if($_POST['moxing_type']=='16' && !empty($arr['arr']['default_val'])){
				$arr['arr']['default_val']=str_replace('，',',',$arr['arr']['default_val']);
			$len=strpos($arr['arr']['default_val'],'|');
			$arr['arr']['default_val']=str_replace('，',',',$arr['arr']['default_val']);
			$p=null;
			if($len){
				$ars = explode('|',($arr['arr']['default_val']));
				$p=$ars['0'];
				$cx=explode(',',$ars['1']);
			}else{
				$cx = explode(',',($arr['arr']['default_val']));
			}
			$pdo -> sql('delete from `'.DB_PRE."fenlei` where `ziduan_id`='{$_POST['ziduan_id']}'");
			$fsql='insert into `'.DB_PRE."fenlei` (`top_id`,`fenlei_name`,`ziduan_id`) values ";
			if(!empty($p)){
				$fsql.="('1','{$p}','{$ziduan_id}'),";
			}
			$zxc='';
			foreach($cx as $v){
				if(!empty($v)){
					$zxc.="('0','{$v}','{$ziduan_id}'),";
				}
			}
			$zxc=trim($zxc,',');
			$fsql.=$zxc;
			$row = $pdo -> sql($fsql);
			if($row===false){
				$pdo -> sql('delete from `'.DB_PRE."ziduan` where `ziduan_id` = '{$ziduan_id}'");
				alert(0,0,null,'分类数据添加失败！',1);
			}
		}
		if(empty($c)){
			$row = $pdo -> sql($sql);
			if($row === false){
				//执行失败
				$pdo -> sql('delete from `'.DB_PRE."ziduan` where `ziduan_id` = '{$ziduan_id}'");
				alert(0,0,null,'执行失败,请确认填写是否规范',1);
			}
		}
		unlink("./sundry/cache/json/moxing/ziduan/{$id}.php");
		alert(1,1,'?h=moxing&c=ziduan_list&k='.$id);


	}