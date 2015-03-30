<?php
function module_search_main()
{
	global $global,$smarty;
	$global['key'] = get_decode($global['key']);
	$obj = new goods();
	$obj->set_field('goo_id,goo_title,goo_x_img');
	$obj->set_where("goo_title like '%" . $global['key'] . "%'");
	$obj->set_where('goo_channel_id = '.get_id('channel','cha_code','goods'));
	$len = get_varia('img_list_len');
	$obj->set_page_size($len ? $len : 12);
	$obj->set_page_num($global['page']);
	$sheet = $obj->get_sheet();
	for($i = 0; $i < count($sheet); $i ++)
	{
		$sheet[$i]['short_title'] = cut_str($sheet[$i]['goo_title'],10);
	}
	set_link($obj->get_page_sum());
	$smarty->assign('search',$sheet);
}
//新秀
?>