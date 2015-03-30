<?php

/******************************************
 * fileUpload 	文件上传类
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-08-15 16:07';
 ******************************************/

	//文件上传操作 
	class fileUpload{
		private $type;		//类型
		private $upload_dir;  //上传后的路径
		private $max_size;	//最大尺寸
		private $msg;
		private $stype;

		/**
		 *	构造方法初始化部分信息
		 *	@param Array $file ('upload_dir'=>'上传后的目录','type'=>array('允许的类型'),'max_size'=>'文件的大小')
		 */
		public function __construct($file=array()){
			/**
			 *	文件上传目录
			 */
			$this->upload_dir = isset($file['upload_dir']) ? $file['upload_dir'] : './sundry/uploads';
			/**
			 *	允许上传文件类型
			 */
			if(!empty($file) && is_array($file)){
				if($file['type']=='1'){
					//图片文件
					$this -> type = array('jpg','jpeg','pjpeg','png','gif');
					$this -> msg = 'jpg/png/gif';
					$this -> stype = 1;
				}elseif($file['type']=='2')
					//音频文件
					$this -> type = array('wmv','mp3','avi','swf','mid','mp4','asf','3gp','mpg','wav');
				else{
					$this -> type = is_array($file['type']) ? $file['type'] : array('jpg','gif','png');
				}
			}else{
				$this -> type = array('jpg','gif','png','jpeg','pjpeg');
			}
			/**
			 *	限制尺寸
			 */
			$this->max_size = isset($file['max_size']) ? $file['max_size'] : 200000000;
			if(!is_dir($this->upload_dir)){
				mk_dir($this->upload_dir,0777,true);
				file_put_contents($this->upload_dir.'/index.php','hhc');
			}
		}

		/**
		 *	上传文件
		 *	@param Array $file $_FILES['hhc'] 一次只能传递一个文件 多文件 请在上传时循环调用
		 *	@return Mixed true($file_name) | false($error_num,$error_msg)
		 */
		public function upload($file){
			$msg='';
			if($file['error'] != 0){
				$msg = $this -> get_error_num($file['error']);
				return array('num'=>0,'msg'=>$msg);
			}
			$arr = (explode('/',$file['type']));
			$type = $arr[count($arr)-1];
			//判断类型

			if(!in_array($type,$this->type)){
				$msg.= '文件类型错误，只允许';
				if(empty($this -> msg)){
					foreach($this->type as $v){
						$msg.=$v.'/';
					}
					$msg = substr($msg,0,-1);
				}else{
					$msg .= $this -> msg;
				}
				
				return array('num'=>0,'msg'=>$msg);
			}
			//判断大小
			if($file['size'] > $this->max_size){
				$msg='文件过大，单文件最大允许'.(($this->max_size/1024)/1024).'M';
				return array('num'=>0,'msg'=>$msg);
			}
			//移动文件
			$_dir=$this->upload_dir.'/'.date('Ymd');
			if(!is_dir($_dir)){
				mkdir($_dir,0777,true);
				file_put_contents($_dir.'/index.php','hhc');
			}
			$date_dir=$_dir.'/';
			
			$new_file = $date_dir.time().rand(100,999).strrchr($file['name'],'.');
			$old_file = $file['name'];
			if(move_uploaded_file($file['tmp_name'],$new_file)){
				chmod($new_file,0777);
				if(!empty($this->stype) && $this->stype==1){
					$info=$this -> getInfo($new_file);
					if(empty($info)){
						return array('num'=>0,'msg'=>'文件上传失败，请使用标准的jpg/gif/png图片');
					}
				}
				
				return array('num'=>1,'new_file'=>$new_file,'old_file'=>$old_file);
			}else
				return array('num'=>0,'msg'=>'文件上传出错，原因未知');
			

		}

		/**
		 *	根据错误号 判断错误原因
		 *	@param Int $num 错误号
		 *	@return String $error_str
		 */
		private function get_error_num($num){
			$error_str = '';
			switch ($num) {
				case  1: $error_str .= '上传的文件大小超出了'.ini_get('upload_max_filesize'); break;
				case  2: $error_str .= '上传文件的大小超过了限制'; break;
				case  3: $error_str .= '文件只有部分被上传'; break;
				case  4: $error_str .= '没有选择上传文件'; break;
				case  6:
				case  7: $error_str .= '上传文件临时目录出错'; break;
			}
			return $error_str;
		}

		private function getInfo($img){
			return getimagesize($img);
		}
	}


