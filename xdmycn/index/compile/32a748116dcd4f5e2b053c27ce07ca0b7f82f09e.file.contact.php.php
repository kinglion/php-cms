<?php /* Smarty version Smarty-3.1.3, created on 2015-02-05 11:31:42
         compiled from "templates/default/index\module\contact.php" */ ?>
<?php /*%%SmartyHeaderCode:1617754d2e41ef1f9b4-57089276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32a748116dcd4f5e2b053c27ce07ca0b7f82f09e' => 
    array (
      0 => 'templates/default/index\\module\\contact.php',
      1 => 1417138993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1617754d2e41ef1f9b4-57089276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'contact' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d2e41f02794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2e41f02794')) {function content_54d2e41f02794($_smarty_tpl) {?>
<div class="block" id="contact">
	<div class="head">
		<div class="left"></div>
		<div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact'];?>
</div>
		<div class="right"></div>
	</div>
	<div class="main">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<span><?php echo $_smarty_tpl->tpl_vars['item']->value['word'];?>
：</span><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
<br />
		<?php } ?>
	</div>
</div>
<!-- 新秀 --><?php }} ?>