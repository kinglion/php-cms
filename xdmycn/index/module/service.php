<?php
function module_service()
{
	global $smarty;
	$obj = new varia();
	$smarty->assign('service_code',im_filter($obj->get_value('service_code',true)));
}
//新秀
?>