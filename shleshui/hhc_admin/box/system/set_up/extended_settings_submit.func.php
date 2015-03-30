<?php

	function extended_settings_submit(){
		$pdo = get_pdo();
		$res = $pdo -> query('select * from '.DB_PRE.'extended_settings_ziduan');
		$r = array();
		foreach($res as $v){
			$r [$v['en_name']]=$v;
			if(!isset($_POST[$v['en_name']])){
				$_POST[$v['en_name']] = '';
			}
		}

		unset($res);
		foreach($_FILES as $k => $v){
			if(!empty($v['name'])){
				$fileUpload = new fileUpload(array('type'=>'1'));
				$arr = $fileUpload -> upload($v);
				if(empty($arr['num']))
					alert(0,0,null,$arr['msg'],0);
				$_POST[$k]=$arr['new_file'];
			}
		}
		foreach($_POST as $k => $v){
			if($r[$k]['type']=='0'){
				//单行文本
				$v = strip_tags($v);
				if($r[$k]['dan_type']=='1'){
					$v = ceil($v);
				}
			}else if($r[$k]['type']=='1'){
				//多行文本
				$v = strip_tags($v);
				$v = str_replace("\r",'&nbsp;',$v);
				$v = str_replace("\n",'<br />',$v);
			}else if($r[$k]['type']=='2'){
				//html文本
			}else if($r[$k]['type']=='3'){
				//图片上传
			}else if($r[$k]['type']=='4'){
				//option
			}else if($r[$k]['type']=='5'){
				//checkbox
				$pdo -> sql('update `'.DB_PRE."extended_settings` set `v` = '' where `k` = '{$k}'");
				$v=implode(',',$v);
			}
			$pdo -> sql('update `'.DB_PRE."extended_settings` set `v` = '{$v}' where `k` = '{$k}'");
		}
		unlink('./sundry/cache/json/extended_settings.php');

		$res = $pdo -> query('select * from '.DB_PRE."extended_settings");
		$arr = array();
		foreach($res as $v){
			$arr[$v['k']]=$v;
		}
		$data = json_encode($arr);
		unset($res);
		$json=<<<JSONS
<?php
		
		\$json = <<<JSON
		$data
JSON;

?>
JSONS;
		file_put_contents('./sundry/cache/json/extended_settings.php',$json);

		alert(1,0,'?h=set_up&c=extended_settings','修改成功');
	}