<?php
function module_focus_list()
{
	global $smarty;
	$obj = new picture();
	$obj->set_where("pic_type = 'focus'");
	$smarty->assign('focus',$obj->get_list());
}
//新秀
?>