<?php

	function nav_update(){
		$_POST['nav_shouye'] = empty($_POST['nav_shouye']) ? '27' : $_POST['nav_shouye'];
		if(isset($_GET['id'])){
			$id = !empty($_GET['id']) ? $_GET['id'] : 0;
			$sql ='delete from `'.DB_PRE."nav` where `nav_id` = '{$id}'";
			$z=6;$y=7;
		}else{
			if($_POST['delete']=='1'){
				//删除
				$xuanzhong = !empty($_POST['xuanzhong']) ? $_POST['xuanzhong'] : array(0);
				$id = implode(',',$xuanzhong);
				$sql='delete from '.DB_PRE."nav where nav_id in($id)";
				$z=6;$y=7;
			}else{
				unset($_POST['delete']);
				unset($_POST['xuanzhong']);
				$id=''; 
				$sql= 'update '.DB_PRE.'nav ';
				$_POST[$_POST['nav_shouye']]['nav_shouye']='1';
				$nav_paixu=' set nav_paixu = case nav_id ';
				$nav_name=' nav_name = case nav_id ';
				$nav_link=' nav_link = case nav_id ';
				$nav_shouye=' nav_shouye = case nav_id ';
				$nav_xianshi=' nav_xianshi = case nav_id ';
				foreach ($_POST as $k => $v){
					$id.=$k.',';
					$v['nav_shouye']=empty($v['nav_shouye'])?'0':$v['nav_shouye'];
					$v['nav_xianshi']=empty($v['nav_xianshi'])?'0':$v['nav_xianshi'];
					$nav_paixu.=" when {$k} then '{$v['nav_paixu']}' ";
					$nav_name.=" when {$k} then '{$v['nav_name']}' ";
					$nav_link.=" when {$k} then '{$v['nav_link']}' ";
					$nav_shouye.=" when {$k} then '{$v['nav_shouye']}' ";
					$nav_xianshi.=" when {$k} then '{$v['nav_xianshi']}' ";
				}
				$nav_paixu.=' end, ';
				$nav_link.=' end, ';
				$nav_shouye.=' end, ';
				$nav_xianshi.=' end, ';
				$nav_name.=' end ';
				$id=trim($id,',');
				$sql .=$nav_paixu.$nav_xianshi.$nav_shouye.$nav_link.$nav_name." where nav_id in ({$id}) ";
				$y=1;$z=2;
			}
		}

		$pdo = get_pdo();
		$row=$pdo -> sql($sql);
		if($row===false){
			alert(0,$z);
		}else{
			//unlink('./sundry/cache/json/nav.php');
			if(unlink('./sundry/cache/json/nav.php')){
				alert(1,$y,'?h=set_up&c=nav');
			}else{
				alert(0,0,null,'请检查/sundry/cache/json/nav.php是否有读写权限');
			}
		}		
	}