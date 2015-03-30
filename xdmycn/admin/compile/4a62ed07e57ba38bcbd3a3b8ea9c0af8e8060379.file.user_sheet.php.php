<?php /* Smarty version Smarty-3.1.3, created on 2015-02-02 21:26:04
         compiled from "templates\default\admin\module\service\user_sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:2551454cf7aece9d349-64352686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a62ed07e57ba38bcbd3a3b8ea9c0af8e8060379' => 
    array (
      0 => 'templates\\default\\admin\\module\\service\\user_sheet.php',
      1 => 1390631619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2551454cf7aece9d349-64352686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'users' => 0,
    'item' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54cf7aed04eb4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf7aed04eb4')) {function content_54cf7aed04eb4($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>用户管理</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>用户名</td>
				<td>真实姓名</td>
				<td>E-mail</td>
				<td>QQ</td>
				<td>电话</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['use_username'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['use_real_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['use_email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['use_qq'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['use_tel'];?>
</td>
				<td>
					<a href="<?php echo url(array('channel'=>'service','mod'=>'user_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['use_id']),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
]</a>
					<a onClick="del_user('<?php echo $_smarty_tpl->tpl_vars['item']->value['use_id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="7">
					<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable(($_smarty_tpl->tpl_vars['global']->value['channel']).('/mod-user_sheet'), null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div>

<script language="javascript">
	function del_user(val)
	{
		if(confirm("您确定要删除该帐号吗？"))
		{
			ajax("post","?/deal/dir-service/","cmd=del_user&id=" + val,
			function(data)
			{
				if(data == 1) document.location.replace(document.location.href);
			});
		}
	}
</script>
<?php }} ?>