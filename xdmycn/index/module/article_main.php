<?php
function module_article_main()
{
	global $global,$smarty;
	if(!$global['id'])
	{
		$obj = new article();
		$obj->set_field('art_id,art_title,art_add_time');
		$obj->set_where('art_channel_id = '.$global['channel_id']);		
		if($global['cat'])
		{
			$family = implode(',',get_cat_family('cat_art',$global['cat']));
			$obj->set_where("art_cat_id in ($family)");
		}
		$len = get_varia('art_list_len');
		$obj->set_page_size($len ? $len : 15);
		$obj->set_page_num($global['page']);
		$sheet = $obj->get_sheet();
		for($i = 0; $i < count($sheet); $i ++)
		{
			$sheet[$i]['short_title'] = cut_str($sheet[$i]['art_title'],50);
		}
		set_link($obj->get_page_sum());
		$smarty->assign('show_sheet',1);
		$smarty->assign('article',$sheet);
	}else{
		$obj = new article();
		$obj->set_field('art_id,art_title,art_author,art_add_time,art_text');
		$obj->set_where('art_channel_id = '.$global['channel_id']);
		$obj->set_where('art_id = '.$global['id']);
		$article = $obj->get_one();
		$smarty->assign('article',$article);
		
		$obj = new article();
		$obj->set_field('art_id,art_title');
		$obj->set_where('art_channel_id = '.$global['channel_id']);
		$obj->set_where('art_id < '.$global['id']);
		$one = $obj->get_one();
		if(count($one))
		{
			$smarty->assign('next_id',$one['art_id']);
			$smarty->assign('next_title',cut_str($one['art_title'],20));
		}else{
			$smarty->assign('next_id','');
			$smarty->assign('next_title','');
		}
				
		$obj = new article();
		$obj->set_field('art_id,art_title');
		$obj->set_where('art_channel_id = '.$global['channel_id']);
		$obj->set_where('art_id > '.$global['id']);
		$obj->set_order('');
		$obj->set_order('art_top','asc');
		$obj->set_order('art_index','asc');
		$obj->set_order('art_id','asc');
		$one = $obj->get_one();
		if(count($one))
		{
			$smarty->assign('prev_id',$one['art_id']);
			$smarty->assign('prev_title',cut_str($one['art_title'],20));
		}else{
			$smarty->assign('prev_id','');
			$smarty->assign('prev_title','');
		}
		
		$obj = new varia();
		$smarty->assign('share_code',im_filter($obj->get_value('share_code',true)));
		
		$smarty->assign('show_sheet',0);
	}
}
//新秀
?>