<?php

	class customConn extends Conn{
		public function danye(){
			if(empty($_GET['k']))
				exit;
			$path1 = './sundry/cache/json/custom/custom.php';
			include $path1;
			$json = json_decode($json,true);
			if(empty($json[$_GET['k']]))
				exit;
			$z = $json[$_GET['k']];
			$tpl = "danye/{$z['tpl']}";
			$this -> output($tpl);
		}

		public function biaodan(){
			if(empty($_GET['k']))
				exit;
			$path1 = './sundry/cache/json/custom/custom.php';
			include $path1;
			$json = json_decode($json,true);
			if(empty($json[$_GET['k']]))
				exit;
			$z = $json[$_GET['k']];
			$tpl = "biaodan/{$z['tpl']}";
			$this -> output($tpl);
		}

		public function biaodan_submit(){
			include './sundry/cache/json/f_type.php';
			$json = json_decode($json,true);
		//如果有文件 先上传
		foreach($_FILES as $k => $v){
			if(!empty($v['name']) && !empty($v['tmp_name'])){
				if(!isset($file))
					$file = new fileUpload(array('type'=>$json));
				$res = $file -> upload($v);
				if($res['num']===1)
					$_POST[$k]=$res['new_file'];
				else
					alert(0,0,null,$res['msg'],0);
			}else{
				$_POST[$k]='';
			}
		}
			$tb_name = '`'.DB_PRE."{$_POST['hhc_k']}`";
			unset($_POST['hhc_k']);
			$pdo = get_pdo();
			$row = $pdo -> exec($tb_name,'insert',$_POST);
			if(empty($row))
				alert(0,0,null,'提交失败',0);
			alert(1,0,null,'提交成功',0);
		}


	}