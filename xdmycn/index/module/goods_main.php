<?php
function module_goods_main()
{
	global $global,$smarty;
	if(!$global['id'])
	{
		$obj = new goods();
		$obj->set_field('goo_id,goo_title,goo_x_img');
		$obj->set_where('goo_channel_id = '.$global['channel_id']);
		if($global['cat'])
		{
			$family = implode(',',get_cat_family('cat_goo',$global['cat']));
			$obj->set_where("goo_cat_id in ($family)");
		}
		$len = get_varia('img_list_len');
		$obj->set_page_size($len ? $len : 12);
		$obj->set_page_num($global['page']);
		$sheet = $obj->get_sheet();
		for($i = 0; $i < count($sheet); $i ++)
		{
			$sheet[$i]['short_title'] = cut_str($sheet[$i]['goo_title'],10);
		}
		set_link($obj->get_page_sum());
		$smarty->assign('show_sheet',1);
		$smarty->assign('goods',$sheet);
	}else{
		$obj = new goods();
		$obj->set_field('goo_id,goo_title,goo_sn,goo_img,goo_more_img,goo_text,goo_price,goo_attribute');
		$obj->set_where('goo_channel_id = '.$global['channel_id']);
		$obj->set_where('goo_id = '.$global['id']);
		$obj->set_page_size(1);
		$goods = $obj->get_one();
		$goods['more_img'] = array();
		if($goods['goo_more_img'] != '')
		{
			$goods['more_img'] = explode('|',$goods['goo_more_img']);
		}
		$goods['att'] = array();
		$obj = new att_goo();
		$obj->set_where('att_channel_id = '.$global['channel_id']);
		$att_arr = $obj->get_list();
		$goods['att'] = get_att_list($att_arr,$goods['goo_attribute']);
		$smarty->assign('goods',$goods);
		
		$obj = new goods();
		$obj->set_field('goo_id,goo_title');
		$obj->set_where('goo_channel_id = '.$global['channel_id']);
		$obj->set_where('goo_id < '.$global['id']);
		$one = $obj->get_one();
		if(count($one))
		{
			$smarty->assign('next_id',$one['goo_id']);
			$smarty->assign('next_title',cut_str($one['goo_title'],20));
		}else{
			$smarty->assign('next_id','');
			$smarty->assign('next_title','');
		}
				
		$obj = new goods();
		$obj->set_field('goo_id,goo_title');
		$obj->set_where('goo_channel_id = '.$global['channel_id']);
		$obj->set_where('goo_id > '.$global['id']);
		$obj->set_order('');
		$obj->set_order('goo_top','asc');
		$obj->set_order('goo_index','asc');
		$obj->set_order('goo_id','asc');
		$one = $obj->get_one();
		if(count($one))
		{
			$smarty->assign('prev_id',$one['goo_id']);
			$smarty->assign('prev_title',cut_str($one['goo_title'],20));
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