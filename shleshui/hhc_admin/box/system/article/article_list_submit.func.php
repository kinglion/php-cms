<?php

	function article_list_submit(){
		unset($_GET['h']);
		unset($_GET['c']);
		if(!empty($_GET)){
			if(empty($_GET['m']) || empty($_GET['shanchu'])){
				header('Location:?h=article&c=article_moxing');
				exit;
			}
		$moxing_id = $_GET['m'];
		}elseif(!empty($_POST)){
			if(!empty($_POST['moxing'])){
				$moxing_id = $_POST['moxing'];
			}else{
				header('Location:?h=article&c=article_moxing');
				exit;
			}
		}else{
			header('Location:?h=article&c=article_moxing');
			exit;
		}
		$pdo = get_pdo();
		//获取表名
		include './sundry/cache/json/moxing/moxing.php';
		$moxing = json_decode($json,true);
		$tb_name =  DB_PRE.$moxing[$moxing_id]['moxing_ziduan_table_name'];
		
		if(!empty($_POST['shanchu'])){
			//删除选中项
			$arr=sort($_POST['all']);
			$id = implode(',',$_POST['all']);
			$id = !empty($id) ? $id : '0';
			$row = $pdo -> sql("delete from `{$tb_name}` where `con_id` in ({$id})");
			if($row === false)
				alert(0,0,"?h=article&c=article_list&moxing={$moxing_id}",'网络繁忙，删除失败');
			alert(1,0,"?h=article&c=article_list&moxing={$moxing_id}",'删除成功');
		}else if(!empty($_POST['shenhe'])){
			//选中项更改为审核
			$arr=sort($_POST['all']);
			$id = implode(',',$_POST['all']);
			$id = !empty($id) ? $id : '0';
			$row = $pdo -> sql("update `{$tb_name}` set `con_quanxian`='0' where `con_id` in ({$id})");
			if($row === false)
				alert(0,0,"?h=article&c=article_list&moxing={$moxing_id}",'网络繁忙，修改失败');
			alert(1,0,"?h=article&c=article_list&moxing={$moxing_id}",'修改成功');
		}else if(!empty($_POST['bushenhe'])){
			//选中项更改为未审核
			$arr=sort($_POST['all']);
			$id = implode(',',$_POST['all']);
			$id = !empty($id) ? $id : '0';
			$row = $pdo -> sql("update `{$tb_name}` set `con_quanxian`='1' where `con_id` in ({$id})");
			if($row === false)
				alert(0,0,"?h=article&c=article_list&moxing={$moxing_id}",'网络繁忙，修改失败');
			alert(1,0,"?h=article&c=article_list&moxing={$moxing_id}",'修改成功');
		}else if(!empty($_GET['shanchu'])){
			//删除单个
			$row = $pdo -> sql("delete from `{$tb_name}` where `con_id` = '{$_GET['shanchu']}'");
			if($row === false)
				alert(0,0,"?h=article&c=article_list&moxing={$moxing_id}",'网络繁忙，删除失败');
			alert(1,0,"?h=article&c=article_list&moxing={$moxing_id}",'删除成功');
		}else{
			//更新全部
			unset($_POST['moxing']);
			$sql= <<<SQL
			update `{$tb_name}` 
				set
					`con_biaoti` = case `con_id`
SQL;
			$id = '';
			foreach($_POST as $k => $v){
				$sql .= " when {$k} then '{$v['biaoti']}' ";
				$id .= $k.',';
			}
			$id = !empty($id) ? $id : '0';
			$id = trim($id,',');
			$sql .= ' end,`con_liulan` = case `con_id` ';
			foreach($_POST as $k => $v){
				$v['liulan'] = ceil($v['liulan']);
				$sql .= " when {$k} then '{$v['liulan']}' ";
			}
			$sql .= " end where `con_id` in($id) ";
			$row = $pdo -> sql ($sql);
			if($row === false)
				alert(0,0,"?h=article&c=article_list&moxing={$moxing_id}",'网络繁忙，修改失败');
			alert(1,0,"?h=article&c=article_list&moxing={$moxing_id}",'修改成功');
		}
	}