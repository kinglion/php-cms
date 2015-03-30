<?php /* Smarty version Smarty-3.1.3, created on 2015-02-03 11:30:48
         compiled from "templates\default\admin\module\about\sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:79954d040e86e8357-82440500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc5183038ed1797834deb3907c08e2dd7b0a4102' => 
    array (
      0 => 'templates\\default\\admin\\module\\about\\sheet.php',
      1 => 1390631619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79954d040e86e8357-82440500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'article' => 0,
    'item' => 0,
    'global' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d040e888a33',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d040e888a33')) {function content_54d040e888a33($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['about_sheet'];?>
</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</td>
				<td width="150px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['page_link'];?>
</td>
				<td width="45px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_index'];?>
</td>
				<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_top'];?>
</td>
				<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_show'];?>
</td>
				<td width="150px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['global']->value['channel'];?>
/id-<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
/</td>
				<td onClick="show_edit('index_<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
')">
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
_1"><?php echo $_smarty_tpl->tpl_vars['item']->value['art_index'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/pencil.gif" /></span>
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
_2" style="display:none;">
					<input type="text" id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_index'];?>
" style="width:30px;" onBlur="set_order('index','article',<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
,this.value)" />
					</span>
				</td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['art_top']==1){?>checked<?php }?> onClick="set_order('top','article',<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
,this.checked)" /></td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['art_show']==1){?>checked<?php }?> onClick="set_order('show','article',<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
,this.checked)" /></td>
				<td>
					<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'edit','id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
]</a>&nbsp;
					<a onClick="del('article|<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="6">
					<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable(($_smarty_tpl->tpl_vars['global']->value['channel']).('/mod-sheet'), null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['help'];?>
</span></div>
	<div class="main content">
		<?php echo $_smarty_tpl->tpl_vars['lang']->value['help_1'];?>

	</div>
</div>
<?php }} ?>