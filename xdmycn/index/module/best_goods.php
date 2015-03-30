<?php
function module_best_goods()
{
	global $smarty;
	$obj = new goods();
	$obj->set_field('goo_id,goo_title,goo_x_img');
	$obj->set_where('goo_best = 1');
	$obj->set_where('goo_channel_id = '.get_id('channel','cha_code','goods'));
	$obj->set_page_size(10);
	$list = $obj->get_list();
	for($i = 0; $i < count($list); $i ++)
	{
		$list[$i]['short_title'] = cut_str($list[$i]['goo_title'],10);
	}
	$smarty->assign('best_goods',$list);
}
//新秀
?>