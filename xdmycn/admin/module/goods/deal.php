<?php
function add_or_edit_goods()
{
	global $global,$smarty,$lang;
	$goo_id = post('goo_id');
	$goo_channel_id = post('goo_channel_id');
	$goo_title = post('goo_title');
	$goo_sn = post('goo_sn');
	$goo_cat_id = post('goo_cat_id');
	$goo_img = post('pic_path');
	$goo_more_img = post('more_img');
	$goo_price = post('goo_price');
	$goo_text = post('editor','loose');
	$goo_keywords = post('goo_keywords');
	$goo_description = post('goo_description');
	$goo_add_time = time();
	$arr = array();
	$obj = new att_goo();
	$obj->set_where('att_channel_id = '.$global['channel_id']);
	$att = $obj->get_list();
	for($i = 0; $i < count($att); $i ++)
	{
		$att_value = post($att[$i]['att_code']);
		if($att_value != '')
		{
			$arr[$att[$i]['att_id']] = $att_value;
		}
	}
	$goo_attribute = rawurlencode(json_encode($arr));
	if($goo_img != '' && $goo_img != 'images/no_img.gif')
	{
		$img_name = get_file_name($goo_img,'/');
		$goo_x_img = str_replace($img_name,'x_'.$img_name,$goo_img);
	}else{
		$goo_img = 'images/no_img.gif';
		$goo_x_img = 'images/no_img.gif';
	}
	$goo_text = optimize($goo_text);
	$goo_description = cut_str($goo_description,250);
	$obj = new goods();
	$obj->set_value('goo_title',$goo_title);
	$obj->set_value('goo_sn',$goo_sn);
	$obj->set_value('goo_cat_id',$goo_cat_id);
	$obj->set_value('goo_img',$goo_img);
	$obj->set_value('goo_x_img',$goo_x_img);
	$obj->set_value('goo_more_img',$goo_more_img);
	$obj->set_value('goo_price',$goo_price);
	$obj->set_value('goo_text',$goo_text);
	$obj->set_value('goo_keywords',$goo_keywords);
	$obj->set_value('goo_description',$goo_description);
	$obj->set_value('goo_add_time',$goo_add_time);
	$obj->set_value('goo_attribute',$goo_attribute);
	if($goo_id != '')
	{
		$obj->set_where("goo_id = $goo_id");
		$obj->edit();
		$info_text = $lang['edit_goods_success'];
	}else{
		$obj->set_value('goo_channel_id',$global['channel_id']);
		$obj->set_value('goo_lang',S_LANG);
		$obj->add();
		$info_text = $lang['add_goods_success'];
	}
	if(intval(get_varia('single_page_static')))
	{
		$page_id = $goo_id;
		if($page_id == '')
		{
			$obj->set_where("goo_add_time = $goo_add_time");
			$one = $obj->get_one();
			if(count($one))
			{
				$page_id = $one['goo_id'];
			}
		}
		if($page_id != '')
		{
			$domain = get_domain();
			$page_url = 'http://' . $domain . S_ROOT . url(array('channel'=>$global['channel'],'id'=>$page_id));
			$html = file_get_contents($page_url);
		}
	}
	$smarty->assign('info_text',$info_text);
	$smarty->assign('link_text',$lang['return_list']);
	$smarty->assign('link_href',url(array('channel'=>$global['channel'],'mod'=>'sheet')));
}
function del_goods()
{
	$id = post('id');
	$obj = new goods();
	$obj->set_field('goo_x_img,goo_img');
	$obj->set_where("goo_id = $id");
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		$img_x_path = $one['goo_x_img'];
		$img_path = $one['goo_img'];
		$obj->del();
		if($path = realpath($img_x_path))
		{
			if(file_exists($path) && $img_x_path != 'images/no_img.gif') unlink($path);
		}
		if($path = realpath($img_path))
		{
			if(file_exists($path) && $img_path != 'images/no_img.gif') unlink($path);
		}
	}
	echo 1;
}
function add_or_edit_cat()
{
	global $global,$smarty,$lang;
	$cat_id = post('cat_id');
	$cat_parent_id = post('cat_parent_id');
	$cat_name = post('cat_name');
	$obj = new cat_goo();
	$obj->set_value('cat_parent_id',$cat_parent_id);
	$obj->set_value('cat_name',$cat_name);
	if($cat_id != '')
	{
		$obj->set_where("cat_id = $cat_id");
		$obj->edit();
		$info_text = $lang['edit_cat_success'];
	}else{
		$obj->set_value('cat_channel_id',$global['channel_id']);
		$obj->set_value('cat_lang',S_LANG);
		$obj->add();
		$info_text = $lang['add_cat_success'];
	}
	$smarty->assign('info_text',$info_text);
	$smarty->assign('link_text',$lang['return_list']);
	$smarty->assign('link_href',url(array('channel'=>$global['channel'],'mod'=>'cat_list')));
}
function edit_att()
{
	global $global,$smarty,$lang;
	for($i = 0; $i < count($_POST['att_id']); $i ++)
	{
		$att_code = strict($_POST['att_code'][$i]);
		$att_name = strict($_POST['att_name'][$i]);
		$att_id = strict($_POST['att_id'][$i]);
		$obj = new att_goo();
		$obj->set_value('att_code',$att_code);
		$obj->set_value('att_name',$att_name);
		$obj->set_where('att_id = '.$att_id);
		$obj->edit();
	}
	$smarty->assign('info_text',$lang['edit_att_success']);
	$smarty->assign('link_text',$lang['return_list']);
	$smarty->assign('link_href',url(array('channel'=>$global['channel'],'mod'=>'att_list')));
}
function add_att()
{
	global $global,$smarty,$lang;
	$att_code = post('att_code');
	$att_name = post('att_name');
	$obj = new att_goo();
	$obj->set_value('att_code',$att_code);
	$obj->set_value('att_name',$att_name);
	$obj->set_value('att_channel_id',$global['channel_id']);
	$obj->set_value('att_lang',S_LANG);
	$obj->add();
	$smarty->assign('info_text',$lang['add_att_success']);
	$smarty->assign('link_text',$lang['return_list']);
	$smarty->assign('link_href',url(array('channel'=>$global['channel'],'mod'=>'att_list')));
}
function upload()
{
	$dir = post('dir');
	$file = rawurlencode(post('file'));
	$reduce = intval(post('reduce'));
	$suffix = strtolower(get_file_name($file,'.'));
	if(strpos('jpg,gif,png,bmp,jpeg',$suffix) !== false)
	{
		if(!is_dir($dir))
		{
			mkdir($dir,0777,true);
		}
		move_uploaded_file($_FILES['file_path']['tmp_name'],$dir.$file);
		set_cookie('img',$dir.$file);
		if($reduce)
		{
			if(function_exists('imagecreate'))
			{
				include('include/resizeimage.class.php');
				$width = intval(get_varia('x_img_width'));
				$height = intval(get_varia('x_img_height'));
				$resizeimage = new resizeimage($dir.$file,$width,$height,false,$dir.'x_'.$file);
			}else{
				copy($dir.$file,$dir.'x_'.$file);
			}
		}
	}
}
//新秀
?>