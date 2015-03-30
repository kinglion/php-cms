<?php
function module_edit()
{
	global $global,$smarty;
	$obj = new article();
	$obj->set_where('art_id = '.$global['id']);
	$one = $obj->get_one();
	$smarty->assign('article',$one);
	$smarty->assign('editor_text',$one['art_text']);
}
//新秀
?>