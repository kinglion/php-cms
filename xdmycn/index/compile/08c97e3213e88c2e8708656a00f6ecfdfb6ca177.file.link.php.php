<?php /* Smarty version Smarty-3.1.3, created on 2015-02-05 11:31:43
         compiled from "templates/default/index\module\link.php" */ ?>
<?php /*%%SmartyHeaderCode:210954d2e41f042ed6-74876716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08c97e3213e88c2e8708656a00f6ecfdfb6ca177' => 
    array (
      0 => 'templates/default/index\\module\\link.php',
      1 => 1417139517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210954d2e41f042ed6-74876716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'img_link' => 0,
    'item' => 0,
    'word_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d2e41f0e317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2e41f0e317')) {function content_54d2e41f0e317($_smarty_tpl) {?>
<div class="block" id="link">
	<div class="head">
		<div class="left"></div>
		<div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['link'];?>
</div>
		<div class="right"></div>
	</div>
	<div class="main">
	<?php if ($_smarty_tpl->tpl_vars['img_link']->value){?>
		<div class="img">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['img_link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_title'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_img'];?>
" /></a>
		<?php } ?>
		<div class="clear"></div>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['word_link']->value){?>
		<div class="word">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['word_link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['lin_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['lin_word'];?>
</a>
		<?php } ?>
		</div>
	<?php }?>
	</div>
</div>
<!-- 新秀 -->
<?php }} ?>