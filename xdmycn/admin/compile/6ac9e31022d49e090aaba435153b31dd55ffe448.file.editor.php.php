<?php /* Smarty version Smarty-3.1.3, created on 2015-02-03 10:45:23
         compiled from "templates/default/admin\module\editor.php" */ ?>
<?php /*%%SmartyHeaderCode:884754d0364320a969-76010306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ac9e31022d49e090aaba435153b31dd55ffe448' => 
    array (
      0 => 'templates/default/admin\\module\\editor.php',
      1 => 1390631619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '884754d0364320a969-76010306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'editor_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d036432358f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d036432358f')) {function content_54d036432358f($_smarty_tpl) {?>
<script type="text/javascript" charset="utf-8" src="ueditor/editor_config.js"></script>
<script type="text/javascript" charset="utf-8" src="ueditor/editor_all.js"></script>
<script id="editor" name="editor" type="text/plain"><?php echo $_smarty_tpl->tpl_vars['editor_text']->value;?>
</script>

<script type="text/javascript">
	var ue = UE.getEditor('editor');
</script>

<!-- 新秀 --><?php }} ?>