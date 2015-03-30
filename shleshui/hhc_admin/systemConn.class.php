<?php

	class systemConn extends Conn{

		/**
		 *	邮件配置
		 */
		public function mail(){
			$this -> output();
		}
		public function mail_server_submit(){
			$pdo = get_pdo();
			foreach($_POST as $k => $v){
				$row = $pdo -> sql('update `'.DB_PRE."mail` set `v` = '{$v}' where `k` = '{$k}'");
			}
			alert(1,0,null,'修改成功');
		}
		public function mail_test_submit(){
			$pdo = get_pdo();
			$res = $pdo -> query('select * from `'.DB_PRE."mail`");
			$data = array();
			foreach($res as $v){
				$data[$v['k']] = $v;
			}
			$res=sendmail($data['server']['v'],$data['user_name']['v'],$data['user_pwd']['v'],$data['mail']['v'],'郝海川博客-测试邮件','欢迎使用郝海川博客系统！','欢迎使用郝海川博客系统，如果您接收到这封邮件，说明您的邮箱已经配置成功！如果您有任何疑问，可以登录官方论坛提问http://bbs.ithhc.cn。郝海川博客官方网址：http://www.ithhc.cn。感谢您的使用！',$_POST['mail']);
			if($res===true)
				alert(1,0,null,'邮件发送成功，请检查邮箱，如果没有邮件，请检查回收站/垃圾箱等！');
			else
				alert(0,0,null,"邮件发送失败：{$res}",1);
		}

		public function upgrade(){
			$this -> output();
		}
		public function upgrade_submit(){
			$pdo = get_pdo();
			$bb_res = $pdo -> query('select * from '.DB_PRE."config where id='49' limit 1",'');
			$bb_data=file_get_contents("http://upgrade.blog.ithhc.cn/data1.php?k={$bb_res['v']}");
			if(empty($bb_data))
				die('无法访问！');
			if($bb_data=='没有新版本')
				die('没有更新的版本 不能升级');
			$str = str_replace('.','_',$bb_data);
			$up_str = file_get_contents("http://upgrade.blog.ithhc.cn/data/data{$str}.hhcdata");
			file_put_contents('./sundry/cache/data/updata.php',$up_str);
			require './sundry/cache/data/updata.php';
			if(empty($arr) && !is_array($arr))
				die('内部错误，暂时无法升级');
			//$time = date('Y-m-d-H-i');
			foreach($arr as $v){
				$vs = $str.'/'.$v;
				$arr2 = explode('/',$v);
				$file_name = $arr2[count($arr2)-1];
				unset($arr2[count($arr2)-1]);
				$v2 = './'.implode('/',$arr2);
				/*//先把需要升级的文件进行备份
				mk_dir("./sundry/updata/{$str}{$v2}");
				if(!copy("./{$v}","./sundry/updata/{$str}/{$v}")){
					die('操作失败，请检查所有目录及文件是否是0777权限');
				}*/
				$r1 = "http://upgrade.blog.ithhc.cn/up/{$vs}.txt";
				$r2 = "{$v2}";
				$r3 = "{$file_name}";
				$row = @unlink($r2.'/'.$r3);
				$res = getFile($r1,$r2,$r3,1);
			}

			foreach($sql_arr as $v){
				$pdo -> sql($v);
			}
			
			//修改数据库的信息
			$pdo -> sql('update '.DB_PRE."config set v = '{$bb_data}' where id = '49'");
			alert(1,0,'?h=system&c=upgrade',"升级成功");
		}

		public function huancun(){
			$this -> output();
		}
		public function huancun_submit(){
			if(empty($_POST['huancun'])){
				alert(1,0,'?h=system&c=huancun',"清除成功");
			}
			$huancun = array();
			foreach($_POST['huancun'] as $v){
				$huancun [$v] = 1;
			}
			
			if(!empty($huancun['moban'])){
				$res = delDirAndFile('./sundry/cache/temp');
			}
			if(!empty($huancun['shuju'])){
				$res = delDirAndFile('./sundry/cache/data/moxing',0);
			}
			alert(1,0,'?h=system&c=huancun',"清除成功");
		}

		public function sql_backup(){
			$this -> output();
		}
		public function sql_backup_submit(){
			set_time_limit(0);
			$db_pre = DB_PRE;
			$db_name = DB_NAME;
			$pdo = get_pdo();
			$tables = $pdo -> query('show tables');
			$create_table_sql = "";
			$drop_table_sql = '';
			$db_mange = new db_manage(DB_HOST,DB_USER_NAME,DB_PASSWORD,DB_NAME,'utf8');
			$db_mange->backup();
			/*foreach($tables as $v){
				$tb_name = $v["Tables_in_{$db_name}"];
				$tb_create = $pdo -> query("show create table {$tb_name}",'');
			}*/
			/*foreach($tables as $v){
				$db_names = $v["Tables_in_{$db_name}"];
				$db_namesx = str_replace(DB_PRE,'',$db_names);
				$desc = $pdo -> query("desc {$db_names}");
				$sql = "create table `{\$db_pre}{$db_namesx}`(";
				$drop_table_sql .= "drop table `{\$db_pre}{$db_namesx}`;-hhc-;\n";
				foreach($desc as $vs){
					$not_null = '';
					$default = "";
					$key = '';
					$extra = '';
					if($vs['Null']=='NO')
						$not_null = 'not null';
					if(isset($vs['Default']))
						$default = "default '{$vs['Default']}'";
					if($vs['Key']=='PRI')
						$key = 'primary key';
					$extra = $vs['Extra'];
					$sql .= "`{$vs['Field']}` {$vs['Type']} {$not_null} {$default} {$key} {$extra} ,";
					if($vs['Key']=='MUL')
						$sql .= " key {$vs['Field']}(`{$vs['Field']}`),";
				}
				$sql = trim($sql,',');
				$sql .= ')engine=myisam charset=utf8;-hhc-;';
				$create_table_sql .= "{$sql}\n";
				$sql = '';

				//查找数据 3241
				$res = $pdo -> query("select * from `{$db_names}`");
				if(!empty($res)){
					$data_count = ceil(count($res)/100);
					$data_res = array();
					for($i=1;$i<=$data_count;$i++){
						$data_res[$i] = array_slice($res,($i-1)*100,100);
					}
					$insert_sql = "insert into `{\$db_pre}{$db_namesx}` values";
					$insert_arr = array();
					foreach($data_res as $k => $vz){
						$insert_arr[$k] = $insert_sql;
						foreach($vz as $vx){
							$insert_arr[$k] .= '(';
							foreach($vx as $va){
								$insert_arr[$k] .= "'{$va}',";
							}
							$insert_arr[$k] = trim($insert_arr[$k],',');
							$insert_arr[$k] .= '),';
						}
						$insert_arr[$k] = trim($insert_arr[$k],',');
					}
					$insert_arr = Translation($insert_arr,1);
					$str = "<?php\n\n\$sql = array(\n";
					foreach($insert_arr as $k => $v){
						$v = str_replace("\n",'',$v);
						$str .= <<<STR
	'{$k}' => "{$v}",\n
STR;
					}
					$str .= "\n);\n?>"; 
					file_put_contents("./sundry/static_file/sql/data/{$db_namesx}.sql.php",$str);
				}
			}
			$time = date('Y-m-d-H-i-s');
			file_put_contents("./sundry/static_file/sql/drop_table_sql.sql",$drop_table_sql);
			file_put_contents("./sundry/static_file/sql/create_table_sql.sql",$create_table_sql);
			*/alert(1,0,'?h=system&c=sql_backup',"打包成功 备份的数据文件在 ./sundry/static_file/sql 目录下");
		}

		/**
		 *	模型内容采集部分
		 */
		public function acquisition(){
			$this -> output();
		}
		public function acquisition_submit(){
			$c = C();
			$this -> assign('str',$c['str']);
			$this -> output();
		}
		public function get_z_contents(){
			echo $_POST['content'];
		}

		public function c_main(){
			$_POST = unTranslation($_POST);
			$this -> output();
		}
		public function ajax_fenxi(){
			$_POST = unTranslation($_POST);
			//先循环打开每个页面 检测里面的id
			$_POST['start_page'] = ceil($_POST['start_page']);
			$_POST['stop_page'] = ceil($_POST['stop_page']);
			$arr = array();
			$o_str = $_POST['start_q'].'~+_+~'.$_POST['stop_q'];
			$o_str = str_replace('/','\/',$o_str);
			$o_str = str_replace('*','\*',$o_str);
			$o_str = str_replace('[','\[',$o_str);
			$o_str = str_replace(']','\]',$o_str);
			$o_str = str_replace('(','\(',$o_str);
			$o_str = str_replace(')','\)',$o_str);
			$o_str = explode('~+_+~',$o_str);
			$_POST['start_q'] = $o_str['0'];
			$_POST['stop_q'] = $o_str['1'];
			$pattern = <<<STR
/{$_POST['start_q']}.*{$_POST['stop_q']}/Us
STR;
			for($i=$_POST['start_page'];$i<=$_POST['stop_page'];$i++){
				$res = '';$str = '';
				$url = str_replace('*',$i,$_POST['website_list']);
				@$res = file_get_contents($url);
				if(empty($res))
					die('抓取原网站失败');
				$start_length = strpos($res,$_POST['start_c']);
				$stop_length = strpos($res,$_POST['stop_c']);
				$con_length = $stop_length - $start_length;
				$str = substr($res,$start_length+1,$con_length);
				if(empty($str))
					die('抓取原网站失败');
				preg_match_all($pattern,$str,$arr[]); 
			}
			$num = 0;
			foreach($arr as $v){
				foreach($v as $vs){
					$num += ceil(count($vs));
				}
			}
			if(empty($num))
				die('计算原网站可采集文章失败');
			die('1~+_+~'.$num);
		}

		public function ajax_caiji(){
			$_POST = unTranslation($_POST);
			$con = $_POST['con'];
			unset($_POST['con']);
			$con = str_replace('"','',$con);
			$con = str_replace("'",'',$con);
			$con = str_replace("{",'',$con);
			$con = str_replace("}",'',$con);
			$arr = explode(',',$con);
			$con = array();
			foreach($arr as $v){
				$v = str_replace('::','(-|-)',$v);
				$s_arr = explode(':',$v);
				if(isset($s_arr['0']) && isset($s_arr['1'])){
					$con[$s_arr['0']] = str_replace('(-|-)','::',$s_arr['1']);
				}
			}
			//获取模型
			$pdo = get_pdo();
			$nav_moxing = $pdo -> query('select nav_moxing from '.DB_PRE."nav where nav_id='{$_POST['lanmu']}' limit 1",'');
			$moxing = $pdo -> query('select * from '.DB_PRE."moxing where id='{$nav_moxing['nav_moxing']}' limit 1",'');
			if(empty($nav_moxing['nav_moxing'])){
				alert(0,0,null,"采集检测失败 栏目选择出错",1);
			}
			if(empty($moxing['moxing_ziduan_table_name'])){
				alert(0,0,null,"采集检测失败 模型出错",1);
			}
			$tb_name = DB_PRE.$moxing['moxing_ziduan_table_name'];
			$_POST['start_page'] = ceil($_POST['start_page']);
			$_POST['stop_page'] = ceil($_POST['stop_page']);
			$o_str = $_POST['start_q'].'~+_+~'.$_POST['stop_q'];
			$o_str = str_replace('/','\/',$o_str);
			$o_str = str_replace('*','\*',$o_str);
			$o_str = str_replace('[','\[',$o_str);
			$o_str = str_replace(']','\]',$o_str);
			$o_str = str_replace('(','\(',$o_str);
			$o_str = str_replace(')','\)',$o_str);
			$o_str = explode('~+_+~',$o_str);
			$_POST['start_q'] = $o_str['0'];
			$_POST['stop_q'] = $o_str['1'];
			$arrs = array();
			$pattern = <<<STR
/{$_POST['start_q']}.*{$_POST['stop_q']}/Us
STR;
				$p_num = 0;
			for($i=$_POST['start_page'];$i<=$_POST['stop_page'];$i++){
				$res = '';$str = '';
				$urlz = str_replace('*',$i,$_POST['website_list']);
				@$res = file_get_contents($urlz);
				if(empty($res))
					die('抓取原网站失败');
				$start_length = strpos($res,$_POST['start_c']);
				$stop_length = strpos($res,$_POST['stop_c']);
				$con_length = $stop_length - $start_length;
				$str = substr($res,$start_length+1,$con_length);
				if(empty($str))
					die('抓取原网站失败');
				preg_match_all($pattern,$str,$arrs);
				foreach($arrs as $v){
					foreach($v as $vs){
						$sql = '';
						$sql = "insert into {$tb_name}(";
						foreach($con as $k => $v){
							$sql .= "`{$k}`,";
						}
						$sql = trim($sql,',');
						$sql .= ')values';
						sleep(2);
						//获取内页链接地址 然后打开内页
						$patterns = '/<a.*href\s*=\s*("|\')(.*)("|\').*>.*<\/a>/Us';
						preg_match_all($patterns,$vs,$url);
						if(isset($url['2']['0'])){
							if(strpos($url['2']['0'],'http://') === false){ 
								$url['2']['0'] = $_POST['website_con'].$url['2']['0'];
							}
							$res2 = '';
							@$res2 = file_get_contents($url['2']['0']);
							$sql .= '(';
							foreach($con as $k => $v){
								if(strpos($v,'::')){
									$datas = array();
									$sarr = explode('::',$v);
					$sarr['1'] = str_replace('/','\/',$sarr['1']);
					$sarr['1'] = str_replace('[','\[',$sarr['1']);
					$sarr['1'] = str_replace(']','\]',$sarr['1']);
					$sarr['1'] = str_replace('(','\(',$sarr['1']);
					$sarr['1'] = str_replace(')','\)',$sarr['1']);
					$sarr['1'] = str_replace('\[*\]','(.*)',$sarr['1']);
					$sarr['1'] = str_replace('\[id\]','.*',$sarr['1']);
					$patternz = "/{$sarr['1']}/Us";
									if($sarr['0']=='list'){
										$vs = str_replace('"','',$vs);
										$vs = str_replace("'",'',$vs);
										preg_match_all($patternz,$vs,$datas);
										$datas['1']['0'] = addslashes($datas['1']['0']);
										$datas['1']['0'] = str_replace(' ','',$datas['1']['0']);
										$sql .= "'{$datas['1']['0']}',";
									}else if($sarr['0']=='content'){
										$res2 = str_replace('"','',$res2);
										$res2 = str_replace("'",'',$res2);
										preg_match_all($patternz,$res2,$datas);
										$datas['1']['0'] = addslashes($datas['1']['0']);
										$datas['1']['0'] = str_replace(' ','',$datas['1']['0']);
										$sql .= "'{$datas['1']['0']}',";
									}
								}else{
									$v = addslashes($v);
									$sql .= "'{$v}',";
								}
							}
							$sql = trim($sql,',');
							$sql .= ')';

						}
						$row = $pdo -> sql($sql);
						if(!empty($row))
							$p_num++;
					}
				}
			}
			die("采集完成 共采集了{$p_num}篇文章");
		}

		public function links(){
			$this -> output();
		}
		public function link_add(){
			$this -> output();
		}
		public function link_add_submit(){
			if(empty($_POST['name']))
				alert(1,0,null,'链接名称不能为空');
			if(empty($_POST['link']))
				alert(1,0,null,'链接地址不能为空');
			$paixu = min(max(ceil($_POST['paixu']),1),60000);
			$time = time();
			if(empty($_POST['id'])){
				$sql = 'insert into '.DB_PRE."links(name,link,paixu,add_time)values('{$_POST['name']}','{$_POST['link']}','{$paixu}','{$time}')";
			}else{
				$sql = 'update '.DB_PRE."links set name='{$_POST['name']}',link='{$_POST['link']}',paixu='{$paixu}' where id='{$_POST['id']}'";
			}

			$pdo = get_pdo();
			$row = $pdo -> sql($sql);
			if($row === false){
				alert(1,0,null,'编辑失败');
			}
			alert(1,0,'?h=system&c=links',"编辑成功");
		}
		public function link_delete(){
			$pdo = get_pdo();
			$pdo -> sql('delete from '.DB_PRE."links where id='{$_GET['k']}'");
			alert(1,0,'?h=system&c=links',"删除成功");
		}

		public function kefu(){
			$this -> output();
		}
		public function kefu_submit(){
			$yingyong = empty($_POST['yingyong']) ? '0' : '1';
			$name = empty($_POST['name']) ? '--' : $_POST['name'];
			$phone = empty($_POST['phone']) ? '--' : $_POST['phone'];
			$_POST['qq'] = trim($_POST['qq'],"\n");
			$str = <<<STR
<?php
	\$yingyong = '$yingyong';
	\$name = '$name';
	\$phone = '$phone';
	\$qq = '{$_POST['qq']}';
?>
STR;
			unlink('./sundry/cache/json/kefu.php');
			file_put_contents('./sundry/cache/json/kefu.php',$str);
			alert(1,0,'?h=system&c=kefu',"修改成功");
		}


	}


