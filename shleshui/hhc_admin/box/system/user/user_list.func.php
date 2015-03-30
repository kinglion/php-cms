<?php

	function user_list(){
		$ty = 'user_id,user_name,username,user_integral,shenhe';
		$w = " 1 order by `user_id` desc";
		$page = new page('`'.DB_PRE.'user`',$ty,$w,20,'p');
		$res = $page -> page_2(10);
		return $res;
	}