<?php
function module_booking_info()
{
	global $global,$smarty;
	$obj = new booking();
	$obj->set_where('boo_id = '.$global['id']);
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		$one['goods_title'] = get_data('goods',$one['boo_goods_id'],'goo_title');
		$smarty->assign('booking',$one);
	}else{
		sins_error();
	}
}
//新秀
?>