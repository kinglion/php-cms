<?php
function module_add_booking()
{
	global $global,$smarty;
	$goods_title = get_data('goods',$global['goods_id'],'goo_title');
	$obj = new users();
	$obj->set_where('use_id = '.$global['user_id']);
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		$boo_consignee = $one['use_real_name'];
		$boo_email = $one['use_email'];
		$boo_tel = $one['use_tel'];
	}else{
		$boo_consignee = '';
		$boo_email = '';
		$boo_tel = '';
	}
	$smarty->assign('goods_title',$goods_title);
	$smarty->assign('boo_consignee',$boo_consignee);
	$smarty->assign('boo_email',$boo_email);
	$smarty->assign('boo_tel',$boo_tel);
}
//新秀
?>