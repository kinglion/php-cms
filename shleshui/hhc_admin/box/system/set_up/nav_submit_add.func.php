<?php

	function nav_submit_add($param){
		if(empty($_POST['nav_name']))
			alert(0,3,null,'',1);
		if(str_len($_POST['nav_name'])>19)
			alert(0,0,null,"标题长度不能超出20个汉字/英文",1);
		if(str_len($_POST['nav_link'])>199)
			alert(0,0,null,"链接地址不能超出200个汉字/英文",1);
		if(str_len($_POST['nav_yincang'])>199)
			alert(0,0,null,"隐藏名称不能超出20个汉字/英文",1);
		if(floor($_POST['nav_paixu']>60000)){
			$_POST['nav_paixu']=60000;
		}else if(floor($_POST['nav_paixu']<0)){
			$_POST['nav_paixu']=0;
		}elseif(empty($_POST['nav_paixu'])){
			$_POST['nav_paixu']=0;
		}else{
			$_POST['nav_paixu']=floor($_POST['nav_paixu']);
		}
		if($param['stype']=='update'){
			$id = !empty($_POST['id']) ? $_POST['id'] : '0';
			$w = " where nav_id = '{$id}' ";
			$f=2;
			$z=1;
			unset($_POST['id']);
		}else{
			$w='';
			$f=4;
			$z=5;
		}
		$pdo = get_pdo();
		$row = $pdo -> exec('`'.DB_PRE.'nav`',$param['stype'],$_POST,$w);
		if($row===false){
			alert(0,$f,null,'',1);
		}else{
			if(unlink('./sundry/cache/json/nav.php')){
				alert(1,$z,'?h=set_up&c=nav');
			}else{
				alert(0,0,null,'请检查/sundry/cache/json/nav.php是否有读写权限');
			}
			
		}

	}
