{*<?php exit();?>*}
<div class="block2" id="user_center">
	<div class="head">
		<div class="left"></div>
		<div class="title">{$lang.my_booking}</div>
		<div class="right"></div>
	</div>
	<div class="main">
		<table class="sheet">
			<tr class="c">
				<td><b>{$lang.goods_name}</b></td>
				<td width="80px"><b>{$lang.quantity}</b></td>
				<td width="150px"><b>{$lang.order_time}</b></td>
				<td width="100px"><b>{$lang.operating}</b></td>
			</tr>
			{foreach from=$booking name=booking item=item}
			<tr class="c">
				<td>{$item.goo_title}</td>
				<td>{$item.boo_number}</td>
				<td>{$item.boo_add_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
				<td><a class="booking" href="{url entrance=$global.entrance channel='user' mod='booking_info' id=$item.boo_id}">[{$lang.view_details}]</a>&nbsp;</td>
			</tr>
			{/foreach}
		</table>
		{$prefix = 'user/mod-booking_sheet'}
		{include file="module/page_link.php" page=$global.page}
	</div>
</div>
<!-- 新秀 -->