<?php

	function acquisition_submit(){
		if(empty($_POST['website']) || empty($_POST['start_page']) || empty($_POST['stop_page']) || empty($_POST['start_c']) || empty($_POST['start_page']) || empty($_POST['lanmu'])){
			alert(0,0,null,"采集检测失败 请检测网址及填写规则",1);
		}
		set_time_limit(0);
		//先检查采集地址是否有误
		$url = str_replace('*',$_POST['start_page'],$_POST['website']);
		$curl = curl_init();
		curl_setopt($curl,CURLOPT_URL,$url);
		curl_setopt($curl,CURLOPT_HEADER,0);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
		$res = curl_exec($curl);
		curl_close($curl);
		$start_length = strpos($res,$_POST['start_c']);
		$stop_length = strpos($res,$_POST['stop_c']);
		$con_length = $stop_length - $start_length;
		$str = substr($res,$start_length+1,$con_length);
		if(empty($str))
			alert(0,0,null,"采集检测失败 请检测网址及填写规则 以及能否联网",1);
		file_put_contents('1.php',$str);
		return array('str'=>$str);
		//v($_POST);
	}
