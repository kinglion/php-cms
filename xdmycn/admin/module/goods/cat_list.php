<?php
function module_cat_list()
{
	global $global,$smarty;
	$list = array();
	$obj = new cat_goo();
	$obj->set_where('cat_channel_id = '.$global['channel_id']);
	$arr = $obj->get_list();
	if(count($arr) > 0)
	{
		$list = $obj->set_cat_order($arr);
		for($i = 0; $i < count($list); $i ++)
		{
			$list[$i]['parent_name'] = get_data('cat_goo',$list[$i]['cat_parent_id'],'cat_name');
			$obj->set_where('');
			$obj->set_where('cat_parent_id = ' . $list[$i]['cat_id']);
			if($obj->get_count() > 0)
			{
				$list[$i]['exist_child'] = 1;
			}else{
				$list[$i]['exist_child'] = 0;
			}
		}		
	}
	$smarty->assign('cat_list',$list);
}
//新秀
?>