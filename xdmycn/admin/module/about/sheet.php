<?php
function module_sheet()
{
	global $global,$smarty;
	$obj = new article();
	$obj->set_where('art_channel_id = '.$global['channel_id']);
	$obj->set_page_size(10);
	$obj->set_page_num($global['page']);
	$sheet = $obj->get_sheet();
	set_link($obj->get_page_sum());
	$smarty->assign('article',$sheet);
}
//新秀
?>