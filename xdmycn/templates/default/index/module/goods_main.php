{*<?php exit();?>*}
{if $show_sheet == 1}
	<div class="img_sheet">
		{foreach from=$goods name=goods item=item}
		<div class="unit">
			<div class="img">
				<table>
					<tr>
						<td>
							<a href="{url channel=$global.channel id=$item.goo_id}" target="_blank"><img src="{$S_ROOT}{$item.goo_x_img}" alt="{$item.goo_title}" onload="picresize(this,150,150)" /></a>
						</td>
					</tr>
				</table>
			</div>
			<div class="title">
				<a href="{url channel=$global.channel id=$item.goo_id}" title="{$item.goo_title}" target="_blank">{$item.short_title}</a>
			</div>
		</div>
		{/foreach}
		{if !$goods}<div class="not_found">{$lang.not_found}</div>{/if}
		<div class="clear"></div>
	</div>
	{if $global.cat}{$prefix = $global.channel|cat:'/cat-'|cat:$global.cat}{else}{$prefix = $global.channel}{/if}
	{include file="module/page_link.php" page=$global.page}
{else}
	<div id="picture">
	<div class="img">
		<table>
			<tr>
				<td>
					<img src="{$S_ROOT}{$goods.goo_img}" alt="{$goods.goo_title}" />
					{foreach from=$goods.more_img name=more_img item=item}
					<div class="space"></div>
					<img src="{$S_ROOT}{$item}" alt="{$goods.goo_title}" />
					{/foreach}
				</td>
			</tr>
		</table>
	</div>
	<div class="head">{$lang.goods_attribute}</div>
	<div class="attribute">
		<table>
			<tr>
				<td width="80px"><span>{$lang.goods_name}：</span></td>
				<td>{$goods.goo_title}<a href="{url entrance=$global.entrance channel='user' mod='add_booking' goods_id=$goods.goo_id}">【{$lang.order_now}】</a></td>
			</tr>
			{if $goods.goo_sn != ''}
				<tr>
				<td><span>{$lang.goods_sn}：</span></td>
				<td>{$goods.goo_sn}</td>
			</tr>
			{/if}
			{if $goods.goo_price != ''}
			<tr>
				<td><span>{$lang.goods_price}：</span></td>
				<td>{$goods.goo_price}</td>
			</tr>
			{/if}
			{foreach from=$goods.att name=att item=item}
			{if $item.value != ''}
			<tr>
				<td><span>{$item.name}：</span></td>
				<td>{$item.value}</td>
			</tr>
			{/if}
			{/foreach}
		</table>
	</div>
	<div class="head">{$lang.goods_text}</div>
	<div class="txt">{$goods.goo_text}</div>
	<div class="share">{$share_code}</div>
	{$prefix = $global.channel}
	{include file="module/prev_next.php" id=$global.id}
	</div>
{/if}
<!-- 新秀 -->
