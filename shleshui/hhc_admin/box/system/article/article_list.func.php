<?php

	function article_list(){
		if(empty($_GET['moxing'])){
			header('Location:?h=article&c=article_moxing');
			exit;
		}
		$db_pre = DB_PRE;
		//先看看有没有栏目 如果没有 则取模型内容
		include './sundry/cache/json/moxing/moxing.php';
		$moxing = json_decode($json,true);
		if(empty($_GET['lanmu'])){
			$tb_name="`{$db_pre}{$moxing[$_GET['moxing']]['moxing_ziduan_table_name']}`";
			unset($json);
		}else{
			include './sundry/cache/json/nav.php';
			$nav = json_decode($json,true);
			unset($json);
			if(empty($nav[$_GET['lanmu']]['nav_moxing']) || $nav[$_GET['lanmu']]['nav_type']!=='1')
				return array('data'=>array(),'page'=>'');
			$tb_name="`{$db_pre}{$moxing[$nav[$_GET['lanmu']]['nav_moxing']]['moxing_ziduan_table_name']}`";
		}
		$type=<<<SQL
			`a`.`con_id`,
			`a`.`con_time`,
			`a`.`con_lanmu_id`,
			`a`.`con_biaoti`,
			`a`.`con_liulan`,
			`a`.`con_user_id`,
			`a`.`con_quanxian`,
			`b`.`user_name`
SQL;
		$w='1';
		if(!empty($_GET['lanmu']))
			$w .= " and `con_lanmu_id` = '{$_GET['lanmu']}' ";
		if(!empty($_GET['shenhe'])){
			if($_GET['shenhe']==='1'){
				$w .= " and `con_quanxian` = '0' ";
			}else if($_GET['shenhe']==='2')
				$w .= " and `con_quanxian` = '1' ";
		}
		if(isset($_GET['author']))
			$w .= " and b.user_name like '%{$_GET['author']}%' ";
		if(isset($_GET['title']))
			$w .= " and a.con_biaoti like '%{$_GET['title']}%' ";
		if(empty($_GET['shunxu']) || $_GET['shunxu']==='1')
			$order = ' order by con_id desc ';
		else
			$order = ' order by con_id asc ';
		$even_arr = array(
				array('table_k'=>'b','table_name'=>"`{$db_pre}user`",'where'=>'on a.con_user_id=b.user_id'),
			);
		$num=empty($_GET['num'])?10:ceil($_GET['num']);
		$page = new page($tb_name,$type,$w.$order,$num,'p',true,'a',$even_arr);
		$res = $page->page_2(5,1);
		return array('data'=>$res['0'],'page'=>$res['1']);
	}



