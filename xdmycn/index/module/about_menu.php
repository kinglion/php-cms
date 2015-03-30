<?php
function module_about_menu()
{
	global $global,$smarty;
	$obj = new menu();
	$obj->set_where("men_type = '".$global['channel']."'");
	$obj->set_field('men_name,men_url');
	$smarty->assign('menu',$obj->get_list());
}
//新秀
?>