<?php
function module_sheet()
{
	global $global,$smarty;
	$prefix = $global['channel'].'/mod-sheet';
	if(isset($global['field']))
	{
		$prefix = $prefix.'/field-'.$global['field'];
	}
	if(isset($global['key']))
	{
		$prefix = $prefix.'/key-'.$global['key'];
	}
	$obj = new goods();
	$obj->set_where('goo_channel_id = '.$global['channel_id']);
	if(isset($global['key']))
	{
		$obj->set_where($global['field']." like '%".get_decode($global['key'])."%'");
	}
	$obj->set_page_size(10);
	$obj->set_page_num($global['page']);
	$sheet = $obj->get_sheet();
	set_link($obj->get_page_sum());
	$smarty->assign('goods',$sheet);
	$smarty->assign('prefix',$prefix);
}
//新秀
?>