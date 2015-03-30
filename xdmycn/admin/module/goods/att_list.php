<?php
function module_att_list()
{
	global $global,$smarty;
	$obj = new att_goo();
	$obj->set_where('att_channel_id = '.$global['channel_id']);
	$smarty->assign('att',$obj->get_list());
}
//新秀
?>