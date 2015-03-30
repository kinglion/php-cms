<?php

	function city_update(){
		if(empty($_GET['k']) && empty($_POST))
			alert(0,8);
		if(!empty($_GET['k'])){
			$sql='delete from `'.DB_PRE."city` where `id` = '{$_GET['k']}' ";
			$z=6;$y=7;
		}else{
			if($_POST['delete']=='1'){
				//删除选中项
				$id = implode(',',$_POST['xuanzhong']);
				$sql='delete from `'.DB_PRE."city` where `id` in ({$id}) ";
				$z=6;$y=7;
			}else{
				//更新全部
				unset($_POST['delete']);
				$sql= 'update '.DB_PRE.'city ';
				$paixu=' set paixu = case id ';
				$name=' name = case id ';
				$id='';
				foreach ($_POST as $k => $v){
					$id.=$k.',';
					$v['paixu']=empty($v['paixu'])?'0':floor($v['paixu']);
					$v['paixu']=min(60000,$v['paixu']);
					$v['paixu']=max(0,$v['paixu']);
					$paixu.=" when {$k} then '{$v['paixu']}' ";
					$name.=" when {$k} then '{$v['name']}' ";
				}
				$paixu.=' end, ';
				$name.=' end ';
				$id=trim($id,',');
				$sql.=$paixu.$name." where id in ($id) ";
				$z=2;$y=1;
			}
		}
		
		$pdo = get_pdo();
		$row=$pdo -> sql($sql);
		if($row===false){
			alert(0,$z);
		}else{
			alert(1,$y);
		}
	}