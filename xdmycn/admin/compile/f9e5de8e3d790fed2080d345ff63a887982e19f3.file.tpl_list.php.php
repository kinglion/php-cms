<?php /* Smarty version Smarty-3.1.3, created on 2015-02-02 21:26:08
         compiled from "templates\default\admin\module\file\tpl_list.php" */ ?>
<?php /*%%SmartyHeaderCode:1873454cf7af05f27a5-14370913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9e5de8e3d790fed2080d345ff63a887982e19f3' => 
    array (
      0 => 'templates\\default\\admin\\module\\file\\tpl_list.php',
      1 => 1390631619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1873454cf7af05f27a5-14370913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'tpl' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'S_ROOT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54cf7af06e63a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf7af06e63a')) {function content_54cf7af06e63a($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>选择模板</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>模板预览</td>
				<td width="100px">模板名称</td>
				<td>模板说明</td>
				<td width="150px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tpl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td class="pic2"><div><img src="templates/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
/images/this.jpg" onload="picresize(this,160,160)" /></div></td>
				<td><a href="templates/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
/images/this.jpg"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
				<td class="content" style="text-align:left;">
					<?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>

					<a href="templates/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
/readme.txt">[阅读原文]</a>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['S_TPL_PATH']->value!=((($_smarty_tpl->tpl_vars['S_ROOT']->value).('templates/')).($_smarty_tpl->tpl_vars['item']->value['name'])).('/')){?>
					<a onClick="select_tpl('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')">[使用该模板]</a>
					<?php }else{ ?>
					<span class="red">[当前模板]</span>
					<?php }?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>

<script language="javascript">
	function select_tpl(val)
	{
		if(confirm("您确定使用该模板吗？"))
		{
			ajax("post","?/deal/dir-file/","cmd=select_tpl&tpl=" + val,
			function(data)
			{
				if(data == 1) document.location.replace(document.location.href);
			});
		}
	}
</script>
<?php }} ?>