{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>{$lang.edit_goods}</span></div>
	<div class="main">
		<form id="form_edit_goods" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_or_edit_goods" />
			<input name="goo_id" type="hidden" value="{$global.id}" />
			<table class="table">
				<tr>
					<td>{$lang.goods_name}：</td>
					<td><input name="goo_title" type="text" class="text" maxlength="200" value="{$goods.goo_title}" /></td>
				</tr>
				<tr>
					<td>{$lang.goods_sn}：</td>
					<td><input name="goo_sn" type="text" class="text" maxlength="200" value="{$goods.goo_sn}" /></td>
				</tr>
				<tr>
					<td>{$lang.goods_cat}：</td>
					<td>
						<select name="goo_cat_id">
							<option value="0">{$lang.please_select}</option>
							{foreach from=$cat_list name=cat_list item=item}
							<option value="{$item.cat_id}" {if $item.cat_id == $goods.goo_cat_id}selected="selected"{/if}>{section name=loop loop=$item.grade - 1}&nbsp;{/section}{$item.cat_name}</option>
							{/foreach}
						</select>
					</td>
				</tr>
				{$upl_index = 1}
				<tr>
					<td>{$lang.goods_img}：</td>
					<td>
						<span id="show_pic_{$upl_index}"><img src="{$goods.goo_x_img}" height="100px" /></span>
						<input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','images/{$global.channel}/{$upl_date}/','show_pic_{$upl_index}','pic_path_{$upl_index}',1)" value="{$lang.upload_img}" />
						<input name="pic_path" id="pic_path_{$upl_index}" type="hidden" maxlength="250" value="{$goods.goo_img}" />
					</td>
				</tr>
				{$upl_index = 2}
				<tr>
					<td>{$lang.subsidiary_img}：</td>
					<td>
						<input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','images/{$global.channel}/{$upl_date}/','','more_img',0)" value="{$lang.upload_img}" />&nbsp;&nbsp;此处可以上传多张图片
						<div style="padding:5px 0 0 0;"><input name="more_img" id="more_img" type="text" class="text" value="{$goods.goo_more_img}" /></div>
					</td>
				</tr>
				<tr>
					<td>{$lang.goods_price}：</td>
					<td><input name="goo_price" type="text" class="text" maxlength="40" value="{$goods.goo_price}" /></td>
				</tr>
				{foreach from=$goods.att name=goods item=item}
				<tr>
					<td>{$item.name}：</td>
					<td><input name="{$item.code}" type="text" class="text" value="{$item.value}" /></td>
				</tr>
				{/foreach}
				<tr>
					<td>{$lang.goods_text}：</td>
					<td>
						<div class="editor">
							{include file='module/editor.php'}
						</div>
					</td>
				</tr>
				<tr>
					<td>{$lang.keywords}：</td>
					<td><input class="text" name="goo_keywords" type="text" maxlength="200" value="{$goods.goo_keywords}" />
					</td>
				</tr>
				<tr>
					<td>{$lang.description}：</td>
					<td><input class="text" name="goo_description" type="text" value="{$goods.goo_description}" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="{$lang.edit}" />
							<input class="button" type="button" onclick="go_back()" value="{$lang.go_back}" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<iframe class="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
{include file='module/goods/box.php'}
<!-------------------------- BOX -------------------------->