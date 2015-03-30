<?php
function module_message_edit()
{
	global $global,$smarty;
	$obj = new message();
	$obj->set_where('mes_id = '.$global['id']);
	$one = $obj->get_one();
	if($one['mes_user_id'])
	{
		$one['user_name'] = get_data('users',$one['mes_user_id'],'use_username');
	}else{
		$one['user_name'] = '';
	}
	$smarty->assign('message',$one);
}
//新秀
?>