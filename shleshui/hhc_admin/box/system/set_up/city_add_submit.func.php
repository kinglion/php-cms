<?php

	function city_add_submit(){
		if(empty($_POST['name']))
			alert(0,0,null,'城市名称不能为空！',1);
		$_POST['paixu']=floor($_POST['paixu']);
		$pdo = get_pdo();
		$row = $pdo -> exec('`'.DB_PRE.'city`','insert',$_POST);
		if($row===false){
			alert(0,4);
		}else{
			alert(1,5);
		}
	}