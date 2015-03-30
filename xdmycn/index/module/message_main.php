<?php
function module_message_main()
{
	global $global,$smarty;
	if($global['user_id'] > 0)
	{
		$user_name = get_data('users',$global['user_id'],'use_username');
		$user_email = get_data('users',$global['user_id'],'use_email');
	}else{
		$user_name = '';
		$user_email = '';
	}
	$obj = new message();
	$obj->set_page_size(5);
	$obj->set_page_num($global['page']);	
	$sheet = $obj->get_sheet();
	for($i = 0; $i < count($sheet); $i ++)
	{
		$sheet[$i]['user_name'] = get_data('users',$sheet[$i]['mes_user_id'],'use_username');
	}
	set_link($obj->get_page_sum());
	$smarty->assign('user_name',$user_name);
	$smarty->assign('user_email',$user_email);
	$smarty->assign('link_page','message');
	$smarty->assign('message',$sheet);
}
//新秀
?>