{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.add_recruit}</span></div>
	<div class="main">
		<form id="form_add_art" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_or_edit_article" />
			<table class="table">
				<tr>
					<td width="100px">{$lang.article_title}：</td>
					<td><input name="art_title" type="text" class="text" maxlength="200" value="" /></td>
				</tr>
				<tr>
					<td>{$lang.article_text}：</td>
					<td>
						<div class="editor">
							{include file='module/editor.php'}
						</div>
					</td>
				</tr>
				<tr>
					<td>{$lang.keywords}：</td>
					<td><input class="text" name="art_keywords" type="text" maxlength="200" value="{$site_keywords}" />
					</td>
				</tr>
				<tr>
					<td>{$lang.description}：</td>
					<td><input class="text" name="art_description" type="text" value="{$site_description}" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="{$lang.submit}" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
