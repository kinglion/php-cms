<?php
function edit_user()
{
	global $smarty,$lang;
	$use_id = post('use_id');
	$use_birthday = mktime(8,0,0,post('birthday_month'),post('birthday_day'),post('birthday_year'));
	$use_sex = post('sex');
	$use_real_name = post('real_name');
	$use_email = post('email');
	$use_qq = post('qq');
	$use_tel = post('tel');
	$use_phone = post('phone');
	$use_address = post('address');
	
	$obj = new users();
	$obj->set_value('use_birthday',$use_birthday);
	$obj->set_value('use_sex',$use_sex);
	$obj->set_value('use_real_name',$use_real_name);
	$obj->set_value('use_email',$use_email);
	$obj->set_value('use_qq',$use_qq);
	$obj->set_value('use_tel',$use_tel);
	$obj->set_value('use_phone',$use_phone);
	$obj->set_value('use_address',$use_address);
	$obj->set_where("use_id = $use_id");
	$obj->edit();
	
	$smarty->assign('info_text','编辑用户信息成功');
	$smarty->assign('link_text',$lang['return_list']);
	$smarty->assign('link_href',url(array('channel'=>'service','mod'=>'user_sheet')));
}
function edit_pwd()
{
	global $smarty,$lang;
	$use_id = post('use_id');
	$new_pwd = post('new_pwd');
	$re_pwd = post('re_pwd');
	$use_password = md5($new_pwd);
	$obj = new users();
	$obj->set_value('use_password',$use_password);
	$obj->set_where('');
	$obj->set_where("use_id = $use_id");
	$obj->edit();
	
	$smarty->assign('info_text','修改用户密码成功');
	$smarty->assign('link_text',$lang['return_list']);
	$smarty->assign('link_href',url(array('channel'=>'service','mod'=>'user_sheet')));
}
function del_user()
{
	$id = post('id');
	$obj = new users();
	$obj->set_where("use_id = $id");
	$obj->del();
	
	$obj = new booking();
	$obj->set_value('boo_user_id',0);
	$obj->set_where("boo_user_id = $id");
	$obj->edit();	
	
	$obj = new comment();
	$obj->set_value('com_user_id',0);
	$obj->set_where("com_user_id = $id");
	$obj->edit();
	
	$obj = new message();
	$obj->set_value('mes_user_id',0);
	$obj->set_where("mes_user_id = $id");
	$obj->edit();
	echo 1;
}
function reply_mes()
{
	global $smarty,$lang;
	$mes_id = post('mes_id');
	$mes_reply = post('mes_reply');
	$obj = new message();
	$obj->set_value('mes_reply',$mes_reply);
	$obj->set_where("mes_id = $mes_id");
	$obj->edit();
	
	$smarty->assign('info_text','回复留言成功');
	$smarty->assign('link_text',$lang['return_list']);
	$smarty->assign('link_href',url(array('channel'=>'service','mod'=>'message_sheet')));
}
function reply_comment()
{
	global $smarty,$lang;
	$com_id = post('com_id');
	$com_reply = post('com_reply');
	$obj = new comment();
	$obj->set_value('com_reply',$com_reply);
	$obj->set_where("com_id = $com_id");
	$obj->edit();
	
	$smarty->assign('info_text','回复评论成功');
	$smarty->assign('link_text',$lang['return_list']);
	$smarty->assign('link_href',url(array('channel'=>'service','mod'=>'comment_sheet')));
}
function reply_booking()
{
	global $smarty,$lang;
	$boo_id = post('boo_id');
	$boo_note = post('boo_note');
	$obj = new booking();
	$obj->set_value('boo_note',$boo_note);
	$obj->set_where("boo_id = $boo_id");
	$obj->edit();
	
	$smarty->assign('info_text','修改订购信息成功');
	$smarty->assign('link_text',$lang['return_list']);
	$smarty->assign('link_href',url(array('channel'=>'service','mod'=>'booking_sheet')));
}
function add_question()
{
	global $smarty,$lang;
	$question = post('question');
	$input_type = post('input_type');
	$answer = post('answer');
	if($question !='' && $input_type != '' && $answer != '')
	{
		$val = $question.'{v}'.$input_type.'{v}'.str_replace('|','{v}',$answer);
		$obj = new varia();
		$obj->set_value('var_name','research');
		$obj->set_value('var_value',$val);
		$obj->set_value('var_lang',S_LANG);
		$obj->add();
	}
	$smarty->assign('info_text','添加问题成功');
	$smarty->assign('link_text',$lang['return_list']);
	$smarty->assign('link_href',url(array('channel'=>'service','mod'=>'research_sheet')));
}
function edit_question()
{
	global $smarty,$lang;
	$obj = new varia();
	for($i = 0; $i < count($_POST['id']); $i ++)
	{
		$question = strict($_POST['question'][$i]);
		$input_type = strict($_POST['input_type'][$i]);
		$answer = strict($_POST['answer'][$i]);
		$id = strict($_POST['id'][$i]);
		if($question !='' && $input_type != '' && $answer != '')
		{
			$val = $question.'{v}'.$input_type.'{v}'.str_replace('|','{v}',$answer);
			$obj->set_value('var_value',$val);
			$obj->set_where('');
			$obj->set_where("var_id = $id");
			$obj->edit();
		}
	}
	$smarty->assign('info_text','修改问题成功');
	$smarty->assign('link_text',$lang['return_list']);
	$smarty->assign('link_href',url(array('channel'=>'service','mod'=>'research_sheet')));
}
function edit_notice()
{
	global $smarty,$lang;
	$var_text = post('editor','loose');
	$obj = new varia();
	$obj->edit_var_value('notice',$var_text,true);
	$smarty->assign('info_text','修改网站公告成功');
	$smarty->assign('link_text','返回上一页');
	$smarty->assign('link_href',url(array('channel'=>'service','mod'=>'notice')));
}
function edit_online()
{
	global $smarty,$lang;
	$var_text = post('editor','loose');
	$obj = new varia();
	$obj->edit_var_value('service_code',$var_text,true);
	$smarty->assign('info_text','修改在线客服成功');
	$smarty->assign('link_text','返回上一页');
	$smarty->assign('link_href',url(array('channel'=>'service','mod'=>'online')));
}
function edit_agreement()
{
	global $smarty,$lang;
	$var_text = post('editor','loose');
	$obj = new varia();
	$obj->edit_var_value('user_agreement',$var_text,true);
	$smarty->assign('info_text','修改用户协议成功');
	$smarty->assign('link_text','返回上一页');
	$smarty->assign('link_href',url(array('channel'=>'service','mod'=>'agreement')));
}
function add_or_edit_link()
{
	global $smarty,$lang;
	$lin_id = post('lin_id');
	$lin_word = post('lin_word');
	$lin_url = post('lin_url');
	$lin_img = post('lin_img');
	$lin_title = post('lin_title');
	if($lin_img == 'http://' || $lin_img == '')
	{
		$lin_img = 'none';
	}
	$obj = new link();
	$obj->set_value('lin_word',$lin_word);
	$obj->set_value('lin_url',$lin_url);
	$obj->set_value('lin_img',$lin_img);
	$obj->set_value('lin_title',$lin_title);
	if($lin_id != '')
	{
		$obj->set_where("lin_id = $lin_id");
		$obj->edit();
		$info_text = '修改友情链接成功';
	}else{
		$obj->set_value('lin_lang',S_LANG);
		$obj->add();
		$info_text = '添加友情链接成功';
	}
	$smarty->assign('info_text',$info_text);
	$smarty->assign('link_text',$lang['return_list']);
	$smarty->assign('link_href',url(array('channel'=>'service','mod'=>'link_list')));
}
//新秀
?>