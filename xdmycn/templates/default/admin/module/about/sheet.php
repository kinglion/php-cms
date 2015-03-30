{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.about_sheet}</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>{$lang.title}</td>
				<td width="150px">{$lang.page_link}</td>
				<td width="45px">{$lang.set_index}</td>
				<td width="40px">{$lang.set_top}</td>
				<td width="40px">{$lang.set_show}</td>
				<td width="150px">{$lang.operate}</td>
			</tr>
			{foreach from=$article name=article item=item}
			<tr>
				<td>{$item.art_title}</td>
				<td>{$global.channel}/id-{$item.art_id}/</td>
				<td onClick="show_edit('index_{$item.art_id}')">
					<span id="index_{$item.art_id}_1">{$item.art_index}<img src="{$S_TPL_PATH}images/pencil.gif" /></span>
					<span id="index_{$item.art_id}_2" style="display:none;">
					<input type="text" id="index_{$item.art_id}" value="{$item.art_index}" style="width:30px;" onBlur="set_order('index','article',{$item.art_id},this.value)" />
					</span>
				</td>
				<td><input type="checkbox" {if $item.art_top == 1}checked{/if} onClick="set_order('top','article',{$item.art_id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.art_show == 1}checked{/if} onClick="set_order('show','article',{$item.art_id},this.checked)" /></td>
				<td>
					<a href="{url channel=$global.channel mod='edit' id=$item.art_id}">[{$lang.edit}]</a>&nbsp;
					<a onClick="del('article|{$item.art_id}')">[{$lang.delete}]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="6">
					{$prefix = $global.channel|cat:'/mod-sheet'}
					{include file="module/page_link.php" page=$global.page}
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>{$lang.help}</span></div>
	<div class="main content">
		{$lang.help_1}
	</div>
</div>
