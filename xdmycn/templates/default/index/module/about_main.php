{*<?php exit();?>*}
<div class="here">
		<div class="left"></div>
		<div class="title">{if $page_title}{$page_title}{else}{$channel_title}{/if}</div>
		<div class="link">
			<a class="home" href="./">{$lang.home}</a>
			{if $channel_title}<a href="{url channel=$global.channel}">{$channel_title}</a>{/if}
			{if $page_title}<a href="{url channel=$global.channel id=$global.id}">{$page_title}</a>{/if}
			<div class="clear"></div>
		</div>
		<div class="right"></div>
</div>
<div id="about_main">
	{$about}
</div>
<!-- 新秀 -->
