<?php
function module_focus()
{
	global $global,$smarty;
	$obj = new picture();
	$obj->set_where("pic_type = 'focus'");
	$obj->set_where("pic_site = '".$global['channel']."'");
	$list = $obj->get_list();
	if(count($list) == 0)
	{
		$obj->set_where('');
		$obj->set_where("pic_lang = '".S_LANG."'");
		$obj->set_where("pic_type = 'focus'");
		$obj->set_where("pic_site = 'default'");
		$list = $obj->get_list();
	}
	$smarty->assign('focus',$list);
}
//新秀
?>