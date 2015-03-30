<?php
function module_booking_sheet()
{
	global $global,$smarty;
	$obj = new booking();
	$obj->set_table(S_DB_PREFIX.'goods');
	$obj->set_field('boo_id,boo_goods_id,boo_number,boo_add_time,boo_note,goo_title');
	$obj->set_where('boo_user_id = '.$global['user_id']);
	$obj->set_where('goo_id = boo_goods_id');
	$obj->set_page_size(15);
	$obj->set_page_num($global['page']);
	$sheet = $obj->get_sheet();
	set_link($obj->get_page_sum());
	$smarty->assign('booking',$sheet);
}
//新秀
?>