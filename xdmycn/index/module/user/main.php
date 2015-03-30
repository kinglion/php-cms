<?php
function module_main()
{
	global $global,$smarty;
	$cmd = post('cmd');
	if($cmd == '')
	{
		$smarty->assign('show_info',0);
		$global['mod'] = get_global('mod','profile');
		$smarty->assign('global',$global);
		if($global['mod'] == 'register')
		{
			$obj = new varia();
			$smarty->assign('user_agreement',$obj->get_value('user_agreement',true));
			$smarty->assign('show_mod','register');
		}elseif($global['user_id'] != 0){
			$smarty->assign('show_mod','user_center');
			if($global['mod'] != 'main')
			{
				include('index/module/user/'.$global['mod'].'.php');
				$func = 'module_'.$global['mod'];
				$func();
			}
		}else{
			$smarty->assign('show_mod','login');
		}
	}else{
		$smarty->assign('show_info',1);
		include('index/module/user/deal.php');
	}
}
//新秀
?>