<?php /* Smarty version Smarty-3.1.3, created on 2015-01-30 16:54:04
         compiled from "templates/default/admin\module\right.php" */ ?>
<?php /*%%SmartyHeaderCode:573754cb46ac215c93-28428715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b888ffdb5bdc9d42d15360846a6434e57e60cfe' => 
    array (
      0 => 'templates/default/admin\\module\\right.php',
      1 => 1417643099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '573754cb46ac215c93-28428715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_info' => 0,
    'check_power' => 0,
    'tpl_path' => 0,
    'info_text' => 0,
    'link_href' => 0,
    'link_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54cb46ac29e83',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cb46ac29e83')) {function content_54cb46ac29e83($_smarty_tpl) {?>
<div id="right">
<?php if (!$_smarty_tpl->tpl_vars['show_info']->value&&$_smarty_tpl->tpl_vars['check_power']->value){?>
	<div id="core">
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tpl_path']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
<?php }else{ ?>
	<div class="block">
		<div class="head"><span>系统信息</span></div>
		<div class="main">
			<div id="info">
				<?php if ($_smarty_tpl->tpl_vars['check_power']->value){?>
				<div class="main">
					<div class="txt"><?php echo $_smarty_tpl->tpl_vars['info_text']->value;?>
</div>
					<div class="link"><a href="<?php echo $_smarty_tpl->tpl_vars['link_href']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>
</a></div>
				</div>
				<script language="javascript">
					interval = setInterval("document.location.href = '<?php echo $_smarty_tpl->tpl_vars['link_href']->value;?>
'",3000);
				</script>
				<?php }else{ ?>
				<div class="main">
					<div class="txt">对不起，您的权限不足，无法操作当前页面</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
<?php }?>
</div><?php }} ?>