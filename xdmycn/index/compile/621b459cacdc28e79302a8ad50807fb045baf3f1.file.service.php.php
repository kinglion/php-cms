<?php /* Smarty version Smarty-3.1.3, created on 2015-02-05 11:31:43
         compiled from "templates/default/index\module\service.php" */ ?>
<?php /*%%SmartyHeaderCode:2713954d2e41f5f0226-96229588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '621b459cacdc28e79302a8ad50807fb045baf3f1' => 
    array (
      0 => 'templates/default/index\\module\\service.php',
      1 => 1417640308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2713954d2e41f5f0226-96229588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'service_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_54d2e41f62abb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2e41f62abb')) {function content_54d2e41f62abb($_smarty_tpl) {?>
<div id="service">
	<div id="service_img" onmousemove="show_service(1)"></div>
	<div class="main">
		<div class="in">
			<?php echo $_smarty_tpl->tpl_vars['service_code']->value;?>

		</div>
	</div>
</div>

<script language="javascript">
	function show_service(val)
	{
		if(val == 1 && document.getElementById("service").style.width == "33px")
		{
			document.getElementById("service").style.width = "143px";
		}else{
			document.getElementById("service").style.width = "33px";
		}
	}
	window.onscroll = function()
	{
		show_service(0);
	}
</script>

<!-- 新秀 --><?php }} ?>