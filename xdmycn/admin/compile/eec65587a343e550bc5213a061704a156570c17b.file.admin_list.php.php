<?php /* Smarty version Smarty-3.1.3, created on 2015-02-03 09:53:15
         compiled from "templates\default\admin\module\basic\admin_list.php" */ ?>
<?php /*%%SmartyHeaderCode:1162054d02a0bc9c790-46496178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eec65587a343e550bc5213a061704a156570c17b' => 
    array (
      0 => 'templates\\default\\admin\\module\\basic\\admin_list.php',
      1 => 1390631619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1162054d02a0bc9c790-46496178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'admin' => 0,
    'item' => 0,
    'me' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d02a0bef9fa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d02a0bef9fa')) {function content_54d02a0bef9fa($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\phpwww\sinsiu_php_1_1_3\upload\smarty\plugins\modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span>管理员帐号</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>用户名</td>
				<td width="50px">级别</td>
				<td>上次登录时间</td>
				<td>最后登录时间</td>
				<td width="170px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['adm_username'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['adm_grade'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['adm_prev_login']){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['adm_prev_login'],"%Y-%m-%d %H:%M:%S");?>
<?php }else{ ?>0<?php }?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['adm_last_login']){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['adm_last_login'],"%Y-%m-%d %H:%M:%S");?>
<?php }else{ ?>0<?php }?></td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['me']->value['adm_id']==$_smarty_tpl->tpl_vars['item']->value['adm_id']||$_smarty_tpl->tpl_vars['me']->value['adm_grade']<$_smarty_tpl->tpl_vars['item']->value['adm_grade']){?>
					<a onclick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'admin_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['adm_id']),$_smarty_tpl);?>
')">[修改密码]</a>
					<?php }else{ ?>
					<a onclick="no_power()">[修改密码]</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['me']->value['adm_grade']<$_smarty_tpl->tpl_vars['item']->value['adm_grade']){?>
					<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'admin_power','id'=>$_smarty_tpl->tpl_vars['item']->value['adm_id']),$_smarty_tpl);?>
">[权限设置]</a>
					<a onclick="del_admin('<?php echo $_smarty_tpl->tpl_vars['item']->value['adm_id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
					<?php }else{ ?>
					<a onclick="no_power()">[权限设置]</a>
					<a onclick="no_power()">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
					<?php }?>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="5">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'admin_add'),$_smarty_tpl);?>
')" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>

<script language="javascript">
	function no_power()
	{
		alert("对不起，您只能对下级帐号进行操作");
	}
	function del_admin(val)
	{
		if(confirm("您确定要删除该帐号吗？"))
		{
			ajax("post","?/deal/dir-basic/","cmd=del_admin&id=" + val,
			function(data)
			{
				if(data == 1) document.location.replace(document.location.href);
			});
		}
	}
</script>
<?php }} ?>