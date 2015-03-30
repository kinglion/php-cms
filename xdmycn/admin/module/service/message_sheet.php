<?php
function module_message_sheet()
{
	global $global,$smarty;
	$obj = new message();
	$obj->set_page_size(10);
	$obj->set_page_num($global['page']);
	$sheet = $obj->get_sheet();
	set_link($obj->get_page_sum());
	for($i = 0; $i < count($sheet); $i ++)
	{
		if($sheet[$i]['mes_user_id'] != 0)
		{
			$sheet[$i]['user_name'] = get_data('users',$sheet[$i]['mes_user_id'],'use_username');
		}else{
			$sheet[$i]['user_name'] = '';
		}
	}
	$smarty->assign('message',$sheet);
}
//新秀
?>