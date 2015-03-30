<?php /* Smarty version Smarty-3.1.3, created on 2015-02-02 21:25:19
         compiled from "templates\default\admin\module\basic\site_set.php" */ ?>
<?php /*%%SmartyHeaderCode:1362654cf7abf355648-76814854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38cf2fa5368581d610a109f16d1a7809b4f76bcd' => 
    array (
      0 => 'templates\\default\\admin\\module\\basic\\site_set.php',
      1 => 1390631619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1362654cf7abf355648-76814854',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'site' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54cf7abf44924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf7abf44924')) {function content_54cf7abf44924($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>网站设置</span></div>
	<div class="main">
		<form id="form_edit_site" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_site" />
			<table class="table">
				<tr>
					<td>网站标题：</td>
					<td><input name="site_title" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['title'];?>
" /></td>
				</tr>
				<tr>
					<td>企业名称：</td>
					<td><input name="site_name" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
" /></td>
				</tr>
				<tr>
					<td>网站域名：</td>
					<td><input name="site_domain" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['domain'];?>
" /></td>
				</tr>
				<tr>
					<td>ICP备案号：</td>
					<td><input name="site_record" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['record'];?>
" /></td>
				</tr>
				<tr>
					<td>备案号链接：</td>
					<td><input name="site_record_url" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['record_url'];?>
" /></td>
				</tr>
				<tr>
					<td>技术支持：</td>
					<td><input name="site_tech" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['tech'];?>
" /></td>
				</tr>
				<tr>
					<td>技术支持链接：</td>
					<td><input name="site_tech_url" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['tech_url'];?>
" /></td>
				</tr>
				<tr>
					<td>网站关键字：</td>
					<td><input name="site_keywords" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['keywords'];?>
" /></td>
				</tr>
				<tr>
					<td>网站描述：</td>
					<td><textarea class="textarea" name="site_description"><?php echo $_smarty_tpl->tpl_vars['site']->value['description'];?>
</textarea></td>
				</tr>
				<tr>
					<td>统计代码：</td>
					<td>
						<textarea class="textarea" name="statistical_code"><?php echo $_smarty_tpl->tpl_vars['site']->value['statistical_code'];?>
</textarea><br />
						<div class="sentence">
							可到&nbsp;<a href="http://www.cnzz.com/" target="_blank">http://www.cnzz.com/</a>&nbsp;获取统计代码
						</div>
					</td>
				</tr>
				<tr>
					<td>分享代码：</td>
					<td>
						<textarea class="textarea" name="share_code"><?php echo $_smarty_tpl->tpl_vars['site']->value['share_code'];?>
</textarea><br />
						<div class="sentence">
							可到&nbsp;<a href="http://www.jiathis.com/" target="_blank">http://www.jiathis.com/</a>&nbsp;获取分享代码
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<?php }} ?>