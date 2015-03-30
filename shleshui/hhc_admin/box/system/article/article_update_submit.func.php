<?php

	function article_update_submit(){
		$moxing_id=$_POST['moxing_id'];
		$ks=$_POST['k'];
		unset($_POST['moxing_id']);
		unset($_POST['k']);
		include "./sundry/cache/json/moxing/ziduan/{$moxing_id}.php";
		$json = json_decode($json,true);
		$arr = array();
		$html_data=array();
		foreach($json as $v){
			if($v['moxing_type']=='8'){
				//html文本
				$html_data[]=$v['en_name'];
			}
			$arr[$v['en_name']]=$v;
		}
		unset($json);
		//如果有文件 先上传
		foreach($_FILES as $k => $v){
			if(!empty($v['name']) && !empty($v['tmp_name'])){
				if(!isset($file))
					$file = new fileUpload();
				$res = $file -> upload($v);
				if($res['num']===1)
					$_POST[$k]=$res['new_file'];
				else
					alert(0,0,null,$res['msg'],0);
			}else{
				$_POST[$k]='';
			}
		}

		//检查提交进来的字段是否存在问题
		$post_data = array();
		$empty_pic = array();
		foreach($_POST as $k => $v){
			if(isset($arr[$k])){
				switch($arr[$k]['moxing_type']){
					case '1':
						//单行文本 不能超过50个字符
						if(str_len($v)>49)
							alert(0,0,null,"{$arr[$k]['cn_name']} 不能超过50个字符",1);
					break;
					case '2':
						//单行文本 不能超过200个字符
						if(str_len($v)>199)
							alert(0,0,null,"{$arr[$k]['cn_name']} 不能超过200个字符",1);
					break;
					case '3':
						//多行文本 不能超过500个字符
						if(str_len($v)>499)
							alert(0,0,null,"{$arr[$k]['cn_name']} 不能超过500个字符",1);
					break;
					case '4':
						//整数
						$v=ceil($v);
					break;
					case '5':
						//浮点数
						$v = (float)$v;
					break;
					case '11':
						//checkbox
						$v = implode(',',$v);
						if(str_len($v)>499)
							alert(0,0,null,"{$arr[$k]['cn_name']} 选择的数量超出",1);
					break;
					case '12':
						//略缩图
						if(empty($v))
							//没上传图片
							$empty_pic[]=$k;
						else{
							//缩放 
					        $img = new img($v);
					        include './sundry/cache/json/config.php';
					        $json=json_decode($json,true);
					        $w_h = $img->w_h(floor($json['30']),floor($json['29']));
					        $img->__zoom($w_h['width'],$w_h['height']);
					        $img = new img($v);
					        $o_w = $img -> old_w;
					        $o_h = $img -> old_h;
						}
					break;
				}
				$post_data[$k]=$v;
			}else{
				if($k=='con_biaoti'){
					if(str_len($v)>49)
						alert(0,0,null,'标题不能超过50个字符',1);
					$post_data[$k]=$v;
				}
			}
		}
		/*$pic_bool = false;
		if(!empty($empty_pic))
			$pic_bool=true;*/
		foreach($html_data as $v){
			if(!isset($post_data[$v]))
				$post_data[$v]='';
			/*if($pic_bool){
				//截取略缩图
				if(!empty($post_data[$v])){
					//
				}
			}*/
		}
		//获取表名
		include "./sundry/cache/json/moxing/moxing.php";
		$json=json_decode($json,true);
		$tb_name = $json[$moxing_id]['moxing_ziduan_table_name'];
		$pdo = get_pdo();
		$post_data['con_time']=time();
		$post_data['con_user_id']=$_SESSION['user_id'];
		$row = $pdo -> exec('`'.DB_PRE."{$tb_name}`",'update',$post_data," where `con_id` = '{$ks}' ");
		if($row===false)
			alert(0,0,null,'网络繁忙，请稍后重试',1);
		alert(1,0,"?h=article&c=article_update&k={$ks}&m={$moxing_id}",'修改成功',0);
	}