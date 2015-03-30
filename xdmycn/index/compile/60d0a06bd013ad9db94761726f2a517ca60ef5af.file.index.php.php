<?php /* Smarty version Smarty-3.1.3, created on 2015-02-05 11:31:42
         compiled from "templates/default/index\index.php" */ ?>
<?php /*%%SmartyHeaderCode:561654d2e41e95ede3-36563482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60d0a06bd013ad9db94761726f2a517ca60ef5af' => 
    array (
      0 => 'templates/default/index\\index.php',
      1 => 1390631619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '561654d2e41e95ede3-36563482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'describe' => 0,
    'version' => 0,
    'site_title' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d2e41ea4559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2e41ea4559')) {function content_54d2e41ea4559($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['describe']->value;?>
" />
	<meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" />
	<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/index.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/index.js"></script>
	<!--[if IE 6]>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/DD_belatedPNG_0.0.8a.js"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix("*");
	</script>
	<![endif]-->
</head>
<body>
	<?php echo run(array('module'=>'header'),$_smarty_tpl);?>

	<?php echo run(array('module'=>'focus'),$_smarty_tpl);?>

	<div id="main">
		<div id="left">
			<?php echo run(array('module'=>'notice'),$_smarty_tpl);?>

			<?php echo run(array('module'=>'goods_tree','channel'=>'goods'),$_smarty_tpl);?>

			<?php echo run(array('module'=>'login'),$_smarty_tpl);?>

			<?php echo run(array('module'=>'contact'),$_smarty_tpl);?>

			<?php echo run(array('module'=>'link'),$_smarty_tpl);?>

		</div>
		<div id="right">
			<?php echo run(array('module'=>'about'),$_smarty_tpl);?>

			<?php echo run(array('module'=>'best_goods'),$_smarty_tpl);?>

			<?php echo run(array('module'=>'goods_list'),$_smarty_tpl);?>

			<?php echo run(array('module'=>'article_list'),$_smarty_tpl);?>

			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<?php echo run(array('module'=>'footer'),$_smarty_tpl);?>

	<?php echo run(array('module'=>'service'),$_smarty_tpl);?>

</body>
</html><?php }} ?>