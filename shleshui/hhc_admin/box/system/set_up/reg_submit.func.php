<?php

	function reg_submit(){
		$arr1=explode("\n",$_POST['baoliu_name']);
		$arr2=explode("\n",$_POST['baoliu_key']);
		foreach($arr1 as $k => $v){
			$arr1[$k]=trim($v);
		}
		foreach($arr2 as $k => $v){
			$arr2[$k]=trim($v);
		}
		$arr1=json_encode($arr1);
		$arr2=json_encode($arr2);
		$json=<<<JSON
<?php
	
	\$baoliu_name='$arr1';
	\$baoliu_key='$arr2';

JSON;
		if(!file_put_contents('./sundry/cache/json/reg_baoliu.php',$json)){
			alert(0,0,null,'请检查./sundry/cache/json/reg_baoliu.php是否有读写权限');
		}
		unset($_POST['baoliu_name']);
		unset($_POST['baoliu_key']);
	}