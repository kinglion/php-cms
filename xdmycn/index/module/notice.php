<?php
function module_notice()
{
	global $smarty;
	$obj = new varia();
	$smarty->assign('notice',$obj->get_value('notice',true));
}
//新秀
?>