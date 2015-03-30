<?php
function module_message_sheet()
{
	global $global,$smarty;
	$obj = new message();
	$obj->set_where('');
	$obj->set_where("mes_lang = '".S_LANG."'");
	$obj->set_where('mes_user_id = '.$global['user_id']);
	$obj->set_page_size(5);
	$obj->set_page_num($global['page']);	
	$smarty->assign('message',$obj->get_sheet());
	set_link($obj->get_page_sum());
}
//新秀
?>