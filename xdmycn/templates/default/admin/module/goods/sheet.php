{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.goods_sheet}</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>{$lang.images}</td>
				<td>{$lang.title}</td>
				<td width="45px">{$lang.set_index}</td>
				<td width="40px">{$lang.set_best}</td>
				<td width="40px">{$lang.set_top}</td>
				<td width="40px">{$lang.set_show}</td>
				<td width="150px">{$lang.operate}</td>
			</tr>
			{foreach from=$goods name=goods item=item}
			<tr>
				<td class="pic"><div><img src="{$item.goo_x_img}" onload="picresize(this,50,50)" /></div></td>
				<td>{$item.goo_title}</td>
				<td onClick="show_edit('index_{$item.goo_id}')">
					<span id="index_{$item.goo_id}_1">{$item.goo_index}<img src="{$S_TPL_PATH}images/pencil.gif" /></span>
					<span id="index_{$item.goo_id}_2" style="display:none;">
						<input type="text" id="index_{$item.goo_id}" value="{$item.goo_index}" style="width:30px;" onBlur="set_order('index','goods',{$item.goo_id},this.value)" />
					</span>
				</td>
				<td><input type="checkbox" {if $item.goo_best == 1}checked{/if} onClick="set_order('best','goods',{$item.goo_id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.goo_top == 1}checked{/if} onClick="set_order('top','goods',{$item.goo_id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.goo_show == 1}checked{/if} onClick="set_order('show','goods',{$item.goo_id},this.checked)" /></td>
				<td>
					<a href="{$S_ROOT}{url entrance=$index_entrance channel=$global.channel id=$item.goo_id}" target="_blank">[{$lang.view}]</a>&nbsp;
					<a href="{url channel=$global.channel mod='edit' id=$item.goo_id}">[{$lang.edit}]</a>&nbsp;
					<a onClick="del_goods('{$item.goo_id}')">[{$lang.delete}]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="7">
				{include file="module/page_link.php" page=$global.page}
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>{$lang.goods_search}</span></div>
	<div class="main">
		<form id="form_search" method="post" action="{url channel=$global.channel mod='sheet'}">
			<table class="table">
				<tr>
					<td align="right" width="150px">
						<select name="field">
							<option value="goo_title">{$lang.goods_name}</option>
							<option value="goo_sn">{$lang.goods_sn}</option>
							<option value="goo_text">{$lang.goods_text}</option>
						</select>
					</td>
					<td>
						<input name="key" type="text" />
						<input class="button" type="button" value="{$lang.goods_search}" onclick="do_search()"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<script language="javascript">
	var lang_if_del_goods = "{$lang.if_del_goods}";
</script>
{literal}
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
{/literal}