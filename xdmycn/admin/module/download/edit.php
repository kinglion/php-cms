<?php
function module_edit()
{
	global $global,$smarty;
	$obj = new article();
	$obj->set_where('art_id = '.$global['id']);
	$article = $obj->get_one();
	
	$obj = new att_art();
	$obj->set_where('');
	$obj->set_where('att_channel_id = 5');
	$obj->set_where('att_channel_id = '.$global['channel_id'],'or');
	$att_arr = $obj->get_list();
	$article['att'] = get_att_list($att_arr,$article['art_attribute'],'file_path');
	$smarty->assign('article',$article);
	$smarty->assign('editor_text',$article['art_text']);
}
//新秀
?>