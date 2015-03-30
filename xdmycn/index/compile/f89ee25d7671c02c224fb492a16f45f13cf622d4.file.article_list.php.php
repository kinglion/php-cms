<?php /* Smarty version Smarty-3.1.3, created on 2015-02-05 11:31:43
         compiled from "templates/default/index\module\article_list.php" */ ?>
<?php /*%%SmartyHeaderCode:1917054d2e41f38eb91-79291095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f89ee25d7671c02c224fb492a16f45f13cf622d4' => 
    array (
      0 => 'templates/default/index\\module\\article_list.php',
      1 => 1417138733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1917054d2e41f38eb91-79291095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_all_art' => 0,
    'best_art_cat' => 0,
    'cat' => 0,
    'lang' => 0,
    'art_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d2e41f4fdef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2e41f4fdef')) {function content_54d2e41f4fdef($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\phpwww\xdmycn\smarty\plugins\modifier.date_format.php';
?>
<?php if ($_smarty_tpl->tpl_vars['show_all_art']->value!=1){?>
	<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_art_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['last'] = $_smarty_tpl->tpl_vars['cat']->last;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']%2==0){?><div><?php }?>
		<div class="block2 list art_list_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']%2;?>
">
			<div class="head">
				<div class="left"></div>
				<div class="title"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</div>
				<a class="more" href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['cat']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['more'];?>
</a>
				<div class="right"></div>
			</div>
			<ul class="main">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_list']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<li>
					<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['cat']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a>
					<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['art_add_time'],"%Y-%m-%d");?>
</span>
					<div class="clear"></div>
				</li>
				<?php } ?>
			</ul>
		</div>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']%2==1||$_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['last']){?><div class="clear"></div></div><?php }?>
	<?php } ?>
<?php }else{ ?>
	<div class="block2 list art_list_all">
		<div class="head">
			<div class="left"></div>
			<div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['article'];?>
</div>
			<a class="more" href="<?php echo url(array('channel'=>'article'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['more'];?>
</a>
			<div class="right"></div>
		</div>
		<ul class="main">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<li>
				<a href="<?php echo url(array('channel'=>'article','id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a>
				<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['art_add_time'],"%Y-%m-%d");?>
</span>
				<div class="clear"></div>
			</li>
			<?php } ?>
		</ul>
	</div>
<?php }?>
<!-- 新秀 -->
<?php }} ?>