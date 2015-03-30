<?php
function module_booking_sheet()
{
	global $global,$smarty;
	$obj = new booking();
	$obj->set_table(S_DB_PREFIX.'goods');
	$obj->set_where('goo_id = boo_goods_id');
	$obj->set_page_size(15);
	$obj->set_page_num($global['page']);
	$sheet = $obj->get_sheet();
	for($i = 0; $i < count($sheet); $i ++)
	{
		if($sheet[$i]['boo_user_id'])
		{
			$sheet[$i]['user_name'] = get_data('users',$sheet[$i]['boo_user_id'],'use_username');
		}else{
			$sheet[$i]['user_name'] = '';
		}
	}
	set_link($obj->get_page_sum());
	$smarty->assign('booking',$sheet);
}
//新秀
?>