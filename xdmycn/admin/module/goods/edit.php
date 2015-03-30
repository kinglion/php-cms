<?php
function module_edit()
{
	global $global,$smarty;
	$obj = new goods();
	$obj->set_where('goo_id = '.$global['id']);
	$goods = $obj->get_one();
	$obj = new att_goo();
	$obj->set_where('att_channel_id = '.$global['channel_id']);
	$att_arr = $obj->get_list();
	$goods['att'] = get_att_list($att_arr,$goods['goo_attribute']);
	$smarty->assign('goods',$goods);
	$smarty->assign('editor_text',$goods['goo_text']);
	
	$list = array();
	$obj = new cat_goo();
	$obj->set_where('cat_channel_id = '.$global['channel_id']);
	$arr = $obj->get_list();
	if(count($arr) > 0)
	{
		$list = $obj->set_cat_order($arr);	
	}
	$smarty->assign('cat_list',$list);
	$smarty->assign('upl_date',date('Ymd'));
}
//新秀
?>