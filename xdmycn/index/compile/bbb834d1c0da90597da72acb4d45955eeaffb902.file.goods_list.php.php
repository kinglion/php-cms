<?php /* Smarty version Smarty-3.1.3, created on 2015-02-05 11:31:43
         compiled from "templates/default/index\module\goods_list.php" */ ?>
<?php /*%%SmartyHeaderCode:2985654d2e41f2a83e7-58342144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb834d1c0da90597da72acb4d45955eeaffb902' => 
    array (
      0 => 'templates/default/index\\module\\goods_list.php',
      1 => 1417565435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2985654d2e41f2a83e7-58342144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_goo_cat' => 0,
    'cat' => 0,
    'lang' => 0,
    'goods_list' => 0,
    'item' => 0,
    'S_ROOT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d2e41f37749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2e41f37749')) {function content_54d2e41f37749($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_goo_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
<div class="block2 img_list">
	<div class="head">
		<div class="left"></div>
		<div class="title"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</div>
		<a class="more" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['cat']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['more'];?>
</a>
		<div class="right"></div>
	</div>
	<div class="main">
		<div class="clear"></div>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_list']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<div class="unit">
			<div class="img">
				<table>
					<tr>
						<td>
							<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['goo_id']),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_x_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_title'];?>
" onload="picresize(this,150,150)" /></a>
						</td>
					</tr>
				</table>
			</div>
			<div class="title">
				<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['goo_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a>
			</div>
		</div>
		<?php } ?>
		<div class="clear"></div>
	</div>
</div>
<?php } ?>
<!-- 新秀 -->
<?php }} ?>