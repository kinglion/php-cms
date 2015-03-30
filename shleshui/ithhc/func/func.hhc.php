<?php

/******************************************
 * func.hhc 	程序主函数库
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-06-21 10:03';
 ******************************************/
	
	/**
	 *	错误输出函数
	 *	@param String $msg 输出的消息
	 */
	function show_err($msg){
		$tpl=<<<TPL
			<style>
				*{margin:0;border:0;padding:0;font-family:Comic Sans Ms;}
				.hhc_show_err_div_parent_hhc{margin-top:50px;}
			</style>
			<center>
				<div class="hhc_show_err_div_parent_hhc">
					Error：$msg
				</div>
			</center>
TPL;
		echo $tpl;		
		exit;
	}

	function getFile($url,$save_dir='',$filename='',$type=0){
		if(trim($url)=='')
			return false;
		if(trim($save_dir)=='')
			$save_dir='./';
		if(0!==strrpos($save_dir,'/'))
			$save_dir.='/';
		if(!file_exists($save_dir))
			mk_dir($save_dir);
		if(is_file($save_dir.$filename))
			unlink($save_dir.$filename);
		if($type){
			$ch=curl_init();
			$timeout=5;
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
			$content=curl_exec($ch);
			curl_close($ch);
		}else{
			ob_start();
			readfile($url);
			$content=ob_get_contents();
			ob_end_clean();
		}
		$size=strlen($content);
		//文件大小
		$fp2=@fopen($save_dir.$filename,'a');
		fwrite($fp2,$content);
		fclose($fp2);
		unset($content,$url);
		return array('file_name'=>$filename,'save_path'=>$save_dir.$filename);
	}


	/**
	 *	v()输出
	 *	@param All
	 */
	function v(){
		$args = func_get_args();
		echo '<pre>';
		if(count($args)=='1')
			var_dump($args['0']);
		else
			var_dump($args);
		echo '</pre>';
	}
	/**
	 *	错误处理函数
	 */
	function all_err(){

	}

	function alert($type,$msg_id,$url=null,$msg='',$go_type=0){
	 	//用于后台更新后的跳转
	 	$msg=empty($msg)?'&nbsp;':$msg;
 		setcookie('hhc_return_msg_id',$msg_id);
 		setcookie('hhc_return_msg',$msg);
 		setcookie('hhc_return_type',$type);
	 	if($go_type==0){
	 		if(is_null($url))
	 			$url=empty($_SERVER['HTTP_REFERER'])?'?':$_SERVER['HTTP_REFERER'];
			header("location: $url");
	 	}elseif($go_type>0){
	 		echo "<script>
					history.go(-{$go_type});
				</script>";
		}
		exit;
	}

	function alert_2($lever=1,$msg='',$link='',$time=3){
			$js = '';
		 	if($lever==0)
		 		header("Refresh:$time ; url=$link");
		 	elseif($lever>0){
		 		$js = "<script>window.setTimeout('go_to()',{$time}000);
						function go_to(){history.go(-{$lever}) }
					</script>";
				$link='javascript:go_to();';
		 	}else{
		 		$link=$_SERVER['HTTP_REFERER'];
		 		header("Refresh:$time ; url={$_SERVER['HTTP_REFERER']}");
		 	}

			include './sundry/static_file/tpl/msg/alert_2.hhc';
			exit;
		 }

	/**
	 *	获得pdo对象
	 */
	function get_pdo(){
		$pdo = pdoDB::connect();
		if(is_null($pdo)){
			//数据库连接失败
			header('location:hhc.php?h=index&c=pdo_not_connect');
			exit;
		}
		return $pdo;
	}

	/**
	 *	处理函数
	 */
	function C($func='',$param=array()){
		$path = APP_DIR.'/box/system/'; 
		if(strpos($func,'::')){
			//index::index
			$arr = explode('::',$func);
			$h=!empty($arr['0']) ? $arr['0'] : $_GET['h'];
			array_shift($arr);
			$c=!empty($arr['0']) ? $arr['0'] : $_GET['c'];
		}else{
			//index
			$h = $_GET['h'];
			if(!empty($func))
				$c = $func;
			else
				$c = $_GET['c'];
		}
		$path.=$h.'/'.$c.'.func.php';
		if(is_file($path))
			include $path;
		if(!function_exists($c))
			show_err('函数'.$c.'不存在');
		$res = $c($param);
		if(isset($res))
			return $res;
	}

	/**
	 *	参数转译函数
	 */
	function Translation($arr,$type=1){
		$new_arr=array();
		foreach ($arr as $k => $v){
			if(is_array($v)){
				$new_arr[$k] = Translation($v);
			}else if(is_string($v)){
				$new_arr[$k] = addslashes($v);
				//$new_arr[$k] = RemoveXSS($new_arr[$k]);
				//$new_arr[$k] = safe_replace($new_arr[$k]);
				if($type=='0'){
					$new_arr[$k]=str_replace('(','_（',$new_arr[$k]);
					$new_arr[$k]=str_replace(')','）_',$new_arr[$k]);
				}
			}
		}
		return $new_arr;
	}

	function unTranslation($arr,$type=1){
		$new_arr=array();
		foreach ($arr as $k => $v){
			if(is_array($v)){
				$new_arr[$k] = unTranslation($v);
			}else if(is_string($v)){
				$new_arr[$k] = stripslashes($v);
				if($type=='0'){
					$new_arr[$k]=str_replace('_（','(',$new_arr[$k]);
					$new_arr[$k]=str_replace('）_',')',$new_arr[$k]);
				}
			}
		}
		return $new_arr;
	}

	/**
	 *	获取url
	 */
	function get_url($key=array(),$type=1,$url_name){
		$get = '';
		$key=empty($key) ? $_GET : $key ;
		foreach($key as $k => $v){
			if(empty($v) && $v!='0')
				continue;
			if($k==$url_name)
				continue;
			if($type==1){
				//不使用静态
				$get .= $k.'='.$v.'&';
			}else if(1==2){
				//使用伪静态
			}
		}
		if($type==1){
			$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?'.trim($get,'&');
		}else if(1==2){
			//使用伪静态
		}


		return $url;
	}

	function date_change($the_time) {  
	    $now_time = date("Y-m-d H:i:s", time());  
	    $now_time = strtotime($now_time);  
	    $show_time = strtotime($the_time);  
	    $dur = $now_time - $show_time;  
	    if($dur<0){  
	        return $the_time;  
	    }else{  
	        if($dur<60){  
	            return $dur.'秒前';  
	        }else{  
	            if($dur<3600){  
	                return floor($dur/60).'分钟前';  
	            }else{  
	                if($dur<86400){  
	                    return floor($dur/3600).'小时前';  
	                }else{  
	                    if($dur<259200){  
	                        return floor($dur/86400).'天前';  
	                    }else{  
	                        return $the_time;  
	                    }  
	                }  
	            }  
	        }  
	    }  
	}  
	function is_mobile() { 
		$user_agent = $_SERVER['HTTP_USER_AGENT']; 
		$mobile_agents = Array("240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte"); 
		$is_mobile = false; 
		foreach ($mobile_agents as $device) { 
		    if (stristr($user_agent, $device)) { 
		        $is_mobile = true; 
		        break; 
		    } 
		} 
		return $is_mobile; 
	}

	/**
	 *	删除目录和文件
	 */
	function delDirAndFile($dirName,$a_dir=1){ 
		static $data = array(); 
		if($handle = opendir("$dirName")){  
			while(false !== ($item = readdir($handle))){  
				if($item != "." && $item != ".." ){  
					if(is_dir("$dirName/$item")){  
						delDirAndFile("$dirName/$item");  
					}else{  
						if(unlink("$dirName/$item"))
							$data [] = "$dirName/$item"; 
					}
				}  
			}  
			closedir($handle);
			if($a_dir){
				if(rmdir($dirName))
					$data[] = $dirName; 			
			}  
 
		} 

		return $data;
	} 
	
	/**
	 *	导航引入
	 */
	function include_nav(){
		$arr = array();
		//获取基本信息
		if(is_file('./sundry/cache/json/nav.php')){
			include './sundry/cache/json/nav.php';
			$arr = json_decode($json,true);
		}else{
			$pdo = get_pdo();
			$res = $pdo -> query('select * from '.DB_PRE.'nav order by nav_paixu desc');
			if(empty($res)){
				show_err('您可能修改过数据库，导致程序出错！');
			}
			foreach($res as $v){
				$arr[$v['nav_id']] = $v;
			}
			unset($res);
			//保存数据
			$data = json_encode($arr);
			$json=<<<JSONS
<?php
		
		\$json = '$data';
JSONS;
			file_put_contents('./sundry/cache/json/nav.php',$json);
		}
		return $arr;
	}

	function get_extended_settings(){
		if(is_file('./sundry/cache/json/extended_settings.php')){
			include './sundry/cache/json/extended_settings.php';
			$arr = json_decode($json,true);
		}else{
			$pdo = get_pdo();
			$res = $pdo -> query('select * from '.DB_PRE."extended_settings");
			$arr = array();
			foreach($res as $v){
				$arr[$v['k']]=$v;
			}
			$data = json_encode($arr);
			unset($res);
			$json=<<<JSONS
<?php

	\$json = '$data';
?>

JSONS;
			file_put_contents('./sundry/cache/json/extended_settings.php',$json);
			}

			return $arr;
	}


	/**
	  *	获取ip
	  */
	function get_ip(){
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}else{
			$ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

	function RemoveXSS($val) {  
	   $val = preg_replace('/([\x00-\x08,\x0b-\x0c,\x0e-\x19])/', '', $val);  
	   $search = 'abcdefghijklmnopqrstuvwxyz';  
	   $search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';  
	   $search .= '1234567890!@#$%^&*()';  
	   $search .= '~`";:?+/={}[]-_|\'\\';  
	   for ($i = 0; $i < strlen($search); $i++) {  
	      $val = preg_replace('/(&#[xX]0{0,8}'.dechex(ord($search[$i])).';?)/i', $search[$i], $val); // with a ;  
	      $val = preg_replace('/(&#0{0,8}'.ord($search[$i]).';?)/', $search[$i], $val); // with a ;  
	   }  
	     $ra1 = array('javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink', 'link', 'style', 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', 'title', 'base');  
	   $ra2 = array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload');  
	   $ra = array_merge($ra1, $ra2);  
	  
	   $found = true;
	   while ($found == true) {  
	      $val_before = $val;  
	      for ($i = 0; $i < sizeof($ra); $i++) {  
	         $pattern = '/';  
	         for ($j = 0; $j < strlen($ra[$i]); $j++) {  
	            if ($j > 0) {  
	               $pattern .= '(';  
	               $pattern .= '(&#[xX]0{0,8}([9ab]);)';  
	               $pattern .= '|';  
	               $pattern .= '|(&#0{0,8}([9|10|13]);)';  
	               $pattern .= ')*';  
	            }  
	            $pattern .= $ra[$i][$j];  
	         }  
	         $pattern .= '/i';  
	         $replacement = substr($ra[$i], 0, 2).'<x>'.substr($ra[$i], 2); 
	         $val = preg_replace($pattern, $replacement, $val); // filter out the hex tags  
	         if ($val_before == $val) {  
	            $found = false;  
	         }  
	      }  
	   }  
	   return $val;  
	}  

	function safe_replace($string) {  
	    $string = str_replace('%20','',$string);  
	    $string = str_replace('%27','',$string);  
	    $string = str_replace('%2527','',$string);  
	   // $string = str_replace('<','&lt;',$string);  
	   // $string = str_replace('>','&gt;',$string);  
	    return $string;  
	}   

	/**
	 *	获取字符串长度
	 */
	function str_len($str='') {
		preg_match_all('/./us',$str,$match);
		return count($match[0]);
	} 

	/**
	 *	发送邮件的方法
	 */
	function sendmail($host='smtp.ithhc.cn',$name='test',$pwd='test',$from='test@ithhc.cn',$author='',$title='',$content='',$to_user='test@ithhc.cn',$html=false,$attachment=''){
		$mail = new mail();
		$mail -> IsSMTP();
		$mail -> Host = $host;
		$mail->SMTPAuth = true;
		$mail->Username = $name; 
		$mail->Password= $pwd;
		$mail->From = $from;
		$mail->FromName = $author;
		$mail->Subject = $title;
		$mail->Body = $content;
		$to_user = explode(';',$to_user);
		foreach($to_user as $v){
			$mail->AddAddress($v,$v);
		}
		if($html)
			$mail->IsHTML(true);
		if(!empty($attachment)){
			$attachment = explode(';',$attachment);
			foreach($attachment as $v){
				$mail->AddAttachment($v);
			}
		}
		$data=$mail -> send();
		if($data===true)
			return true;
		if(strpos($data,'1')!==false){
			return '无法连接到主机';
		}elseif(strpos($data,'2')!==false){
			return '你至少要选择一个收信地址';
		}elseif(strpos($data,'3')!==false){
			return '程序不支持';
		}elseif(strpos($data,'4')!==false){
			return '无法执行';
		}elseif(strpos($data,'5')!==false){
			return '无法实例化邮件';
		}elseif(strpos($data,'6')!==false){
			return '验证失败 请检查用户名和邮箱';
		}elseif(strpos($data,'7')!==false){
			return '地址出错';
		}elseif(strpos($data,'8')!==false){
			return '部分收信人失败';
		}elseif(strpos($data,'9')!==false){
			return '数据不被接受';
		}elseif(strpos($data,'10')!==false){
			return '无法访问文件';
		}elseif(strpos($data,'11')!==false){
			return '不能打开文件';
		}elseif(strpos($data,'12')!==false){
			return '未知的编码';
		}elseif(strpos($data,'13')!==false){
			return '签名错误';
		}elseif(strpos($data,'14')!==false){
			return 'SMTP服务器出错';
		}elseif(strpos($data,'15')!==false){
			return '消息主体不能为空';
		}elseif(strpos($data,'16')!==false){
			return '无效的地址';
		}elseif(strpos($data,'17')!==false){
			return '无法设置或重置变量';
		}else{
			return '未知错误';
		}
	}

	/**
	 *	时间转换
	 */
	function time__zone($sec){
		 $sec = round(intval($sec,10)/60);
		 if ($sec >= 60){
			 $hour = floor($sec/60);
			 $min = $sec%60;
			 $res = $hour.'小时';
			 $min != 0  &&  $res .= $min.'分';
		 }else{
		 	$res = $sec.'分钟';
		 }
		 return $res;
	}

	function get_level_class_img($level_class){
		if($level_class>3){
			$yue = number_format($level_class/4,'2');//月亮的数量
			$s = explode('.',$yue);
			$yue = $s['0'];
			$xing = $s['1'];
			$arr = array();
			if($yue>3){
				//有太阳
				$yang = number_format($yue/4,'2');
				$s = explode('.',$yang);
				$yang = $s['0'];
				$yue = $s['1'];
				for($i = 0; $i < $yang;$i++){
					$arr[] = './sundry/static_file/img/level3.gif';
				}
				$yue = !empty($yue) ? $yue/25 : 0;
				for($i = 0; $i < $yue;$i++){
					$arr[] = './sundry/static_file/img/level2.gif';
				}
				$xing = !empty($xing) ? $xing/25 : 0;
				for($i=0;$i<$xing;$i++){
					$arr[] = './sundry/static_file/img/level1.gif';
				}
			}else{
				for($i = 0; $i < $yue;$i++){
					$arr[] = './sundry/static_file/img/level2.gif';
				}
				$xing = !empty($xing) ? $xing/25 : 0;
				for($i=0;$i<$xing;$i++){
					$arr[] = './sundry/static_file/img/level1.gif';
				}
			}
		}else{
			//没有月亮和太阳
			$arr = array();
			for($i = 0; $i<$level_class;$i++){
				$arr[] = './sundry/static_file/img/level1.gif';
			}
		}
		return $arr;
	}

	function onload(){
		if(!$GLOBALS['c']){
			//页面存在致命错误
			if($error = error_get_last()){
        		exit;
    		}
		}
	}

	/**
	 *	获取xml数组
	 */
	function get_xml_array($path){
		$xml = simplexml_load_file($path);
		return simp_array($xml);
	}
	function simp_array($xml){
		$arr = (array) $xml;
		foreach($arr as $k => $v){
			if($v instanceof SimpleXMLElement || is_array($v)){
				$arr[$k] = simp_array($v);
			}
		}
		return $arr;
	}

	/**
	 *	自动加载
	 */
	function hhc_load($class_name){
		class_exists($class_name) or include $class_name.'.class.php';
		
		if(!class_exists($class_name)){
			if(substr($class_name,-4)=='Conn'){
				$conn = new Conn();
				$conn -> model();
				exit;
			}
			//提示类不存在
			//echo $class_name.'.class.php不存在';
			exit;
		}	
	}

	/**
	 *	创建目录
	 *	@param String $dir 需要创建的目录
	 *	@param String || Int $quanxian 权限 
	 */
	function mk_dir($dir,$quanxian=''){
		$quanxian=empty($quanxian)?0777:$quanxian;
		if(is_dir($dir)){
			return true;
		}
		if(is_dir(dirname($dir))){
			return mkdir($dir,$quanxian);
		}
		mk_dir(dirname($dir));
		if(is_dir($dir)){
			return true;
		}
		return mkdir($dir,$quanxian);
	}

	/**
	 *	获得一个随机字符串
	 */
	function rander($length=32){
		$r='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1230456789';
		$z='';
		for($i=0;$i<$length;$i++)
			$z .= $r[rand(0,strlen($r)-1)];
		return $z;
	}



?>