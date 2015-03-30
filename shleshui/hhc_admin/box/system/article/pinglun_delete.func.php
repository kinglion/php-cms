<?php

	function pinglun_delete(){
		if(empty($_GET['k']) && empty($_POST['shanchu']) && empty($_POST['shenhe']) && empty($_POST['bushenhe'])){
			header('Location: ?h=article&c=article_moxing_2');
			exit;
		}
		$pdo = get_pdo();
		if(!empty($_POST['shenhe'])){
			//选中项改为已审核
			$m = $_POST['m'];
			$id = implode(',',$_POST['id']);
			$row = $pdo -> sql('update `'.DB_PRE."pinglun` set `zhuangtai`='0' where `pinglun_id` in ($id)");
			if($row===false)
				alert(0,0,null,'网络繁忙，请稍后重试',1);
			alert(1,0,"?h=article&c=pinglun&moxing={$m}",'修改成功');
		}elseif(!empty($_POST['bushenhe'])){
			//选中项改为未审核
			$m = $_POST['m'];
			$id = implode(',',$_POST['id']);
			$row = $pdo -> sql('update `'.DB_PRE."pinglun` set `zhuangtai`='1' where `pinglun_id` in ($id)");
			if($row===false)
				alert(0,0,null,'网络繁忙，请稍后重试',1);
			alert(1,0,"?h=article&c=pinglun&moxing={$m}",'修改成功');
		}elseif(!empty($_POST['shanchu'])){
			//选中项删除
			$m = $_POST['m'];
			$id = implode(',',$_POST['id']);
			$row = $pdo -> sql('delete from `'.DB_PRE."pinglun` where `pinglun_id` in ($id)");
			if($row===false)
				alert(0,0,null,'网络繁忙，请稍后重试',1);
			alert(1,0,"?h=article&c=pinglun&moxing={$m}",'删除成功');
		}elseif(!empty($_GET['k'])){
			//单项删除
			$m = $_GET['m'];
			$row = $pdo -> sql('delete from `'.DB_PRE."pinglun` where `pinglun_id`='{$_GET['k']}'");
			if($row===false)
				alert(0,0,null,'网络繁忙，请稍后重试',1);
			alert(1,0,"?h=article&c=pinglun&moxing={$m}",'删除成功');
		}

	}
