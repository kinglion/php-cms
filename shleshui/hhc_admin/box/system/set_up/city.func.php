<?php

	function city(){
		//由于城市数据量较大 不使用xml了 直接操作数据库
		//前台调用的时候 全部使用ajax 相对来说 速度会快一些
		$pdo = get_pdo();
		$sql = 'select * from '.DB_PRE."city";
		$k=empty($_GET['k'])?'0':$_GET['k'];
		//获取当前分类的数据
		if(empty($_GET['xianshi']))
			$sql1 = $sql." where pid={$k} ";
		else
			$sql1 = $sql.' where 1';
		if(!empty($_GET['name']))
			$sql1.=" and name like '%{$_GET['name']}%' ";
		$sql1.=' order by paixu desc ';
		$res = $pdo -> query($sql1);
		$res = !empty($res) ? $res : array();
		//获取上级 上上级
		$s=func($k,$sql,$pdo);
		$s=!empty($s)?$s.$k:'0';
		$sql2 = $sql." where pid in ({$s})";
		$res2 = $pdo -> query($sql2);
		$res2 = !empty($res2) ? $res2 : array();
		
		$arr=array();
		$zrr=explode(',',$s);
		foreach($res2 as $k => $v){
			if(in_array($v['id'],$zrr)){
				$v['select']='1';
			}
			$arr[$v['pid']][$k] = $v;
		}
		return array('select'=>$arr,'res'=>$res);
	}


	function func($k,$sql,$pdo){
		$sql2=$sql." where id = '{$k}'";
		$res=$pdo -> query($sql2,'');
		static $s='';
		if(empty($res)){
			$res=array();
		}else{
			$s.="{$res['pid']},";
			func($res['pid'],$sql,$pdo);
		}
		return $s;
	}