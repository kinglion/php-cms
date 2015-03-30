<?php

/******************************************
 * tpl_replace_func.class 	程序模板引擎基础类
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-07-29 20:01';
 ******************************************/

	class tpl_replace_func extends tpl_replace_conn {
		
		/**
		 *	替换转译关键词
		 *	@param String $v 原字符串
		 *	@param String $t 替换的内容
		 *	@return String 转译后字符串
		 */
		protected function key_wody(){
			$key_wody=array('/\[|\]|\*|\(|\)|\^|\$/');
			$this->tpl_left=preg_replace_callback($key_wody,"tpl_replace_func::key_wody_1",TPL_LEFT);
			$this->tpl_right=preg_replace_callback($key_wody,"tpl_replace_func::key_wody_2",TPL_RIGHT);
			
		}
		static function key_wody_1($call_back){
			return '\\'.$call_back[count($call_back)-1];
		}
		static function key_wody_2($call_back){
			return '\\'.$call_back[count($call_back)-1];
		}

		/** 
		 *	解析include
		 */
		protected function tpl_include($v){
			$ret = "/{$this->tpl_left}\s*include\s+(.*)\s*{$this->tpl_right}/iU";
			$con = preg_replace_callback($ret,array($this,'tpl_include_reg'),$v);
			return $con;
		}
		protected function tpl_include_reg($call_back){
			if(strpos($call_back[count($call_back)-1],'::')){
				//index::index
				$arr = explode('::',$call_back[count($call_back)-1]);
				$h = isset($arr['0']) ? $arr['0'] : 'index';
				array_shift($arr);
				$c = isset($arr['0']) ? $arr['0'] : 'index';
				$path=dirname(dirname($this->tpl_file_path))."/{$h}/{$c}";
			}else{
				//./header.hhc
				$path = dirname($this->tpl_file_path).'/'.$call_back[count($call_back)-1];
			}
			if(!file_exists($path))
				show_err("文件{$path}不存在");
			$content = file_get_contents($path);
			if(preg_match("/{$this->tpl_left}\s*include\s+(.*)\s*{$this->tpl_right}/iU",$content)){
				$content = $this -> tpl_include($content);
			}
			return $content;
		}

		/**
		 *	解析模板中常量
		 */
		protected function tpl_const($v){
			$ret = '/HHC_(.*)_HHC/U';
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_const_replace_1",$v);

			return $con;
		}
		static function tpl_const_replace_1($call_back){
			return "<?php echo {$call_back[1]}; ?>";
		}

		/**
		 *	解析模板中的变量
		 */
		protected function tpl_vars($v){
			
			$ret = '/'.$this->tpl_left.'\s*(\$|@)([a-zA-Z_][a-zA-Z0-9_]*)\s*'.$this->tpl_right.'/U';
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_vars_replace_1",$v);

			return $con;
		}
		static function tpl_vars_replace_1($call_back){
			$c = $call_back[1]=='$'?'$this->tpl_vars["'.$call_back[2].'"]':'$'.$call_back[2];
			return "<?php echo $c; ?>";
		}

		/**
		 *	替换模板中的数组操作
		 */
		public function tpl_array($v){
			//foreach($arr as $v){}
			$ret = "/{$this->tpl_left}\s*foreach (\\$|@)(.*)\s+(.*)\s*{$this->tpl_right}/Uis";
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_array_replace_1",$v);
			$ret = "/{$this->tpl_left}\s*\\/*foreach\s*{$this->tpl_right}/Uis";
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_array_replace_2",$con);

			$ret = "/{$this->tpl_left}\s*(\\$|@)([a-zA-Z_][a-zA-Z0-9_]*)\\[(.*)\s*{$this->tpl_right}/Uis";
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_array_replace_3",$con);

			return $con;
		}
		static function tpl_array_replace_1($call_back){
			$c = $call_back[1]=='$'?'$this->tpl_vars["'.$call_back[2].'"]':'$'.$call_back[2];
			return "<?php foreach({$c} {$call_back['3']}): ?>";
		}
		static function tpl_array_replace_2($call_back){
			return "<?php endforeach; ?>";
		}
		static function tpl_array_replace_3($call_back){
			$c = $call_back[1]=='$'?"\$this->tpl_vars['{$call_back[2]}'][{$call_back['3']}":"\${$call_back[2]}[{$call_back['3']}";
			return "<?php echo $c; ?>";
		}

		/**
		 *	解析注释
		 */
		protected function tpl_notes($v){
			$ret = "/{$this->tpl_left}\\*(.*)\\*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_notes_replace_1",$v);

			return $con;
		}
		static function tpl_notes_replace_1($call_back){
			return "<?php /*{$call_back[1]}*/ ?>";
		}
		
		/**
		 *	解析用户是否登陆
		 */
		protected function user_login($v){
			$ret = "/{$this->tpl_left}\s*user_login\s*{$this->tpl_right}(.*){$this->tpl_left}\s*\\/user_login\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::user_login_rep",$v);
			
			$ret = "/{$this->tpl_left}\s*user_not_login\s*{$this->tpl_right}(.*){$this->tpl_left}\s*\\/user_not_login\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::user_not_login_rep",$con);

			return $con;
		}
		static function user_login_rep($call_back){
			$str = <<<STR
<?php
	if(!isset(\$_SESSION)){
		if(!empty(\$_COOKIE['sess_oid']))
			session_id(\$_COOKIE['sess_oid']);
		session_start();
	}
	if(!empty(\$_SESSION['user'])){
		?>
		{$call_back['1']}
		<?php
	}
?>
STR;
			return $str;
		}
		static function user_not_login_rep($call_back){
			$str = <<<STR
<?php
	if(!isset(\$_SESSION)){
		if(!empty(\$_COOKIE['sess_oid']))
			session_id(\$_COOKIE['sess_oid']);
		session_start();
	}
	if(empty(\$_SESSION['user'])){
		?>
		{$call_back['1']}
		<?php
	}
?>
STR;
			return $str;
		}
		protected function user_regs($v){
			$ret = "/{$this->tpl_left}\s*user::([a-zA-Z0-9_]+)\s*\\/\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::user_reps",$v);

			return $con;
		}

		static function user_reps($call_back){
			switch($call_back['1']){
				case 'name';
					$str = <<<STR
<?php
	echo empty(\$_SESSION['user']['username'])?\$_SESSION['user']['user_name']:\$_SESSION['user']['username'];
?>
STR;
				break;
				default:
					$str = <<<STR
<?php
	echo \$_SESSION['user']['{$call_back['1']}'];
?>
STR;
				break;
			}
			return $str;
		}


		/**
		 *	解析php
		 */
		protected function tpl_php($v){
			$ret = "/{$this->tpl_left}\s*hhc:php\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_php_replace_1",$v);

			$ret = "/{$this->tpl_left}\s*\\/\s*hhc:php\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_php_replace_2",$con);

			return $con;
		}
		static function tpl_php_replace_1($call_back){
			return "<?php  ";
		}
		static function tpl_php_replace_2($call_back){
			return "  ?>";
		}

		/**
		 *	解析if
		 */
		protected function tpl_judge($v){
			$ret = "/{$this->tpl_left}\s*if(.*)\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_judge_replace_1",$v);
			
			$ret = "/{$this->tpl_left}\s*\\/if\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_judge_replace_2",$con);

			$ret = "/{$this->tpl_left}\s*else\s*if\s*(.*)\s*\\/*\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_judge_replace_3",$con);

			$ret = "/{$this->tpl_left}\s*else\s*\\/*\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_judge_replace_4",$con);

			return $con;
		}
		static function tpl_judge_replace_1($call_back){ 
			$ret = "/(\\$|@)([a-zA-Z0-9_]+)([^\w*]|$|[^\D])/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_judge_replace_01",$call_back['1']);

			return "<?php if({$con}): ?>";
		}
		static function tpl_judge_replace_2($call_back){
			return "<?php endif; ?>";
		}
		static function tpl_judge_replace_3($call_back){
			$ret = "/(\\$|@)([a-zA-Z0-9_]+)([^\w*]|$|[^\D])/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_judge_replace_01",$call_back['1']);

			return "<?php elseif({$con}): ?>";
		}
		static function tpl_judge_replace_4($call_back){
			return "<?php else: ?>";
		}
		static function tpl_judge_replace_01($call_back){
			$c = $call_back[1]=='$'?'$this->tpl_vars["'.$call_back[2].'"]':'$'.$call_back[2];
			return "{$c}{$call_back[3]}";
		}

		/**
		 *	解析信息列表
		 */
		protected function moxing_tag($v){
			$con = $this -> moxing_content_reg($v);
			$con = $this -> moxing_content_ziduan_reg($con);
			$con = $this -> danye_ret($con);
			$con = $this -> biaodan_reg($con);
			$ret = "/{$this->tpl_left}\s*hhc::([a-zA-Z0-9_]+)\s+(.*?)\s*{$this->tpl_right}(.*?){$this->tpl_left}\s*\\/hhc::([a-zA-Z0-9_]+)\s*{$this->tpl_right}/is";
			$con = preg_replace_callback($ret,"tpl_replace_func::moxing_tag_rep",$con);

			$ret = "/{$this->tpl_left}\s*hhc::([a-zA-Z0-9_]+)\s*::\s*(.*?)(->.*?)*\\/\s*{$this->tpl_right}/is";
			$con = preg_replace_callback($ret,"tpl_replace_func::moxing_tag_rep2",$con);

			return $con;
		}	
		static function moxing_tag_rep($call_back){
			if($call_back['1']!=$call_back['4'])
				return $call_back['0'];
			switch ($call_back['1']) {
				case 'artlist':
					//信息列表
					$o = 'tag_artlist';
				break;
				case 'nav':
					//栏目
					$o = 'tag_nav';
					$call_back['3'] = tpl_replace_func :: moxing_tag_nav($call_back['3']);
					$call_back['3'] = tpl_replace_func :: moxing_tag_nav_t($call_back['3']);
				break;
				
				default:
					return $call_back['0'];
			}
			$config = preg_replace_callback('/\s+/',"tpl_replace_func::spaceall_1",$call_back['2']);
			$config = str_replace('"','',$config);
			$config = str_replace('\'','',$config);
			$config = explode(' ',$config);
			foreach($config as $k => $v){
				if(!strpos($v,'=')){
					unset($config[$k]);
				}else{
					$arr = explode('=',$v);
					$config[$arr['0']]=$arr['1'];
					unset($config[$k]);
				}
			}
			require_once 'moxing_tag.class.php';
			$moxing_tag = new moxing_tag();
			return $moxing_tag -> $o($call_back['3'],$config);
		}

		static function spaceall_1(){
			return ' ';
		}

		static function moxing_tag_rep2($call_back){
			$call_back['2'] = str_replace(' ','',$call_back['2']);
			if(!empty($call_back['3']) && strpos($call_back['3'],'->')!==false){
				if(strpos($call_back['3'],'time')!==false){
					$str = str_replace('->','',$call_back['3']);
					$str = str_replace('[','',$str);
					$str = str_replace(']','',$str);
					$str = str_replace('time','',$str);
					$str = str_replace('年','Y',$str);
					$str = str_replace('月','m',$str);
					$str = str_replace('日','d',$str);
					$str = str_replace('时','H',$str);
					$str = str_replace('分','i',$str);
					$str = str_replace('秒','s',$str);
					$str = <<<STR
<?php echo date('$str',\$v['{$call_back['2']}']);
			?>
STR;
				}
			}elseif(in_array($call_back['2'],array('arturl','navurl','target'))){
				if($call_back['2']=='arturl'){
					//内容链接地址
					$s = get_extended_settings();
					if(empty($s['is_static']['v'])){
						$str = <<<STR
<?php
	echo "?h=index&c=moxing_content&con_id={\$v['con_id']}&lanmu_id={\$v['con_lanmu_id']}";
?>

STR;
					}else{
						$str = <<<STR
<?php
	echo "moxing_content-lid{\$v['con_lanmu_id']}-cid{\$v['con_id']}.html";
?>

STR;
					}
				}else if($call_back['2']=='navurl'){
					$s = get_extended_settings();
					if(empty($s['is_static']['v'])){
						$str = <<<STR
<?php if(\$v['nav_type']=='0'){
	echo \$v['nav_link'];
}else if(\$v['nav_type']=='1'){
	echo "index.php?h=index&c=moxing_list&moxing_id={\$v['nav_moxing']}&lanmu_id={\$v['nav_id']}";
}else if(\$v['nav_type']=='2'){
	//模块
}else if(\$v['nav_type']=='100'){
	echo 'index.php';
}

?>
STR;
					}else{
						$str = <<<STR
<?php if(\$v['nav_type']=='0'){
	echo \$v['nav_link'];
}else if(\$v['nav_type']=='1'){
	echo "moxing_list-mid{\$v['nav_moxing']}-lid{\$v['nav_id']}.html";
}else if(\$v['nav_type']=='2'){
	//模块
}else if(\$v['nav_type']=='100'){
	echo 'index.html';
}

?>
STR;
					}
					

				}else if($call_back['2']=='target'){
					$str = <<<STR
<?php
	if(\$v['nav_dakai']=='1'){
		echo 'target="_blank"';
	}
?>
STR;
				}
			}else{
				$str = <<<STR
<?php echo str_replace('_ueditor_page_break_tag_','',\$v['{$call_back['2']}']);
		?>
STR;
			}
			return $str;
		}

		/**
		 *	解析二级导航
		 */
		static function moxing_tag_nav($v){
			$ret = "/##(\w+)##(.*?)end##/is";
			$con = preg_replace_callback($ret,"tpl_replace_func::moxing_tag_nav_rep",$v);

			return $con;
		}
		static function moxing_tag_nav_rep($call_back){
			if($call_back['1']=='id'){
				$call_back['1']="\$v['nav_id']";
			}
			$str = <<<STR
<?php
	\$nava = include_nav();
	foreach(\$nava as \$va){
		if(\$va['nav_xianshi']!='1' || \$va['nav_parent_id']!={$call_back['1']}){
			continue;
		}
		?>
		{$call_back['2']}
		<?php
	}
?>
STR;
			return $str;
		}

		static function moxing_tag_nav_t($v){
			$ret = "/##([a-zA-Z0-9_]+)##/is";
			$con = preg_replace_callback($ret,"tpl_replace_func::moxing_tag_nav_t_rep",$v);

			return $con;
		}

		static function moxing_tag_nav_t_rep($call_back){
			if(in_array($call_back['1'],array('arturl','navurl','target'))){
				if($call_back['1']=='arturl'){
					//内容链接地址
					$s = get_extended_settings();
					if(empty($s['is_static']['v'])){
						$str = <<<STR
<?php
	echo "?h=index&c=moxing_content&con_id={\$va['con_id']}&lanmu_id={\$va['con_lanmu_id']}";
?>

STR;
					}

				}else if($call_back['1']=='navurl'){
					$str = <<<STR
<?php if(\$va['nav_type']=='0'){
	echo \$va['nav_link'];
}else if(\$va['nav_type']=='1'){
	echo "index.php?h=index&c=moxing_list&moxing_id={\$va['nav_moxing']}&lanmu_id={\$va['nav_id']}";
}else if(\$va['nav_type']=='2'){
	//模块
}else if(\$va['nav_type']=='100'){
	echo 'index.php';
}

?>
STR;
				}else if($call_back['1']=='target'){
					$str = <<<STR
<?php
	if(\$va['nav_dakai']=='1'){
		echo 'target="_blank"';
	}
?>
STR;
				}
			}else{
				$str = <<<STR
<?php echo \$va['{$call_back['1']}'];
		?>
STR;
			}
			return $str;
		}

		/**
		 *	解析设置和扩展设置
		 */
		protected function tpl_setup($v){
			$ret = "/{$this->tpl_left}\s*hhc::set_up::([a-zA-Z0-9_]+)\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::tpl_setup_rep",$v);

			return $con;
		}
		static function tpl_setup_rep($call_back){
			if(in_array($call_back['1'],array('beian','lang_title','short_title','tongji','logo','close_tishi','jinbi','jifen','jindou'))){
		$arr = array();
		//获取基本信息
		if(is_file('./sundry/cache/json/config.php')){
			include './sundry/cache/json/config.php';
			$arr = json_decode($json,true);
		}else{
			$pdo = get_pdo();
			$res = $pdo -> query('select * from '.DB_PRE."config");
			if(empty($res)){
				show_err('您可能修改过数据库，导致程序出错！');
			}
			foreach($res as $v){
				$arr[$v['id']] = $v['v'];
			}
			unset($res);
			//保存数据
			$data = json_encode($arr);
			$json=<<<JSONS
<?php
		
		\$json = '$data';
JSONS;
			file_put_contents('./sundry/cache/json/config.php',$json);
		}
				switch($call_back['1']){
					case 'beian':
						$str=$arr['5'];
					break;
					case 'lang_title':
						$str = $arr['3'];
					break;
					case 'short_title':
						$str = $arr['4'];
					break;
					case 'tongji':
						$str = $arr['6'];
					break;
					case 'logo':
						$str = $arr['7'];
					break;
					case 'close_tishi':
						$str = $arr['9'];
					break;
					case 'jifen':
						$str = $arr['42'];
					break;
					case 'jinbi':
						$str = $arr['43'];
					break;
					case 'jindou':
						$str = $arr['44'];
					break;
				}			
			}else{
				$arr = array();
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
JSONS;
			file_put_contents('./sundry/cache/json/extended_settings.php',$json);

				}
				$str = isset($arr[$call_back['1']]['v'])?$arr[$call_back['1']]['v']:'';
			}

			return $str;
		}

		/**
		 *	解析内容
		 */
		protected function moxing_content_reg($v){
			$ret = "/{$this->tpl_left}\s*hhc::content\s*{$this->tpl_right}(.*?){$this->tpl_left}\s*\\/hhc::content\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::moxing_content_rep",$v);

			return $con;
		}
		static function moxing_content_rep($call_back){
			include "./sundry/cache/json/nav.php";
			$json = json_decode($json,true);
			$moxing_id = $json[$_GET['lanmu_id']]['nav_moxing'];
			include './sundry/cache/json/moxing/moxing.php';
			$json = json_decode($json,true);
			$tb_name = DB_PRE.$json[$moxing_id]['moxing_ziduan_table_name'];
			//根据id获取应该在哪个文件夹
			if(ceil($_GET['con_id'])<=1000){
				$o = 1000;
			}else{
				$o = ceil($_GET['con_id']/1000)*1000;
			}
			$str = <<<STR
	<?php
		\$dir = "./sundry/cache/data/moxing/{$tb_name}/content/{$o}/";
		\$path = "{\$dir}{\$_GET['con_id']}.php";
		if(is_file(\$path)){
			include \$path;
			\$res = json_decode(\$json,true);
			\$z = json_decode(\$json2,true);
		}
		if(empty(\$res)){
			\$pdo = get_pdo();
			\$res = \$pdo -> query("select * from `{$tb_name}` where `con_id` = '{\$_GET['con_id']}'",'');
			include './sundry/cache/json/moxing/ziduan/{$moxing_id}.php';
			\$ziduan = json_decode(\$json,true);
			\$z = array();
			foreach(\$ziduan as \$v){
				\$z[\$v['en_name']]=\$v['moxing_type'];
			}
			
			foreach(\$res as \$k => \$v){
				if(!empty(\$z[\$k]) && \$z[\$k]=='8'){
					//html文本
					\$res[\$k] = explode('_ueditor_page_break_tag_',\$res[\$k]);
				}
			}
			//产生缓存
			mk_dir(\$dir);
			\$d = json_encode(\$res);
			\$e = json_encode(\$z);
			\$json = <<<JSON
<?php 
_%hhc%_json = <<<J
	\$d
J;

_%hhc%_json2 = <<<J
	\$e
J;

?>
JSON;
			\$json = str_replace('_%hhc%_','$',\$json);
			//file_put_contents(\$path,\$json);
		}


	?>
	{$call_back['1']}
STR;
			return $str;
		}
		
		/**
		 *	解析内容字段
		 */
		protected function moxing_content_ziduan_reg($v){
			$ret = "/{$this->tpl_left}hhc::content::([a-zA-Z0-9_]+)\s*(->.*?)*\\/{$this->tpl_right}/U";
			$con = preg_replace_callback($ret,"tpl_replace_func::moxing_content_ziduan_rep",$v);

			return $con;
		}
		static function moxing_content_ziduan_rep($call_back){
			$call_back['1'] = str_replace(' ','',$call_back['1']);
			if(!empty($call_back['2']) && strpos($call_back['2'],'->')!==false){
				if(strpos($call_back['2'],'time')!==false){
					$str = str_replace('->','',$call_back['2']);
					$str = str_replace('[','',$str);
					$str = str_replace(']','',$str);
					$str = str_replace('time','',$str);
					$str = str_replace('年','Y',$str);
					$str = str_replace('月','m',$str);
					$str = str_replace('日','d',$str);
					$str = str_replace('时','H',$str);
					$str = str_replace('分','i',$str);
					$str = str_replace('秒','s',$str);
					$str = <<<STR
<?php echo date('$str',\$res['{$call_back['1']}']);
			?>
STR;
				}
			}else if(in_array($call_back['1'],array())){
				//
			}else{
				$str = <<<STR
<?php

	if(!empty(\$z['{$call_back['1']}']) && \$z['{$call_back['1']}']=='8'){
		//text
		\${$call_back['1']}=empty(\$_GET['{$call_back['1']}_page'])?'0':ceil(\$_GET['{$call_back['1']}_page']);
		//获取到第几页 
		\$ko = \${$call_back['1']}>0?\${$call_back['1']}-1:0;
		\$count = count(\$res['{$call_back['1']}'])-1;
		if(\$count<\$ko)
			\$ko = \$count;
		echo \$res['{$call_back['1']}'][\$ko];
				//构造分页字符串
				\$k_page = "{$call_back['1']}_page";
				\$get = \$_GET;
				unset(\$get['p']);
				\$canshu=get_url(\$get,1,\$k_page);
				if(1==1){
					//不使用静态
					\$t=\$canshu.'&'.\$k_page.'=';
				}else if(1==2){
					//使用伪静态
				}
				\${$call_back['1']}_pages = '';
				\$_GET['{$call_back['1']}_page']=empty(\$_GET['{$call_back['1']}_page'])?1:\$_GET['{$call_back['1']}_page'];
				\$zop=ceil(\$_GET['{$call_back['1']}_page']);
				\$zuihou = count(\$res['{$call_back['1']}']);
				if(\$zop<=1){
					\${$call_back['1']}_pages .= '<span class="page_1 shouye">首页</span>';
					\${$call_back['1']}_pages .= '<span class="page_1 shangyiye">上一页</span>';
				}else{
					\$oop = \$zop-1;
					\${$call_back['1']}_pages .= "<a class='page_1 shouye' href='{\$t}1'>首页</a>";
					\${$call_back['1']}_pages .= "<a class='page_1 shangyiye' href='{\$t}{\$oop}'>上一页</a>";
				}


					\$num = 5;
					\$num = \$num<\$zuihou?\$num:\$zuihou;
					\$pageoffset = ceil((\$num-1)/2);

					if(\$zuihou>\$num){
						if(\$zop<=\$pageoffset){
							\$left=1;  
							\$max_p = \$num;
						}else{
							if(\$zop+\$pageoffset>=\$zuihou+1){
								\$left = \$zuihou-\$num+1;
								\$max_p=\$zuihou;
							}else{//左右偏移都存在时的计算
								\$left = \$zop-\$pageoffset;  
								\$max_p = \$zop+\$pageoffset;
							}	
						}	
					}else{
						\$left=1;
						\$max_p=\$num;
					}
					for(\$i=\$left;\$i<=\$max_p;\$i++){
						if(\$i==\$zop){
							\${$call_back['1']}_pages .= '<span class="page_1 dangqianye">'.\$i.'</span>';
						}else{
							\${$call_back['1']}_pages .= "<a class='page_1' href='{\$t}{\$i}'>{\$i}</a>";
						}
					}
					
					if(\$zuihou<=\$zop){
						\${$call_back['1']}_pages .= '<span class="page_1 xiayiye">下一页</span>';
						\${$call_back['1']}_pages .= '<span class="page_1 weiye">尾页</span>';
					}else{
						\$ooz = \$zop+1;
						\${$call_back['1']}_pages .= "<a class='page_1 xiayiye' href='{\$t}{\$ooz}'>下一页</a>";
						\${$call_back['1']}_pages .= "<a class='page_1 weiye' href='{\$t}{\$zuihou}'>尾页</a>";
					}



	}else{
		echo \$res['{$call_back['1']}'];
	}
?>
STR;
			}
			return $str;
		}
		

		/**
		 *	解析单页
		 */
		protected function danye_ret($v){
			$ret = "/{$this->tpl_left}\s*danye::title\s*\\/\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::danye_rep1",$v);

			$ret = "/{$this->tpl_left}\s*danye::content\s*\\/\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::danye_rep2",$con);

			$ret = "/{$this->tpl_left}\s*danye::list\s*{$this->tpl_right}(.*?){$this->tpl_left}\s*\\/danye::list\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::danye_rep3",$con);

			$ret = "/{$this->tpl_left}\s*danye::list::([a-zA-Z0-9_]+)\s*\\/\s*{$this->tpl_right}/Us";
			$con = preg_replace_callback($ret,"tpl_replace_func::danye_rep4",$con);

			return $con;
		}
		static function danye_rep1($call_back){
			$str = <<<STR
<?php
	include './sundry/cache/json/custom/danye.php';
	\$json = json_decode(\$json,true);
	echo \$json[\$_GET['k']]['title'];
?>
STR;
			return $str;
		}
		static function danye_rep2($call_back){
			$str = <<<STR
<?php
	include './sundry/cache/json/custom/danye.php';
	\$json = json_decode(\$json,true);
	echo \$json[\$_GET['k']]['content'];
?>
STR;
			return $str;
		}
		static function danye_rep3($call_back){
			$str = <<<STR
<?php
	include './sundry/cache/json/custom/custom.php';
	\$json = json_decode(\$json,true);
	foreach(\$json as \$v){
		if(\$v['type']==='1'){
			?>
			{$call_back['1']}
			<?php
		}
	}
?>
STR;
			return $str;
		}
		static function danye_rep4($call_back){
			$k = $call_back['1'];
			$str = <<<STR
<?php
	if(in_array('{$k}',array('url'))){
		if('{$k}'=='url'){
			echo "?h=custom&c=danye&k={\$v['en_name']}";
		}
	}else{
		echo \$v['{$k}'];
	}
?>
STR;
			return $str;
		}


		protected function biaodan_reg($v){
			$ret = "/{$this->tpl_left}\s*biaodan::list\s*(.*?)\s*{$this->tpl_right}(.*?){$this->tpl_left}\s*\\/biaodan::list\s*{$this->tpl_right}/is";
			$con = preg_replace_callback($ret,"tpl_replace_func::biaodan_rep",$v);

			$ret = "/{$this->tpl_left}\s*biaodan::([a-zA-Z0-9_]+)\s*\\/\s*{$this->tpl_right}/is";
			$con = preg_replace_callback($ret,"tpl_replace_func::biaodan_rep2",$con);

			return $con;
		}	
		static function biaodan_rep($call_back){
			$config = preg_replace_callback('/\s+/',"tpl_replace_func::spaceall_1",$call_back['1']);
			$config = str_replace('"','',$config);
			$config = str_replace('\'','',$config);
			$config = explode(' ',$config);
			foreach($config as $k => $v){
				if(!strpos($v,'=')){
					unset($config[$k]);
				}else{
					$arr = explode('=',$v);
					$config[$arr['0']]=$arr['1'];
					unset($config[$k]);
				}
			}
			$config['name'] = empty($config['name']) ? '' : $config['name'];
			
			$str = <<<STR
<?php
	\$path = '';
	\$c_name = '{$config['name']}';
	\$tb_name = empty(\$c_name) ? \$_GET['k'] : \$c_name;
	if(is_file(\$path)){
		include \$path;
	}else{
		\$pdo = get_pdo();
		\$res = \$pdo -> query('select * from `'.DB_PRE."myform` where xianshi=1 order by `paixu` desc ");
		\$data = array();
		foreach(\$res as \$v){
			if(!empty(\$v['hc'])){
				if(\$v['hc']=='1'){
					//reg
					\$data['reg'][\$v['id']]=\$v;
				}
			}else{
				if(!empty(\$v['k'])){
					\$data[\$v['k']][\$v['id']]=\$v;
				}
			}
		}
	}
		?>
		<input type="hidden" name="hhc_k" value="<?php echo \$tb_name; ?>" />
		<?php
		\$i=0;
		foreach(\$data[\$tb_name] as \$v){
			\$i++;
			?>
			{$call_back['2']}
			<?php
		}
?>
STR;
			return $str;
		}

		static function biaodan_rep2($call_back){
			switch($call_back['1']){
				case 'type':
					$str = <<<STR
<?php
	switch(\$v['type']){
		case '1':
		case '101':
		case '102':
		case '103':
		case '104':
			echo '<input class="text '.\$v['en_name'].'" type="text" name="'.\$v['en_name'].'" />';
		break;
		case '2':
			echo '<textarea class="textarea '.\$v['en_name'].'" name="'.\$v['en_name'].'"></textarea>';
		break;
		case '3':
		case '107':
			echo '<input class="'.\$v['en_name'].'" type="file" name="'.\$v['en_name'].'" />';
		break;
		case '4':
			\$arr = explode(',',\$v['defaults']);
			foreach(\$arr as \$vf){
				echo "<input class='{\$v['en_name']}' value='{\$vf}' type='checkbox' name='{\$v['en_name']}[]' />&nbsp;\$vf";
			}
		break;
		case '5':
			\$arr = explode(',',\$v['defaults']);
			foreach(\$arr as \$vf){
				echo "<input class='{\$v['en_name']}' value='{\$vf}' type='radio' name='{\$v['en_name']}' />&nbsp;\$vf";
			}
		break;
		case '6':
			\$arr = explode(',',\$v['defaults']);
			echo '<select class="'.\$v['en_name'].'" name="'.\$v['en_name'].'">';
			foreach(\$arr as \$vf){
				echo "<option value='{\$vf}'>\$vf</option>";
			}
			echo '</select>';
		break;

		case '105':
			echo '<input class="'.\$v['en_name'].'" checked="checked" value="1" name="'.\$v['en_name'].'" type="radio">&nbsp;男&nbsp;&nbsp;&nbsp;<input value="0" name="'.\$v['en_name'].'" type="radio">&nbsp;女';
		break;
		case '106':
			//获取年份
			\$year=ceil(date('Y',time()));
			\$month=ceil(date('m',time()));
			\$day=ceil(date('d',time()));
			echo "<select class='{\$v['en_name']}' name='{\$v['en_name']}[year]'>";
			for(\$l=\$year;\$l>\$year-100;\$l--){
				echo "<option>{\$l}</option>";
			}
			echo '</select>&nbsp;<span>年</span>&nbsp;';

			echo "<select class='{\$v['en_name']}' name='{\$v['en_name']}[month]'>";
			for(\$l=1;\$l<13;\$l++){
				echo "<option>{\$l}</option>";
			}
			echo '</select>&nbsp;<span>月</span>&nbsp;';

			echo "<select class='{\$v['en_name']}' name='{\$v['en_name']}[day]'>";
			for(\$l=1;\$l<32;\$l++){
				echo "<option>{\$l}</option>";
			}
			echo '</select>&nbsp;<span>日</span>';

		break;
	}
?>
STR;
				break;
				default :
					$str = "<?php echo \$v['{$call_back['1']}'] ?>";
				break;
			}
			return $str;
		}



	}

?>