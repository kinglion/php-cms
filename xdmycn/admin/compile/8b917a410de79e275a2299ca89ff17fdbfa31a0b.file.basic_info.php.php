<?php /* Smarty version Smarty-3.1.3, created on 2015-01-30 16:54:04
         compiled from "templates\default\admin\module\basic\basic_info.php" */ ?>
<?php /*%%SmartyHeaderCode:1466154cb46ac2a6534-61022764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b917a410de79e275a2299ca89ff17fdbfa31a0b' => 
    array (
      0 => 'templates\\default\\admin\\module\\basic\\basic_info.php',
      1 => 1390631619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1466154cb46ac2a6534-61022764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'version' => 0,
    'root_dir' => 0,
    'now' => 0,
    'user_ip' => 0,
    'http_user_agent' => 0,
    'server_name' => 0,
    'server_addr' => 0,
    'server_port' => 0,
    'server_software' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54cb46ac3a43f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cb46ac3a43f')) {function content_54cb46ac3a43f($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>基本信息</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td>当前版本：</td>
				<td><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</td>
				<td>最新版本：</td>
				<td width="50%"><div id="ver"><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</div></td>
			</tr>
			<tr>
				<td>网站目录：</td>
				<td><?php echo $_smarty_tpl->tpl_vars['root_dir']->value;?>
</td>
				<td>服务器时间：</td>
				<td><?php echo $_smarty_tpl->tpl_vars['now']->value;?>
</td>
			</tr>
			<tr>
				<td>用户IP：</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user_ip']->value;?>
</td>
				<td>浏览器类型：</td>
				<td><?php echo $_smarty_tpl->tpl_vars['http_user_agent']->value;?>
</td>
			</tr>
			<tr>
				<td>服务器名：</td>
				<td><?php echo $_smarty_tpl->tpl_vars['server_name']->value;?>
</td>
				<td>服务器IP：</td>
				<td><?php echo $_smarty_tpl->tpl_vars['server_addr']->value;?>
</td>
			</tr>
			<tr>
				<td>服务器端口：</td>
				<td><?php echo $_smarty_tpl->tpl_vars['server_port']->value;?>
</td>
				<td>服务器版本：</td>
				<td><?php echo $_smarty_tpl->tpl_vars['server_software']->value;?>
</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>使用帮助</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td><a href="http://www.sinsiu.com/" target="_blank">官方网站</a></td>
				<td><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'admin_list'),$_smarty_tpl);?>
">修改密码</a></td>
				<td><a href="<?php echo url(array('channel'=>'service','mod'=>'message_sheet'),$_smarty_tpl);?>
">留言管理</a></td>
				<td><a href="<?php echo url(array('channel'=>'file','mod'=>'pic_lists'),$_smarty_tpl);?>
">图片管理</a></td>
			</tr>
		</table>
	</div>
</div>

<script language="javascript">
	function get_version()
	{
		ajax("post","?/deal/","cmd=get_version",
		function(data)
		{
			if(data.substr(0,9) == "njb_send:")
			{
				document.getElementById("ver").innerHTML = data.substr(9);
			}
		});
	}
	get_version();
</script>
<?php }} ?>