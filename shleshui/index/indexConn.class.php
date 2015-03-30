<?php

	class indexConn extends Conn{
		public function index(){
			exit;
		}

		public function moxing_list(){
			$nav = include_nav();
			$id = 0;
			foreach($nav as $v){
				if($v['nav_type']=='1' && $v['nav_id']==$_GET['lanmu_id'] && $v['nav_parent_id']=='0'){
					$id = $v['nav_id'];
				}else if($v['nav_type']=='1' && $v['nav_id']==$_GET['lanmu_id'] && $v['nav_parent_id']!='0'){
					$id = $v['nav_parent_id'];
				}
			}
			$this -> assign('nav_key',array('key'=>'moxing_list','id'=>$id));
			$this -> output();
		}

		public function moxing_content(){
			if(empty($_GET['con_id']))
				alert_2(0,'请选择文章','?',3);
			if(empty($_GET['lanmu_id']))
				alert_2(0,'请选择栏目','?',3);
			$nav = include_nav();
			$id = 0;
			foreach($nav as $v){
				if($v['nav_type']=='1' && $v['nav_id']==$_GET['lanmu_id'] && $v['nav_parent_id']=='0'){
					$id = $v['nav_id'];
				}else if($v['nav_type']=='1' && $v['nav_id']==$_GET['lanmu_id'] && $v['nav_parent_id']!='0'){
					$id = $v['nav_parent_id'];
				}
			}
			if(empty($nav[$_GET['lanmu_id']]))
				alert_2(0,'栏目不存在','?',3);
			$pdo = get_pdo();
			//引入模型的信息 获取表明 看看是否存在这个文章
			include './sundry/cache/json/moxing/moxing.php';
			$json = json_decode($json,true);
			$res = $pdo -> query('select con_id from '.DB_PRE."{$json[$nav[$_GET['lanmu_id']]['nav_moxing']]['moxing_ziduan_table_name']} where con_id = '{$_GET['con_id']}' limit 1",'');
			if(empty($res))
				alert_2(0,'文章不存在或已删除','?',3);
			$pdo -> sql('update '.DB_PRE."{$json[$nav[$_GET['lanmu_id']]['nav_moxing']]['moxing_ziduan_table_name']} set con_liulan=con_liulan+1 where con_id = '{$_GET['con_id']}'");
			$this -> assign('nav_key',array('key'=>'moxing_content','id'=>$id));
			$this -> output();
		}

		public function so(){
			$c = C();
			$this -> assign('so_res',$c);
			$this -> output();
		}

		public function comment_submit(){
			$_POST['con'] = nl2br($_POST['con']);
			$pdo = get_pdo();
			//获取模型的id
			$nav = $pdo -> query('select nav_moxing from '.DB_PRE."nav where nav_id='{$_POST['lanmu_id']}' limit 1",'');
			if(empty($nav['nav_moxing']))
				alert_2(1,'栏目不存在！','',3);
			$db_pre = DB_PRE;
			$user_id = empty($_SESSION['user']['user_id']) ? '0' : $_SESSION['user']['user_id'];
			$parent_id = empty($_POST['parent_id']) ? '0' : $_POST['parent_id'];
			$time = time();
			$hf_con = isset($_POST['hf_con']) ? $_POST['hf_con'] : '';
			$zhuangtai = '0';
			$sql = <<<SQL
insert into {$db_pre}pinglun
	(moxing_id,lanmu_id,art_id,user_id,parent_id,con,time,hf_con,zhuangtai)
		values
	('{$nav['nav_moxing']}','{$_POST['lanmu_id']}','{$_POST['con_id']}',
		'{$user_id}','{$parent_id}','{$_POST['con']}','{$time}',
		'{$hf_con}','{$zhuangtai}')
SQL;
			$row = $pdo -> sql($sql);
			if(empty($row))
				alert_2(1,'网络繁忙 发布评论失败','',3);
			header("Location:?h=index&c=moxing_content&con_id={$_POST['con_id']}&lanmu_id={$_POST['lanmu_id']}#comment");
			exit;
		}

		public function guli(){
			if(empty($_POST['id']))
				die('请先选择文章');
			if(empty($_SESSION['user']['user_id']))
				die('请先登陆');
			$pdo = get_pdo();
			$pdo -> sql('update '.DB_PRE."shilianyizhan set guli=guli+'1' where con_id='{$_POST['id']}'");
			die('1');
		}

	}

?>
