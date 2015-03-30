{*<?php exit();?>*}
<div id="header">
	<div class="logo"><a href="./"><img src="{$S_ROOT}images/logo.gif" /></a></div>
	{if $S_MULTILINGUAL}
	<div class="lang">
		{foreach from=$lang_pack name=lang_pack item=item}
		<a href="{url entrance=$item.index_entrance channel=$global.channel}">{$item.foreign_name}</a>
		{if !$smarty.foreach.lang_pack.last}&nbsp;&nbsp;|&nbsp;&nbsp; {/if}
		{/foreach}
	</div>
	{/if}
	<div class="search" {if $S_MULTILINGUAL}style="top:45px;"{/if}>
		<form id="form_search" method="post" action="{url entrance=$global.entrance channel='search'}">
			<input class="text" name="key" type="text" maxlength="30" onkeydown="if(event.keyCode == 13)do_search();" />
			<input class="bt" type="button" onclick="do_search()" value="{$lang.search}" />
		</form>
	</div>
	<div id="nav">
		<div class="left"></div>
		<ul>
			{foreach from=$nav name=nav item=item}
			<li {if $smarty.foreach.nav.first}class="first"{/if}><a href="{$item.men_url}" {if $item.target == 1}target="_blank"{/if}>{$item.men_name}</a></li>
			{/foreach}
			<div class="clear"></div>
		</ul>
		<div class="right"></div>
	</div>
</div>
<!-- 新秀 -->
