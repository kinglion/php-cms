<?php /* Smarty version Smarty-3.1.3, created on 2015-02-02 21:25:55
         compiled from "templates\default\admin\module\goods\sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:420054cf7ae3180e38-79789219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58de5caca7fc774a6fda41b777fafc66909e0d6b' => 
    array (
      0 => 'templates\\default\\admin\\module\\goods\\sheet.php',
      1 => 1390631619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '420054cf7ae3180e38-79789219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'goods' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'S_ROOT' => 0,
    'index_entrance' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54cf7ae33e243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf7ae33e243')) {function content_54cf7ae33e243($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_sheet'];?>
</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['images'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</td>
				<td width="45px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_index'];?>
</td>
				<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_best'];?>
</td>
				<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_top'];?>
</td>
				<td width="40px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['set_show'];?>
</td>
				<td width="150px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td class="pic"><div><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_x_img'];?>
" onload="picresize(this,50,50)" /></div></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['goo_title'];?>
</td>
				<td onClick="show_edit('index_<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_id'];?>
')">
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_id'];?>
_1"><?php echo $_smarty_tpl->tpl_vars['item']->value['goo_index'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/pencil.gif" /></span>
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_id'];?>
_2" style="display:none;">
						<input type="text" id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_index'];?>
" style="width:30px;" onBlur="set_order('index','goods',<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_id'];?>
,this.value)" />
					</span>
				</td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['goo_best']==1){?>checked<?php }?> onClick="set_order('best','goods',<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_id'];?>
,this.checked)" /></td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['goo_top']==1){?>checked<?php }?> onClick="set_order('top','goods',<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_id'];?>
,this.checked)" /></td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['goo_show']==1){?>checked<?php }?> onClick="set_order('show','goods',<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_id'];?>
,this.checked)" /></td>
				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['index_entrance']->value,'channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['goo_id']),$_smarty_tpl);?>
" target="_blank">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['view'];?>
]</a>&nbsp;
					<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'edit','id'=>$_smarty_tpl->tpl_vars['item']->value['goo_id']),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
]</a>&nbsp;
					<a onClick="del_goods('<?php echo $_smarty_tpl->tpl_vars['item']->value['goo_id'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="7">
				<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_search'];?>
</span></div>
	<div class="main">
		<form id="form_search" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'sheet'),$_smarty_tpl);?>
">
			<table class="table">
				<tr>
					<td align="right" width="150px">
						<select name="field">
							<option value="goo_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_name'];?>
</option>
							<option value="goo_sn"><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_sn'];?>
</option>
							<option value="goo_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_text'];?>
</option>
						</select>
					</td>
					<td>
						<input name="key" type="text" />
						<input class="button" type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['goods_search'];?>
" onclick="do_search()"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<script language="javascript">
	var lang_if_del_goods = "<?php echo $_smarty_tpl->tpl_vars['lang']->value['if_del_goods'];?>
";
</script>

<script language="javascript">
	function do_search()
	{
		var obj = document.getElementById("form_search");
		site = obj.action.lastIndexOf("/");
		str = obj.action.substr(site,obj.action.length - site);
		obj.action = obj.action.substr(0,site) + '/field-' + obj.field.value + '/key-' + obj.key.value + str;
		obj.submit();
	}
	function del_goods(val)
	{
		if(confirm(lang_if_del_goods))
		{
			ajax("post","?/deal/dir-goods/","cmd=del_goods&id=" + val,
			function(data)
			{
				if(data == 1) document.location.replace(document.location.href);
			});
		}
	}
</script>
<?php }} ?>