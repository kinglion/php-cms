<?php
function module_online()
{
	global $smarty;
	$obj = new varia();
	$smarty->assign('editor_text',im_filter($obj->get_value('service_code',true)));
}
//新秀
?>