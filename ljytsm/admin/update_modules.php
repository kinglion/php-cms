<?php
require("./database.php");
if(empty($_SESSION['momocms_admin'])){
	header("Location:./index.php");	
	exit;
}
if($_SESSION['momocms_isAdmin']==1){
	$_POST=array_map("htmlspecialchars",$_POST);
	$_POST=array_map("addslashes",$_POST);
	$db->exec("update ".DB_PREFIX."modules set
						sort ='".$_POST['sort']."' where id='".intval($_POST['id'])."'");
echo '<script>
	parent.window.location.href="./modules.php";
</script>';
}
?>
