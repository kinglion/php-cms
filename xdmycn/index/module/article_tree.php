<?php
function module_article_tree($par)
{
	global $global,$smarty;
	$obj = new cat_art();
	$obj->set_where('cat_channel_id = '.get_id('channel','cha_code',$par['channel']));
	$tree = $obj->get_tree();
	for($i = 0;$i < count($tree);$i ++)
	{
		$tree[$i]['channel'] = $par['channel'];
	}
	$smarty->assign('art_tree',$tree);
	$smarty->assign('par_art_tree',$par);
}
//新秀
?>