{*<?php exit();?>*}
{if $show_all_art != 1}
	{foreach from=$best_art_cat name=best_art_cat item=cat}
		{if $smarty.foreach.best_art_cat.index % 2 == 0}<div>{/if}
		<div class="block2 list art_list_{$smarty.foreach.best_art_cat.index % 2}">
			<div class="head">
				<div class="left"></div>
				<div class="title">{$cat.cat_name}</div>
				<a class="more" href="{url channel=$cat.channel cat=$cat.cat_id}">{$lang.more}</a>
				<div class="right"></div>
			</div>
			<ul class="main">
				{foreach from=$art_list[$cat.cat_id] name=art_list item=item}
				<li>
					<a href="{url channel=$cat.channel id=$item.art_id}" title="{$item.art_title}" target="_blank">{$item.short_title}</a>
					<span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span>
					<div class="clear"></div>
				</li>
				{/foreach}
			</ul>
		</div>
		{if $smarty.foreach.best_art_cat.index % 2 == 1 || $smarty.foreach.best_art_cat.last}<div class="clear"></div></div>{/if}
	{/foreach}
{else}
	<div class="block2 list art_list_all">
		<div class="head">
			<div class="left"></div>
			<div class="title">{$lang.article}</div>
			<a class="more" href="{url channel='article'}">{$lang.more}</a>
			<div class="right"></div>
		</div>
		<ul class="main">
			{foreach from=$art_list name=art_list item=item}
			<li>
				<a href="{url channel='article' id=$item.art_id}" title="{$item.art_title}" target="_blank">{$item.short_title}</a>
				<span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span>
				<div class="clear"></div>
			</li>
			{/foreach}
		</ul>
	</div>
{/if}
<!-- 新秀 -->
