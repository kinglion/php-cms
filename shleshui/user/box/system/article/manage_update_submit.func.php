<?php

	function manage_update_submit(){
		$nav_id = $_POST['k'];
		$moxing_id = $_POST['k2'];
		$ziduan_id = $_POST['k3'];
		unset($_POST['k']);
		unset($_POST['k2']);
		unset($_POST['k3']);
		$pdo = get_pdo();
		$res = $pdo -> query('select * from `'.DB_PRE."ziduan` where `moxing_id` = '{$moxing_id}' order by `xitong` desc");
		$res = !empty($res) ? $res : array();
		$arr = array();
		$html_data=array();
		foreach($res as $v){
			if($v['moxing_type']=='8'){
				//html文本
				$html_data[]=$v['en_name'];
			}
			$arr[$v['en_name']]=$v;
		}
		unset($res);
		foreach($_FILES as $k => $v){
			if(!empty($v['name'])){
				if(!isset($file))
					$file = new fileUpload();
				$res = $file -> upload($v);
				if($res['num']===1)
					$_POST[$k]=$res['new_file'];
				else
					alert_2(1,$res['msg'],'',3);
			}else{
				$_POST[$k]='';
			}
		}

		$post_data = array();
		$empty_pic = array();
		foreach($_POST as $k => $v){
			if(isset($arr[$k])){
				switch($arr[$k]['moxing_type']){
					case '1':
						//单行文本 不能超过50个字符
						if(str_len($v)>49)
							alert_2(1,"{$arr[$k]['cn_name']} 不能超过50个字符",'',3);
					break;
					case '2':
						//单行文本 不能超过200个字符
						if(str_len($v)>199)
							alert_2(1,"{$arr[$k]['cn_name']} 不能超过200个字符",'',3);
					break;
					case '3':
						//多行文本 不能超过500个字符
						if(str_len($v)>499)
						alert_2(1,"{$arr[$k]['cn_name']} 不能超过500个字符",'',3);
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
						alert_2(1,"{$arr[$k]['cn_name']} 选择的数量超出",'',3);
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
						alert_2(1,'标题不能超过50个字符','',3);
					if(str_len($v)<1)
						alert_2(1,'标题不能为空','',3);
					$post_data[$k]=$v;
				}
			}
		}
		foreach($html_data as $v){
			if(!isset($post_data[$v]))
				$post_data[$v]='';
			include "./sundry/cache/json/moxing/moxing.php";
			$json=json_decode($json,true);
			$tb_name = $json[$moxing_id]['moxing_ziduan_table_name'];
			
			$post_data['con_time']=time();
			$post_data['con_lanmu_id']=$nav_id;
			$post_data['con_user_id']=$_SESSION['user_id'];
		
			$row = $pdo -> exec('`'.DB_PRE."{$tb_name}`",'update',$post_data,"where con_id={$ziduan_id}");
			if($row===false)
				alert_2(1,'网络繁忙 修改失败','',3);
			alert_2(0,"文章编辑成功 ","?h=article&c=manage_update&k={$nav_id}&k2={$ziduan_id}",3);
		}

	}



