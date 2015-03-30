<?php

	function so(){
		if(!isset($_GET['word']) || $_GET['word']=='')
			$_GET['word'] = '关键词';
		$pdo = get_pdo();
		
		//先获取使用哪个模型
		$resx = $pdo -> query('select * from '.DB_PRE."moxing");
		$_GET['moxing'] = !isset($_GET['moxing']) ? '0' : $_GET['moxing'];
		$moxing = array();
		foreach($resx as $v){
			if($v['id'] == $_GET['moxing']){
				$moxing = $v;
			}
		}
		if(empty($moxing)){
			if(empty($resx['0'])){
				alert_2(0,'本站不存在模型','index.php',300000);
			}
			$moxing = $resx['0'];
		}
		//获取数据
		$tb_name=DB_PRE."{$moxing['moxing_ziduan_table_name']}";
		$type=<<<TYPE
			a.*,
			b.nav_name,
			b.nav_id,
			c.user_name,
			c.username,
			c.user_id
TYPE;
		$w="a.con_quanxian='0' and a.con_biaoti like '%{$_GET['word']}%' ";
		$order='order by a.con_id desc';
		$even_arr = array(
			array('table_k'=>'b','table_name'=>DB_PRE."nav",'where'=>'on a.con_lanmu_id=b.nav_id'),
			array('table_k'=>'c','table_name'=>DB_PRE."user",'where'=>'on a.con_user_id=c.user_id'),
		);
		$page = new page($tb_name,$type,$w.$order,20,'p',true,'a',$even_arr);
		$res = $page->page_2(5,0);
		$count = $page -> count;

		return array('moxing'=>$resx,'content'=>$res,'count'=>$count,'now_moxing'=>$moxing);
	}




