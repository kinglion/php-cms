<?php
function module_goods_list()
{
	global $smarty;
	$obj = new cat_goo();
	$obj->set_where('cat_best = 1');
	$best_cat = $obj->get_list();
	$goo_list = array();
	for($i = 0; $i < count($best_cat); $i ++)
	{
		$cat_id = $best_cat[$i]['cat_id'];
		$best_cat[$i]['channel'] = get_data('channel',$best_cat[$i]['cat_channel_id'],'cha_code');
		$family = implode(',',get_cat_family('cat_goo',$cat_id));
		$obj = new goods();
		$obj->set_field('goo_id,goo_title,goo_x_img');
		$obj->set_where("goo_cat_id in ($family)");
		$len = get_varia('index_img_list_len');
		$obj->set_page_size($len ? $len : 8);
		$list = $obj->get_list();
		for($j = 0; $j < count($list); $j ++)
		{
			$list[$j]['short_title'] = cut_str($list[$j]['goo_title'],10);
		}
		$goo_list[$cat_id] = $list;
		unset($obj);
	}
	$smarty->assign('best_goo_cat',$best_cat);	
	$smarty->assign('goods_list',$goo_list);
}
//新秀
?>