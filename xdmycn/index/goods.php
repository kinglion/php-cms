<?php
include('smarty/Smarty.class.php');
include('index/common.func.php');
	
set_smarty();
load_lang_pack(array($global['channel']));
initial('goods');
$smarty->display('goods.php');
create_html($global['url']);
	
//新秀
?>