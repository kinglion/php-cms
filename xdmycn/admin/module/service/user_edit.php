<?php
function module_user_edit()
{
	global $global,$smarty;
	$obj = new users();
	$obj->set_where('use_id = '.$global['id']);
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		$one['use_birthday_year'] = date('Y',$one['use_birthday']);
		$one['use_birthday_month'] = date('m',$one['use_birthday']);
		$one['use_birthday_day'] = date('d',$one['use_birthday']);
		$smarty->assign('profile',$one);
	}else{
		sins_error();
	}
}
//新秀
?>