<?php

/******************************************
 * tpl.class 	程序模板引擎
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-06-28 07:35';
 ******************************************/

	class tpl extends tpl_replace_func{
		protected $tpl_vars=array();				//用于存放assign传递过来的值
		protected $complie_file_path;				//缓存文件完整路径
		protected $tpl_file_path;					//模板文件路径
		protected $tpl_left;
		protected $tpl_right;
		protected $temps=null;
		protected $tpl;//用户传递过来的模板

		/**
		 *	assign方法  用于将局部变量的值 传递到本类
		 */
		protected function assign($tpl_var=null,$val=null){
			if(!is_null($tpl_var) && !is_null($val))
				$this->tpl_vars[$tpl_var]=$val;
		}

		/**
		 *	output方法 用于读取和编译文件
		 */
		protected function output($tpl=''){
			$this -> tpl = $tpl;
			$this -> temp();
		}


	}

?>