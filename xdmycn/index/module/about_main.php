<?php
function module_about_main()
{
	global $global,$smarty;
	$obj = new article();
	$obj->set_field('art_title,art_text');
	if($global['id'])
	{
		$obj->set_where('art_id = ' . $global['id']);
	}else{
		$obj->set_where('art_channel_id = '.$global['channel_id']);
	}
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		$smarty->assign('about',$one['art_text']);
	}else{
		$smarty->assign('about','');
	}
}
//新秀
?>