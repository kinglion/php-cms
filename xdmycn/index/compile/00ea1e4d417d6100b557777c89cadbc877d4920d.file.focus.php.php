<?php /* Smarty version Smarty-3.1.3, created on 2015-02-05 11:31:42
         compiled from "templates/default/index\module\focus.php" */ ?>
<?php /*%%SmartyHeaderCode:1882654d2e41ec02b05-38624138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00ea1e4d417d6100b557777c89cadbc877d4920d' => 
    array (
      0 => 'templates/default/index\\module\\focus.php',
      1 => 1390631619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1882654d2e41ec02b05-38624138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'focus' => 0,
    'S_ROOT' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d2e41ec8782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2e41ec8782')) {function content_54d2e41ec8782($_smarty_tpl) {?>
<div id="focus">
	<?php if ($_smarty_tpl->tpl_vars['focus']->value){?>
	<div id="focus_bg"></div>
	<div id="focus_show"></div>
	<div id="focus_img">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['focus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['focus']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['focus']['iteration']++;
?>
		<div name="focus_img" id="focus_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['focus']['iteration'];?>
"><?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
|<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_url'];?>
|<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_title'];?>
</div>
		<?php } ?>
	</div>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/focus.js"></script>
	<?php }?>
</div>
<!-- 新秀 -->
<?php }} ?>