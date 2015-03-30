{*<?php exit();?>*}
{foreach from=$best_goo_cat name=best_goo_cat item=cat}
<div class="block2 img_list">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$cat.cat_name}</div>
		<a class="more" href="{url channel=$cat.channel cat=$cat.cat_id}">{$lang.more}</a>
		<div class="right"></div>
	</div>
	<div class="main">
		<div class="clear"></div>
		{foreach from=$goods_list[$cat.cat_id] name=goods_list item=item}
		<div class="unit">
			<div class="img">
				<table>
					<tr>
						<td>
							<a href="{url channel=$cat.channel id=$item.goo_id}" target="_blank"><img src="{$S_ROOT}{$item.goo_x_img}" alt="{$item.goo_title}" onload="picresize(this,150,150)" /></a>
						</td>
					</tr>
				</table>
			</div>
			<div class="title">
				<a href="{url channel=$cat.channel id=$item.goo_id}" title="{$item.goo_title}" target="_blank">{$item.short_title}</a>
			</div>
		</div>
		{/foreach}
		<div class="clear"></div>
	</div>
</div>
{/foreach}
<!-- 新秀 -->
