{*<?php exit();?>*}
<div class="block2" id="user_center">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$lang.my_message}</div>
		<div class="right"></div>
	</div>
	<div class="main">
		<div class="mes_sheet">
			<ul>
				{foreach from=$message name=message item=item}
				<li>
					<table>
						<tr>
							<td height="30px"><b>{$item.mes_type}：</b><span>{$item.mes_title}</span>&nbsp;&nbsp;[ {$item.mes_add_time|date_format:"%Y-%m-%d %H:%M:%S"} ]</td>
						</tr>
						<tr>
							<td><div class="txt">{$item.mes_text}</div></td>
						</tr>
						{if $item.mes_reply}
						<tr>
							<td><div class="reply"><span>{$lang.reply}：</span>{$item.mes_reply}</div></td>
						</tr>
						{/if}
					</table>
				</li>
				{/foreach}
			</ul>
			{if !$message}<div class="not_found">{$lang.not_found}</div>{/if}
		</div>
		{$prefix = 'user/mod-message_sheet'}
		{include file="module/page_link.php" page=$global.page}
	</div>
</div>
<!-- 新秀 -->