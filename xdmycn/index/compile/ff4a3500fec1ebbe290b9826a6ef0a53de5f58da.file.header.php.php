<?php /* Smarty version Smarty-3.1.3, created on 2015-02-05 11:31:42
         compiled from "templates/default/index\module\header.php" */ ?>
<?php /*%%SmartyHeaderCode:1075254d2e41eaba8b8-46827726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4a3500fec1ebbe290b9826a6ef0a53de5f58da' => 
    array (
      0 => 'templates/default/index\\module\\header.php',
      1 => 1422928464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1075254d2e41eaba8b8-46827726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'S_ROOT' => 0,
    'S_MULTILINGUAL' => 0,
    'lang_pack' => 0,
    'item' => 0,
    'global' => 0,
    'lang' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d2e41ebdb9f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2e41ebdb9f')) {function content_54d2e41ebdb9f($_smarty_tpl) {?>
<div id="header">
	<div class="logo"><a href="./"><img src="<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
images/logo.gif" /></a></div>
	<?php if ($_smarty_tpl->tpl_vars['S_MULTILINGUAL']->value){?>
	<div class="lang">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lang_pack']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lang_pack']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
		<a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['item']->value['index_entrance'],'channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['foreign_name'];?>
</a>
		<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['lang_pack']['last']){?>&nbsp;&nbsp;|&nbsp;&nbsp; <?php }?>
		<?php } ?>
	</div>
	<?php }?>
	<div class="search" <?php if ($_smarty_tpl->tpl_vars['S_MULTILINGUAL']->value){?>style="top:45px;"<?php }?>>
		<form id="form_search" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'search'),$_smarty_tpl);?>
">
			<input class="text" name="key" type="text" maxlength="30" onkeydown="if(event.keyCode == 13)do_search();" />
			<input class="bt" type="button" onclick="do_search()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
" />
		</form>
	</div>
	<div id="nav">
		<div class="left"></div>
		<ul>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['nav']['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
			<li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['nav']['first']){?>class="first"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['target']==1){?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['men_name'];?>
</a></li>
			<?php } ?>
			<div class="clear"></div>
		</ul>
		<div class="right"></div>
	</div>
</div>
<!-- 新秀 -->
<?php }} ?>