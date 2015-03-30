<?php /* Smarty version Smarty-3.1.3, created on 2015-02-02 21:50:01
         compiled from "templates\default\admin\module\goods\att_list.php" */ ?>
<?php /*%%SmartyHeaderCode:2988454cf8089cc6fc4-59478620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7245e18012ee4d8913f34dab311e948084c527e1' => 
    array (
      0 => 'templates\\default\\admin\\module\\goods\\att_list.php',
      1 => 1390631619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2988454cf8089cc6fc4-59478620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'global' => 0,
    'att' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54cf8089dbabc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf8089dbabc')) {function content_54cf8089dbabc($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_att'];?>
</span></div>
	<div class="main">
		<form id="form_edit_att" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
		<input name="cmd" type="hidden" value="edit_att" />
		<table class="table sheet">
			<tr class="h">
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['en_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['cn_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['att']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><input name="att_code[]" type="text" class="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['att_code'];?>
" /></td>
				<td><input name="att_name[]" type="text" class="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['att_name'];?>
" /></td>
				<td><input name="att_id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['att_id'];?>
" /><span class="span_bt" onClick="del('att_goo|<?php echo $_smarty_tpl->tpl_vars['item']->value['att_id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</span></td>
			</tr>
			<?php } ?>
			<tr>
				<td class="bt_row" colspan="4">
					<div class="bt_row">
						<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
						<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'att_add'),$_smarty_tpl);?>
')" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
" />
					</div>
				</td>
			</tr>
		</table>
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['help'];?>
</span></div>
	<div class="main content">
		<?php echo $_smarty_tpl->tpl_vars['lang']->value['help_3'];?>

	</div>
</div>
<?php }} ?>