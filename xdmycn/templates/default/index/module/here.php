{*<?php exit();?>*}
<div class="here">
	<div class="left"></div>
	<div class="title">{$channel_title}</div>
	<div class="link">
		<a class="home" href="./">{$lang.home}</a>
		{if $channel_title}<a href="{url channel=$global.channel}">{$channel_title}</a>{/if}
		{if $cat_name}<a href="{url channel=$global.channel cat=$global.cat}">{$cat_name}</a>{/if}
		{if $page_title}<a href="{url channel=$global.channel id=$global.id}">{$page_title|truncate:20}</a>{/if}
		<div class="clear"></div>
	</div>
	<div class="right"></div>
</div>
<!-- 新秀 -->