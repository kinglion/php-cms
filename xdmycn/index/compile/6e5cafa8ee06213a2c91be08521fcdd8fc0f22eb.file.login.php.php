<?php /* Smarty version Smarty-3.1.3, created on 2015-02-05 11:31:42
         compiled from "templates/default/index\module\login.php" */ ?>
<?php /*%%SmartyHeaderCode:1969154d2e41edb44e0-76833153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e5cafa8ee06213a2c91be08521fcdd8fc0f22eb' => 
    array (
      0 => 'templates/default/index\\module\\login.php',
      1 => 1417315155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1969154d2e41edb44e0-76833153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d2e41ef0443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2e41ef0443')) {function content_54d2e41ef0443($_smarty_tpl) {?>
<div class="block" id="login">
	<div class="head">
		<div class="left"></div>
		<div class="title"><?php if (!$_smarty_tpl->tpl_vars['global']->value['user_id']){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_login'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_center'];?>
<?php }?></div>
		<div class="right"></div>
	</div>
	<div class="main">
	<?php if (!$_smarty_tpl->tpl_vars['global']->value['user_id']){?>
		<form id="form_user_login" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'info'),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="user_login"/>
			<table>
				<tr>
					<td class="l"><?php echo $_smarty_tpl->tpl_vars['lang']->value['account'];?>
：</td>
					<td class="r"><input class="text" name="username" type="text" /></td>
				</tr>
				<tr>
					<td class="l"><?php echo $_smarty_tpl->tpl_vars['lang']->value['password'];?>
：</td>
					<td class="r"><input class="text" name="password" type="password" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['login'];?>
" />&nbsp;&nbsp;
						<input class="button" type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['register'];?>
" onclick="document.location.href='<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user','mod'=>'register'),$_smarty_tpl);?>
'" />
					</td>
				</tr>
		</table>
		</form>
	<?php }else{ ?>
		<table class="link">
			<tr>
				<td><a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user','mod'=>'profile'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_info'];?>
</a></td>
				<td><a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user','mod'=>'message_sheet'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_message'];?>
</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user','mod'=>'comment_sheet'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_comments'];?>
</a></td>
				<td><a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user','mod'=>'booking_sheet'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_booking'];?>
</a></td>
			</tr>
			<tr>
				<td colspan="2"><a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user','mod'=>'logout'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['log_out'];?>
</a></td>
			</tr>
		</table>
	<?php }?>
	</div>
</div>
<!-- 新秀 -->
<?php }} ?>