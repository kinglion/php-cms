<?php /* Smarty version Smarty-3.1.3, created on 2015-02-05 11:31:43
         compiled from "templates/default/index\module\best_goods.php" */ ?>
<?php /*%%SmartyHeaderCode:794454d2e41f1dd1b0-83747969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '372317e13aedd62d2d8123aafad692f093336c7c' => 
    array (
      0 => 'templates/default/index\\module\\best_goods.php',
      1 => 1417138903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '794454d2e41f1dd1b0-83747969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'best_goods' => 0,
    'item' => 0,
    'S_ROOT' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d2e41f294b6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2e41f294b6')) {function content_54d2e41f294b6($_smarty_tpl) {?>
<div class="block2" id="best_goo">
	<div class="head">
		<div class="left"></div>
		<div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['best_goods'];?>
</div>
		<a class="more" href="<?php echo url(array('channel'=>'goods'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['more'];?>
</a>
		<div class="right"></div>
	</div>
	<div class="main">
		<div id="roll">
			<div id="roll_sheet" onmouseover="over_roll()" onmouseout="out_roll()">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<div class="unit" name="roll_unit">
					<div class="img">
						<table>
							<tr>
								<td>
									<a href="<?php echo url(array('channel'=>'goods','id'=>$_smarty_tpl->tpl_vars['item']->value['goo_id']),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_x_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_title'];?>
" onload="picresize(this,150,150)" /></a>
								</td>
							</tr>
						</table>
					</div>
					<div class="title">
						<a href="<?php echo url(array('channel'=>'goods','id'=>$_smarty_tpl->tpl_vars['item']->value['goo_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/roll.js"></script>
<!-- 新秀 -->
<?php }} ?>