<?php /* Smarty version Smarty-3.1.3, created on 2015-02-02 21:22:35
         compiled from "templates\default\admin\module\file\pic_lists.php" */ ?>
<?php /*%%SmartyHeaderCode:3185554cf7a1b849040-67797181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8e7cc1dca41cec9619a248e5ae6fd1318a9fb96' => 
    array (
      0 => 'templates\\default\\admin\\module\\file\\pic_lists.php',
      1 => 1390631619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3185554cf7a1b849040-67797181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'list_public' => 0,
    'item' => 0,
    'host' => 0,
    'lists' => 0,
    'type' => 0,
    'list_editor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54cf7a1bae755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf7a1bae755')) {function content_54cf7a1bae755($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_img'];?>
</span></div>
	<div class="main">
		<form id="form_upl_img" method="post" enctype="multipart/form-data" action="<?php echo url(array('channel'=>'deal','dir'=>'goods'),$_smarty_tpl);?>
" target="deal">
			<input name="cmd" type="hidden" value="upload" />
			<input name="dir" type="hidden" value="images/" />
			<input name="file" type="hidden" value="" />
			<input name="file_path" type="file" onChange="do_upload('form_upl_img',0)" />
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>公共图片</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="150px">图片预览</td>
				<td>图片地址</td>
				<td width="120px">数据库相关</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_public']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><img src="images/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" height="30px" /></td>
				<td>http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['id']){?>ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php }else{ ?><span class="red">无关</span><?php }?>
				</td>
				<td>
					<a href="images/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['view'];?>
]</a>
					<?php if (!$_smarty_tpl->tpl_vars['item']->value['id']){?><a onClick="del_file('images/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a><?php }?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
<div class="space"></div>
<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
<div class="block">
	<div class="head"><span>频道图片 - <?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>图片目录</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type']->value['folder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td>images/<?php echo $_smarty_tpl->tpl_vars['type']->value['channel'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td>
					<a href="<?php echo url(array('channel'=>'file','mod'=>'pic_list','path'=>$_smarty_tpl->tpl_vars['item']->value['path_str']),$_smarty_tpl);?>
">[进入查看]</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
<div class="space"></div>
<?php } ?>
<div class="block">
	<div class="head"><span>编辑器图片</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>图片目录</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_editor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td>images/editor/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td>
					<a href="<?php echo url(array('channel'=>'file','mod'=>'pic_list','path'=>$_smarty_tpl->tpl_vars['item']->value['path_str']),$_smarty_tpl);?>
">[进入查看]</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
<iframe class="deal" name="deal"></iframe>
<?php }} ?>