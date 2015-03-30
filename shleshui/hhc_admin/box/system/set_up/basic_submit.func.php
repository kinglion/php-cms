<?php

	function basic_submit(){
		$pdo = get_pdo();
		if(!empty($_FILES['logo']['name'])){
			$fileUpload = new fileUpload(array('type'=>'1'));
			$arr = $fileUpload -> upload($_FILES['logo']);
			if(empty($arr['num']))
				alert(0,0,null,$arr['msg'],0);
			//判断大小 做缩放
			/*$img = new img($arr['new_file']);
			$w = $img -> w_h(150,100);
			$path = $img -> __zoom($w['width'],$w['height']);*/
			if(!empty($_POST['hhc_v_k'])){
				$_POST[$_POST['hhc_v_k']] = $arr['new_file'];
			}
			if(!empty($_POST['hhc_v_k2'])){
				$_POST[$_POST['hhc_v_k2']] = $arr['old_file'];
			}
			
		}
				unset($_POST['hhc_v_k']);
				unset($_POST['hhc_v_k2']);
		$sql = 'update '.DB_PRE.'config set `v`= CASE id ';
		$id = '';
		foreach($_POST as $k => $v){
			$id .= "'{$k}',";
			$sql .= " when '$k' then '$v' ";
		}
		$id = trim($id,',');
		$sql .= "end where id in ({$id})";
		$row = $pdo -> sql($sql);
		if($row === false){
			alert(0,0,null,'失败,请稍后重试！');
		}else{
			if(unlink('./sundry/cache/json/config.php')){
				alert(1,1,null);
			}else{
				alert(0,0,null,'请检查/sundry/cache/json/config.php是否有读写权限');
			}
		}
	}
