{*<?php exit();?>*}
{if $show_info != 1}
	{if $show_mod == 'register'}
		{include file="module/user/register.php"}
	{elseif $show_mod == 'user_center'}
		<div id="left">
			{include file="module/user/menu.php"}
		</div>
		<div id="right">
			{$file = 'module/user/'|cat:$global.mod|cat:'.php'}
			{include file=$file}
		</div>
		<div class="clear"></div>
	{else}
		{include file="module/user/login.php"}
	{/if}
{else}
	<div class="block2" id="info">
		<div class="head">
			<div class="left"></div>
			<div class="title">{$lang.system_info}</div>
			<div class="right"></div>
		</div>
		<div class="main">
			<div>{$info_text}</div>
			<a href="{$link_href}">{$link_text}</a>
		</div>
	</div>
	<script language="javascript">
		interval = setInterval("document.location.href = '{$link_href}'",3000);
	</script>
{/if}