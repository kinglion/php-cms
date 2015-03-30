<?php
function if_add_channel($original,$cha_code,$cha_name)
{
	if(strlen($cha_code) > 3 && filter_keyword($cha_code))
	{
		if($original != '' && $cha_code != '' && $cha_name != '')
		{
			$flag = 1;
			for($i = 0; $i < strlen($cha_code); $i ++)
			{
				$val = substr($cha_code,$i,1);
				if($i == 0)
				{
					if(ord($val) < ord('a') || ord($val) > ord('z'))
					{
						$flag = 0;
						break;
					}
				}else{
					if((ord($val) < ord('a') || ord($val) > ord('z')) && (ord($val) < ord('0') || ord($val) > ord('9')))
					{
						$flag = 0;
						break;
					}
				}
			}
			if($flag)
			{
				$obj = new channel();
				$obj->set_where("cha_code = '$cha_code'");
				$one = $obj->get_one();
				if(count($one) == 0)
				{
					return 1;
				}else{
					return 4;
				}
			}else{
				return 3;
			}
		}else{
			return 2;
		}
	}else{
		return 4;
	}
}
function filter_keyword($cha_code)
{
	$keywords = '|index|about|goods|article|recruit|download|message|search|user|info|admin|njb|';
	if(strpos($keywords,'|'.substr($cha_code,0,3)) === false)
	{
		return true;
	}else{
		return false;
	}
}
function do_add_channel($original,$cha_code,$cha_name,$word_1,$word_2)
{
	//修改数据库
	$obj = new channel();
	$obj->set_where('');
	$obj->set_where("cha_code = '$cha_code'");
	$count = $obj->get_count();
	
	$cha_original = get_id('channel','cha_code',$original);
	$obj = new channel();
	$obj->set_value('cha_code',$cha_code);
	$obj->set_value('cha_name',$cha_name);
	$obj->set_value('cha_original',$cha_original);
	$obj->set_value('cha_lang',S_LANG);
	$obj->add();
	
	$obj = new varia();
	//类关于我们导航
	if($original == 'about')
	{	
		$obj->set_value('var_name','nav_stage_'.$cha_code);
		$obj->set_value('var_value',$cha_name);
		$obj->add();
	}
	//后台导航
	if(!$count)
	{
		$obj->clear_value();
		$obj->set_value('var_name','nav_admin_'.$cha_code);
		$obj->set_value('var_value',$cha_name);
		$obj->add();
		$obj = new menu();
		$obj->set_value('men_type','admin_header');
		$obj->set_value('men_name',$cha_name);
		$obj->set_value('men_url',$cha_code.'/mod-sheet/');
		$obj->add();
		$obj->clear_value();
		$obj->set_value('men_type','admin_'.$cha_code);
		$obj->set_value('men_name',$cha_name.'列表');
		$obj->set_value('men_url',$cha_code.'/mod-sheet/');
		$obj->add();
		$obj->clear_value();
		$obj->set_value('men_type','admin_'.$cha_code);
		$obj->set_value('men_name','添加'.$cha_name);
		$obj->set_value('men_url',$cha_code.'/mod-add/');
		$obj->add();
		if($original == 'article' || $original == 'goods')
		{
			$obj->clear_value();
			$obj->set_value('men_type','admin_'.$cha_code);
			$obj->set_value('men_name',$cha_name.'分类');
			$obj->set_value('men_url',$cha_code.'/mod-cat_list/');
			$obj->add();
		}
		if($original == 'goods')
		{
			$obj->clear_value();
			$obj->set_value('men_type','admin_'.$cha_code);
			$obj->set_value('men_name',$cha_name.'属性');
			$obj->set_value('men_url',$cha_code.'/mod-att_list/');
			$obj->add();
		}
	}
	
	//前台导航
	$obj = new menu();
	$obj->set_value('men_lang',S_LANG);
	$obj->set_value('men_type','header');
	$obj->set_value('men_name',$cha_name);
	$obj->set_value('men_url',$cha_code.'/');
	$obj->add();
	//属性
	if($original == 'download')
	{
		$obj = new att_art();
		$obj->set_where('');
		$obj->set_where("att_channel_id = $cha_original");
		$list = $obj->get_list();
		$channel_id = get_id('channel','cha_code',$cha_code);
		for($i = 0; $i < count($list); $i ++)
		{
			$obj->clear_value();
			$obj->set_value('att_channel_id',$channel_id);
			$obj->set_value('att_lang',$list[$i]['att_lang']);
			$obj->set_value('att_code',$list[$i]['att_code']);
			$obj->set_value('att_name',$list[$i]['att_name']);
			$obj->add();
		}
	}
	
	//创建语言包
	$path = 'languages/'.S_LANG.'/admin/';
	if(file_exists($path.$original.'.txt'))
	{
		$str = file_get_contents($path.$original.'.txt');
		$str = str_replace($word_1,$word_2,$str);
		file_put_contents($path.$cha_code.'.txt',$str);
	}	
	$path = 'languages/'.S_LANG.'/index/';
	if(file_exists($path.$original.'.txt'))
	{
		$str = file_get_contents($path.$original.'.txt');
		$str = str_replace($word_1,$word_2,$str);
		file_put_contents($path.$cha_code.'.txt',$str);
	}
}
function do_del_channel($val)
{
	//修改数据库
	$obj = new channel();
	$obj->set_where('');
	$obj->set_where("cha_code = '$val'");
	$count = $obj->get_count();
	
	$obj = new varia();
	$obj->set_where("var_name = 'nav_stage_".$val."'");
	$obj->del();
	
	//后台导航
	if(!$count)
	{
		$obj->set_where('');
		$obj->set_where("var_name = 'nav_admin_".$val."'");
		$obj->del();
		
		$obj = new menu();
		$obj->set_where("men_type = '$val'");
		$obj->del();
		$obj->set_where('');
		$obj->set_where("men_type = 'admin_header'");
		$obj->set_where("men_url = '".$val."/mod-sheet/'");
		$obj->del();
		$obj->set_where('');
		$obj->set_where("men_type = 'admin_".$val."'");
		$obj->set_where("men_url = '".$val."/mod-sheet/'");
		$obj->del();
		$obj->set_where('');
		$obj->set_where("men_type = 'admin_".$val."'");
		$obj->set_where("men_url = '".$val."/mod-add/'");
		$obj->del();
		$obj->set_where('');
		$obj->set_where("men_type = 'admin_".$val."'");
		$obj->set_where("men_url = '".$val."/mod-cat_list/'");
		$obj->del();
		$obj->set_where('');
		$obj->set_where("men_type = 'admin_".$val."'");
		$obj->set_where("men_url = '".$val."/mod-att_list/'");
		$obj->del();
	}
	
	//前台导航
	$obj = new menu();
	$obj->set_where("men_type = 'header'");
	$obj->set_where("men_url = '".$val."/'");
	$obj->del();
	//属性
	if($val == 'download')
	{
		$channel_id = get_id('channel','cha_code',$val);
		$obj = new att_art();
		$obj->set_where('');
		$obj->set_where("att_channel_id = $val");
		$obj->del();
	}
	
	//删除语言包
	$path = 'languages/'.S_LANG.'/admin/'.$val.'.txt';
	if(file_exists($path))
	{
		unlink($path);
	}	
	$path = 'languages/'.S_LANG.'/index/'.$val.'.txt';
	if(file_exists($path))
	{
		unlink($path);
	}
}
//新秀
?>