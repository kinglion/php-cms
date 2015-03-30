<?php /* Smarty version Smarty-3.1.3, created on 2015-02-05 11:31:42
         compiled from "templates/default/index\module\notice.php" */ ?>
<?php /*%%SmartyHeaderCode:2103354d2e41ec9ef24-49976882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9b6e552618dd27cccb205f709ac0e316d8da36' => 
    array (
      0 => 'templates/default/index\\module\\notice.php',
      1 => 1417139587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2103354d2e41ec9ef24-49976882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'notice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d2e41ecd1bb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2e41ecd1bb')) {function content_54d2e41ecd1bb($_smarty_tpl) {?>
<div class="block" id="notice">
	<div class="head">
		<div class="left"></div>
		<div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['notice'];?>
</div>
		<div class="right"></div>
	</div>
	<div class="main">
		<?php echo $_smarty_tpl->tpl_vars['notice']->value;?>

	</div>
</div>
<!-- 新秀 -->
<?php }} ?>