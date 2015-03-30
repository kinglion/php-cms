<?php

/******************************************
 * img.class.php 	图片处理类
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-08-19 10:18';
 ******************************************/

	class img{
		private $img;
		private $old_info;
		public $old_w;
		public $old_h;
		private $pre;
		private $su;

		/**
		 *	构造方法 初始化部分参数
		 *	@param String $img 图像地址
		 *	@param String $pre 更改后的前缀
		 *	@param String $pre 更改后的后缀
		 */
		public function __construct($img,$pre='',$su=''){
			if(!file_exists($img))
				return array('0',"图片 $img 不存在");
			$this->img=$img;
			$this->old_info = getimagesize($img);
			if(empty($this->old_info))
				return array(0,"图片 $img 信息获取失败 建议使用 jpg png 或 gif 图片");
			$this->old_w = $this->old_info[0];//原图宽
			$this->old_h = $this->old_info[1];//原图高
			$this->pre=$pre;
			$this->su=$su;
		}

		/**
		 *	图片缩放
		 */
		public function __zoom($max_w =100,$max_h=100,$_bg=array(255,255,255)){
			if($this->old_w/$max_w > $this->old_h/$max_h){
				//以宽为标准
				$dst_w = $max_w;//
				$dst_h = $dst_w * ($this->old_h/$this->old_w);//按照原图的宽高比计算得到！
			} else {
				//以高为标准
				$dst_h = $max_h;
				$dst_w = $dst_h * ($this->old_w/$this->old_h);
			}

			//创建资源
			switch($this->old_info[2]){
				case 1: //gif
					$old_img = imagecreatefromgif($this->img);
					break;
				case 2: //jpg
					$old_img = imagecreatefromjpeg($this->img);
					break;
				case 3: //png
					$old_img = imagecreatefrompng($this->img);
					break;
				default:
					return array(0,"图片类型错误！");
			}

			$dst_img = imagecreatetruecolor($max_w,$max_h);//目标资源

			$bgcolor=imagecolorallocate($dst_img,$_bg[0],$_bg[1],$_bg[2]);//填充背景色 防止图片其他地方有空白
		
			imagefill($dst_img,0,0,$bgcolor);

			imagecopyresampled($dst_img,$old_img,($max_w-$dst_w)/2,($max_h-$dst_h)/2,0,0,$dst_w,$dst_h,$this->old_w,$this->old_h);//执行

			$picinfo = pathinfo($this->img);
			$newpicname= $picinfo["dirname"]."/".$this->pre.$picinfo["basename"].$this->su;
			
			switch($this->old_info[2]){
				case 1:
					imagegif($dst_img,$newpicname);
					break;
				case 2:
					imagejpeg($dst_img,$newpicname);
					break;
				case 3:
					imagepng($dst_img,$newpicname);
					break;
			}
			chmod($newpicname,0777);
			
			imagedestroy($old_img);
			imagedestroy($dst_img);
	
			return $newpicname;
		}


		/**
		 *	图片水印
		 *	@param String $water 水印图片的路径
		 *	@param Int $pos 水印位置 1左上 2右上 3左下 4右下
		 *	@param Int $touming 水印的透明度 100为不透明 0为完全透明 
		 */
		public function water($water='2.jpg',$pos=3,$touming=100){
			if(!file_exists($water))
				die("图片{$water}不存在");
			$info = getimagesize($water);
			if(empty($info))
				die("图片 $water 信息获取失败 建议使用 jpg png 或 gif 图片");
			if($info[0] > $this->old_w || $info[1] > $this->old_h)
				die('水印图片的宽度或高度 超过了原图片的宽度或高度');
			$old_img = 'imagecreatefrom'.substr($this->old_info['mime'],strpos($this->old_info['mime'],'/')+1);
			$new_img = 'imagecreatefrom'.substr($info['mime'],strpos($this->old_info['mime'],'/')+1);
			if(!function_exists($old_img) || !function_exists($new_img))
				return false;

			//动态加载函数 创建画布
			$o_img = $old_img($this->img);
			$n_img = $new_img($water);
			//计算水印添加的坐标
			switch ($pos) {
				case '1':
					//左上
					$p_x = 0;
					$p_y = 0;
					break;
				case '2':
					//右上
					$p_x = $this->old_w - $info[0];
					$p_y = 0;
					break;
				case '3':
					//左下
					$p_x = 0;
					$p_y = $this->old_h - $info[1];
					break;
				case '4':
					//右下
					$p_x = $this->old_w - $info[0];
					$p_y = $this->old_y - $info[1];
					break;
				default:
					$p_x = 0;
					$p_y = $this->old_y - $info[1];
					break;
			}
			//加水印
			imagecopymerge($o_img,$n_img,$p_x,$p_y,0,0,$info[0],$info[1],$touming);
			$c = 'image'.substr($info['mime'],strpos($this->old_info['mime'],'/')+1);

			$e=$c($o_img,$this -> img);
			imagedestroy($o_img);
			imagedestroy($n_img);
			

		}

		/**
		 *	获取缩放后的宽高
		 */
		public function w_h($w=100,$h=50){
			if($this -> old_w > $w){
				//宽度超出
				$bili = $this -> old_w / $w;
				$this -> old_h = $this -> old_h / $bili;
				$this -> old_w = $w;
			}
			if($this -> old_h > $h){
				//高度超出
				$bili = $this -> old_h / $h;
				$this -> old_w = $this -> old_w / $bili;
				$this -> old_h = $h;
			}
			return array('width'=>$this->old_w,'height'=>$this->old_h);
		}


	}

