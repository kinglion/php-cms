<?php /* Smarty version Smarty-3.1.3, created on 2015-02-05 11:31:43
         compiled from "templates/default/index\module\about.php" */ ?>
<?php /*%%SmartyHeaderCode:2180754d2e41f144c11-23742295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d6c489a0dabc8dfa11894308611ca7d04fa6753' => 
    array (
      0 => 'templates/default/index\\module\\about.php',
      1 => 1417138247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2180754d2e41f144c11-23742295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'about' => 0,
    'lang' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d2e41f1b60a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2e41f1b60a')) {function content_54d2e41f1b60a($_smarty_tpl) {?>
<div class="block2" id="about">
	<div class="head">
		<div class="left"></div>
		<div class="title"><?php if ($_smarty_tpl->tpl_vars['about']->value){?><?php echo $_smarty_tpl->tpl_vars['about']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['about_us'];?>
<?php }?></div>
		<a class="more" href="<?php echo url(array('channel'=>'about'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['more'];?>
</a>
		<div class="right"></div>
	</div>
	<div class="main">
		<div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/about.jpg" /></div>
		<?php if ($_smarty_tpl->tpl_vars['about']->value){?>
			<?php echo $_smarty_tpl->tpl_vars['about']->value['text'];?>

			<a class="more" href="<?php echo url(array('channel'=>'about'),$_smarty_tpl);?>
">【<?php echo $_smarty_tpl->tpl_vars['lang']->value['detailed'];?>
】</a>
		<?php }?>
	</div>
</div>
<!-- 新秀 -->
<?php }} ?>