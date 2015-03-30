<?php /* Smarty version Smarty-3.1.3, created on 2015-02-03 11:14:34
         compiled from "templates\default\admin\module\service\booking_sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:426654d03d1a241de7-60812189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '017c1d25382b1b35e91496949433c9b56cb2ef43' => 
    array (
      0 => 'templates\\default\\admin\\module\\service\\booking_sheet.php',
      1 => 1390631619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '426654d03d1a241de7-60812189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'booking' => 0,
    'item' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d03d1a44d56',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d03d1a44d56')) {function content_54d03d1a44d56($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\phpwww\sinsiu_php_1_1_3\upload\smarty\plugins\modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span>产品订购列表</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="100px">用户名</td>
				<td>产品名称</td>
				<td width="80px">订购数量</td>
				<td width="150px">订购时间</td>
				<td width="120px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['booking']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['user_name']){?><a href="<?php echo url(array('channel'=>'service','mod'=>'user_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['boo_user_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
</a><?php }else{ ?>已删<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['goo_title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['boo_number'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['boo_add_time'],"%Y-%m-%d %H:%M:%S");?>
</td>
				<td>
					<a class="booking" href="<?php echo url(array('channel'=>'service','mod'=>'booking_info','id'=>$_smarty_tpl->tpl_vars['item']->value['boo_id']),$_smarty_tpl);?>
">[查看详情]</a>
					<a onclick="del('booking|<?php echo $_smarty_tpl->tpl_vars['item']->value['boo_id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="5">
					<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable(($_smarty_tpl->tpl_vars['global']->value['channel']).('/mod-booking_sheet'), null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div>
<?php }} ?>