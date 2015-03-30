<?php
function module_focus_edit()
{
	global $global,$smarty;
	$obj = new picture();
	$obj->set_where('pic_id = '.$global['id']);
	$smarty->assign('focus',$obj->get_one());
}
//新秀
?>