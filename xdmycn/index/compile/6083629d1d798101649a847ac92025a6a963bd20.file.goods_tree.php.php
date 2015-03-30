<?php /* Smarty version Smarty-3.1.3, created on 2015-02-05 11:31:42
         compiled from "templates/default/index\module\goods_tree.php" */ ?>
<?php /*%%SmartyHeaderCode:2132054d2e41ed1bf48-79299183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6083629d1d798101649a847ac92025a6a963bd20' => 
    array (
      0 => 'templates/default/index\\module\\goods_tree.php',
      1 => 1417139104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132054d2e41ed1bf48-79299183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'goo_tree' => 0,
    'item' => 0,
    'grade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d2e41eda896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2e41eda896')) {function content_54d2e41eda896($_smarty_tpl) {?>
<div class="block tree">
	<div class="head">
		<div class="left"></div>
		<div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_tree'];?>
</div>
		<div class="right"></div>
	</div>
	<div class="main">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goo_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['grade']==1){?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(1, null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['item']->value['grade']==2){?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(2, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(3, null, 0);?><?php }?>
		<div class="cat<?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
"><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['item']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></div>
		<?php } ?>
	</div>
</div>
<!-- 新秀 -->
<?php }} ?>