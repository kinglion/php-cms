<?php
function module_download_main()
{
	global $global,$smarty;
	$obj = new article();
	$obj->set_field('art_title,art_text,art_add_time,art_attribute');
	$obj->set_where('art_channel_id = '.$global['channel_id']);
	$obj->set_page_size(5);
	$obj->set_page_num($global['page']);
	$sheet = $obj->get_sheet();
	set_link($obj->get_page_sum());
	
	$obj = new att_art();
	$obj->set_where('');
	$obj->set_where('att_channel_id = 5');
	$obj->set_where('att_channel_id = '.$global['channel_id'],'or');
	$att_arr = $obj->get_list();	
	for($i = 0;$i < count($sheet);$i ++)
	{	
		$sheet[$i]['att'] = get_att_list($att_arr,$sheet[$i]['art_attribute'],'file_path');
	}
	$smarty->assign('download',$sheet);
}
//新秀
?>