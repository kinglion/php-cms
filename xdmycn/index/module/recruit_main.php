<?php
function module_recruit_main()
{
	global $global,$smarty;
	$obj = new article();
	$obj->set_field('art_title,art_text,art_add_time');
	$obj->set_where('art_channel_id = '.$global['channel_id']);
	$obj->set_page_size(5);
	$obj->set_page_num($global['page']);
	$sheet = $obj->get_sheet();
	set_link($obj->get_page_sum());
	$smarty->assign('recruit',$sheet);
}
//新秀
?>