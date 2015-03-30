<?php
function module_comment()
{
	global $global,$smarty;
	if($global['id'])
	{
		if($global['user_id'] > 0)
		{
			$user_name = get_data('users',$global['user_id'],'use_username');
			$user_email = get_data('users',$global['user_id'],'use_email');
		}else{
			$user_name = '';
			$user_email = '';
		}
		$obj = new comment();
		$obj->set_where('com_channel_id = '.get_id('channel','cha_code',$global['channel']));
		$obj->set_where('com_page_id = '.$global['id']);
		$obj->set_page_size(5);
		$obj->set_page_num($global['page']);
		$sheet = $obj->get_sheet();
		for($i = 0; $i < count($sheet); $i ++)
		{
			$sheet[$i]['user_name'] = get_data('users',$sheet[$i]['com_user_id'],'use_username');
		}
		set_link($obj->get_page_sum());
		$smarty->assign('user_name',$user_name);
		$smarty->assign('user_email',$user_email);
		$smarty->assign('comment',$sheet);
	}
}
//新秀
?>