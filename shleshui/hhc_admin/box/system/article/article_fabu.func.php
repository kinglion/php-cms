<?php

	function article_fabu(){
		if(empty($_GET['lanmu']))
			alert(0,0,'?h=article&c=article_lanmu','请选择栏目');
		$pdo = get_pdo();
		$db_pre = DB_PRE;
		//获取栏目 判断是否存在
		$res = $pdo -> query("select `nav_type`,`nav_moxing` from `{$db_pre}nav` where `nav_id` = '{$_GET['lanmu']}' limit 1",'');
		if(empty($res))
			alert(0,0,'?h=article&c=article_lanmu','你使用了一个不存在的栏目，请重新选择');
		if($res['nav_type']!=='1' || empty($res['nav_moxing'])){
			alert(0,0,'?h=article&c=article_lanmu','你使用的栏目不是模型栏目，请重新选择');
		}
		//获取字段
		$sql=<<<SQL
	select 
		`cn_name`,`ziduan_id`,`en_name`,`moxing_type`,`default_val`,`html_gongneng`,`tishi`
	from 
		{$db_pre}ziduan
	where 
		`moxing_id` = '{$res['nav_moxing']}'
	and 
		`xianshi_fangshi` <>'1' 
	and 
		`xianshi_fangshi` <>'3' 
	and 
		`moxing_type` <> '17'
	order by
		ziduan_id asc
SQL;
		$res2 = $pdo -> query($sql);
		$res2 = empty($res2) ? array() : $res2;
		$arr = array(
					'cn_name'=>'标题',
					'en_name'=>'con_biaoti',
					'moxing_type'=>'1',
					'default_val'=>'',
					'tishi'=>'文章的标题'
				);
		array_unshift($res2,$arr);
		$res2['moxing_id']=$res['nav_moxing'];
		return $res2;
	}
