{*<?php exit();?>*}
<div class="dow_sheet">
	<ul>
		{foreach from=$download name=download item=item}
		<li>
			<table>
				<tr>
					<td class="title"><a href="{if $item.att.file_path.value|truncate:7:'':true != 'http://'}{$S_ROOT}{/if}{$item.att.file_path.value}">{$item.art_title}</a></td>
					<td class="time">{$item.art_add_time|date_format:"%Y-%m-%d"}</td>
				</tr>
				<tr>
					<td colspan="2" class="text">{$item.art_text}</td>
				</tr>
			</table>
		</li>
		{/foreach}
	</ul>
	{if !$download}<div class="not_found">{$lang.not_found}</div>{/if}
</div>
{$prefix = $global.channel}
{include file="module/page_link.php" page=$global.page}
<!-- 新秀 -->