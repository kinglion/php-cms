<?php

	class moxing_tag{
		public function tag_artlist($con,$config){
			$list_num=10;//取出多少条
			$page_num=5;//分页数字显示多少个
			$orderby='desc';
			$lanmu_id = !empty($_GET['lanmu_id']) ? $_GET['lanmu_id'] : '0'; 
			$moxing_id = '0';
			$moxing_name='';
			$cache = 1;
			$clear_cache = 'auto';
			$cache_time = 0;
			$page_key = 'hhc_'.rand(10,1000);
			$even_user = 0;
			$zox = '2';
			$sql = '';
			$user_id='0';

			//修改配置
			foreach($config as $k => $v){
				switch($k){
					case 'moxing_name':
						$moxing_name = $v;
					break;
					case 'moxing_id':
						$moxing_id = $v;
					break;
					case 'page_num':
						$page_num = ceil($v);
					break;
					case 'list_num':
						$list_num = ceil($v);
					break;
					case 'order_by':
						$orderby = $v;
					break;
					case 'lanmu_id':
						$lanmu_id = $v;
					break;
					case 'cache':
						if($v=='false')
							$cache = 0;
					case 'even_user':
						if($v=='true')
							$even_user = 1;
					break;
					case 'clear_cache':
						if(in_array($v,array('auto','time')))
							$clear_cache = $v;
					break;
					case 'cache_time':
						$cache_time = ceil($v);
					break;
					case 'page_key':
						$page_key = $v;
					break;
					case 'page_type':
						$zox = $v;
					break;
					case 'sql':
						$sql = $v;
					break;
					case 'user_id':
						$user_id = $v;
					break;
				}
			}
			//先看看使用哪个模型
			include './sundry/cache/json/moxing/moxing.php';
			$moxing = json_decode($json,true);
			unset($json);
			if(!empty($lanmu_id)){
				//优先使用lanmu_id
				include './sundry/cache/json/nav.php';
				$nav = json_decode($json,true);
				unset($json);
				if(!empty($nav[$lanmu_id]['nav_moxing']) && $nav[$lanmu_id]['nav_type']==='1'){
					//是正常模型栏目
					$tb_name = DB_PRE.$moxing[$nav[$lanmu_id]['nav_moxing']]['moxing_ziduan_table_name'];
				}
			}
			if(empty($tb_name) && !empty($moxing_id)){
				$tb_name = DB_PRE.$moxing[$moxing_id]['moxing_ziduan_table_name'];
			}
			if(empty($tb_name) && !empty($moxing_name)){
				$tb_name = DB_PRE.$moxing_name;
			}

			if(empty($tb_name))  return $con;
			if($even_user){
				//连表
				$type = '`a`.*,`b`.*';
			}else{
				$type = '*';
			}
			if(!empty($sql)){
				$sql = str_replace('#','=',$sql);
				$sql = str_replace(',',' and ',$sql);
				$w = $sql;
			}else{
				$w='1';
			}
			$w .= ' and `con_quanxian` = "0" ';
			if(!empty($lanmu_id))
				$w .= " and `con_lanmu_id` = {$lanmu_id} ";
			if(!empty($user_id))
				$w .= " and `con_user_id` = {$user_id} ";
			$order = " order by `con_id` {$orderby}";
			$even_arr = array(
					array('table_k'=>'b','table_name'=>'`'.DB_PRE.'user`','where'=>'on a.con_user_id=b.user_id'),
				);
			$even_arr = json_encode($even_arr);
			$str = <<<STR
	<?php  
		/*if($cache){
			\$path = './sundry/cache/data/moxing/{$tb_name}/list/{$lanmu_id}/{$page_key}.php';
			if(is_file(\$path)){
				\$o = true;
				//如果是根据时间更新数据  那么就计算时间
				if('$clear_cache'=='time'){
					\$mtime = filemtime(\$path);
					\$time = time();
					\$cache_time = $cache_time;
					if(\$time - \$mtime > $cache_time){
						//缓存超时
						\$o = false;
					}
				}
				if(\$o && $cache){
					include \$path;
					\$res = json_decode(\$json_res,true);
				}
			}
		}*/

		if(empty(\$res)){
			//说明在上面代码中没有正常使用缓存数据
			\$page = new page('`{$tb_name}`','{$type}','{$w}'.'{$order}',{$list_num},'{$page_key}',{$even_user},'a',json_decode('$even_arr',true));
			if($zox=='0')
				\$res = \$page -> page_1();
			else if($zox == '1')
				\$res = \$page -> page_2({$page_num},0);
			else if($zox == '2')
				\$res = \$page -> page_2({$page_num},1);
			/*\$json_res = json_encode(\$res);
			if($cache){
				\$str = '<?php \$json_res = '."'\$json_res'".';';

				mk_dir('./sundry/cache/data/moxing/{$tb_name}/list/{$lanmu_id}');
				file_put_contents(\$path,\$str);
			}*/
		}
			\$data = !empty(\$res['0']) ? \$res['0'] : array();
			\$$page_key = !empty(\$res['1']) ? \$res['1'] : '';
			unset(\$res);
			unset(\$json_res);
			/*//获取评论数量
			\$pinglun_id = '';
			foreach(\$data as \$v){
				\$pinglun_id .= "{\$v['con_id']},";
			}
			\$pinglun_arr = explode(',',trim(\$pinglun_id,','));
			sort(\$pinglun_arr);
			\$pinglun_id = implode(',',\$pinglun_arr);
			\$pdo = get_pdo();
			\$pinglun = \$pdo -> query('select sum(),art_id from '.DB_PRE."pinglun where art_id in (\$pinglun_id)");
			v(\$pinglun);

v(\$data);exit;*/
			foreach(\$data as \$v){
				?>
					{$con}
				<?php
			}

	?>
STR;

			return $str;
		}

		public function tag_nav($con,$config){
			//v($config);
			$str = <<<STR
<?php
	\$nav = include_nav();
	foreach(\$nav as \$v){
		if(\$v['nav_xianshi']!='1' || \$v['nav_parent_id']!='0'){
			continue;
		}
		?>
		{$con}
		<?php
	}
?>
STR;
			return $str;
		}
	}