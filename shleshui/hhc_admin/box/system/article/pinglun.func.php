<?php

	function pinglun(){
		if(empty($_GET['moxing'])){
			header('Location: ?h=article&c=article_moxing_2');
			exit;
		}
		$db_pre = DB_PRE;
		//获取表名
		include "./sundry/cache/json/moxing/moxing.php";
		$moxing = json_decode($json,true);
		$tbx_name = "`{$db_pre}{$moxing[$_GET['moxing']]['moxing_ziduan_table_name']}`";
		$tb_name = "`{$db_pre}pinglun`";
		$type = <<<TYPR
			`a`.*,
			`b`.`user_name`,
			`c`.`con_biaoti`
TYPR;
		$w=" `moxing_id` = '{$_GET['moxing']}' ";
		if(!empty($_GET['zhuangtai'])){
			if($_GET['zhuangtai']=='1'){
				$w .= ' and `a`.`zhuangtai` = 0 ';
			}else if($_GET['zhuangtai']=='2'){
				$w .= ' and `a`.`zhuangtai` = 1 ';
			}
		}else{
			$_GET['zhuangtai'] = '0';
			$order = ' order by `pinglun_id` desc ';
		}
		if(!empty($_GET['shunxu'])){
			if($_GET['shunxu']=='1'){
				$order = ' order by `pinglun_id` desc ';
			}else if($_GET['shunxu']=='2'){
				$order = ' order by `pinglun_id` asc ';
			}
		}else{
			$_GET['shunxu'] = '0';
			$order = ' order by `pinglun_id` desc ';
		}
		if(!empty($_GET['num']))
			$num = ceil($_GET['num']);
		else
			$num = 10;
		if(!empty($_GET['author']))
			$w .= " and b.user_name like '%{$_GET['author']}%' ";
		if(!empty($_GET['title']))
			$w .= " and c.con_biaoti like '%{$_GET['title']}%' ";
		$even_arr = array(
				array('table_k'=>'b','table_name'=>"`{$db_pre}user`",'where'=>'on `a`.`user_id`=`b`.`user_id`'),
				array('table_k'=>'c','table_name'=>"{$tbx_name}",'where'=>'on `a`.`art_id`=`c`.`con_id`'),
			);
		$page = new page($tb_name,$type,$w.$order,$num,'p',true,'a',$even_arr);
		return $res = $page->page_2(5,1);
	}


