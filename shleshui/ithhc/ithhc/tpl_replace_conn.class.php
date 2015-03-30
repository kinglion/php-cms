<?php

/******************************************
 * tpl_replace_func.class 	程序模板引擎应用类
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-07-29 20:02';
 ******************************************/

	class tpl_replace_conn{

		protected function temp(){
			$m='';
			if(strstr($this -> tpl,'/')){
				$arr=explode("/",$this -> tpl);
				$m = !empty($arr['0']) ? $arr['0'] : '';
				array_shift($arr);
				$this -> tpl= !empty($arr['0']) ? $arr['0'] : 'index';
			}else if(empty($this -> tpl) || !is_string($this -> tpl)){
				$this -> tpl=!empty($_GET['c'])?$_GET['c']:'index';
			}

			//判断是否开启多模板 并获取模板路径
			if(TEMPS && !empty($this->temps)){
				//开启了多模板
				$this->tpl_file_path = empty($m)?APP_DIR.'/box/tpl/'.$this->temps.'/'.substr(get_class($this),0,-4).'/'.$this -> tpl.'.'.SUFFIX:APP_DIR.'/box/tpl/'.$this->temps.'/'.$m.'/'.$this -> tpl.'.'.SUFFIX;			
			}else{
				$this->tpl_file_path = empty($m)?APP_DIR.'/box/tpl/'.substr(get_class($this),0,-4).'/'.$this -> tpl.'.'.SUFFIX:APP_DIR.'/box/tpl/'.$m.'/'.$this -> tpl.'.'.SUFFIX;
			}

			/**
			 *	判断模板文件是否存在
			 */
			if(!file_exists($this->tpl_file_path)){
				show_err("模板文件{$this->tpl_file_path}不存在");
			}

			//获取缓存路径 并创建目录
			$this->complie_file_path = CACHE_DIR.'/temp/'.APP_DIR.'/cache_'.get_class($this).'_'.$this -> tpl.'.php';
			mk_dir(dirname($this->complie_file_path));

			if(TEMP_CACHE){
				//缓存开启
				if(!file_exists($this->complie_file_path)||filemtime($this->tpl_file_path)>filemtime($this->complie_file_path))
					$this -> mk_file();
				
			}else
				$this -> mk_file();
			include $this->complie_file_path;
			return false;
		}

		/**
		 * mk_file 用于生成编译文件
		 */
		protected function mk_file($tpl=true,$tpl_contents=''){
			$this->key_wody();
			if($tpl)
				$tpl_contents = file_get_contents($this->tpl_file_path);
			//替换内容
			$tpl_contents = $this -> tpl_include($tpl_contents);
			$tpl_contents = $this -> tpl_const($tpl_contents);
			$tpl_contents = $this -> tpl_vars($tpl_contents);
			$tpl_contents = $this -> tpl_array($tpl_contents);
			$tpl_contents = $this -> tpl_judge($tpl_contents);
			$tpl_contents = $this -> tpl_notes($tpl_contents);
			$tpl_contents = $this -> tpl_php($tpl_contents);
			$tpl_contents = $this -> tpl_setup($tpl_contents);
			$tpl_contents = $this -> user_login($tpl_contents);
			$tpl_contents = $this -> user_regs($tpl_contents);
			
			$tpl_contents = $this -> moxing_tag($tpl_contents);
			
			if($tpl){
				//生成编译文件  
				file_put_contents($this->complie_file_path,$tpl_contents);
				chmod($this->complie_file_path,0777);
			}else{
				return $tpl_contents;
			}
		}

		
	}

?>