<?php

	class webConn extends Conn{
		public function index(){
			$this -> output();
		}

		public function update(){
			$this -> output();
		}

		public function update_submit(){
			if(empty($_POST['key']) || empty($_POST['id']))
				alert(0,0,null,'请先选择要编辑的内容',1);
			if(empty($_POST['title']))
				alert(0,0,null,'标题不能为空',1);
			if(empty($_POST['content']))
				alert(0,0,null,'内容不能为空',1);
			if(empty($_POST['fenlei']))
				alert(0,0,null,'请选择一个分类',1);
			$pic = empty($_POST['pic']) ? '' : $_POST['pic'];
			if(!empty($_FILES['pic']['name'])){
				$fileUpload = new fileUpload(array('type'=>'1'));
				$arr = $fileUpload -> upload($_FILES['pic']);
				if(empty($arr['num']))
					alert(0,0,null,$arr['msg'],0);
				$pic = $arr['new_file'];
			}
			if(empty($pic)){
				preg_match('/<img\s*src=\\\"(.*)\\\"/Us',$_POST['content'],$preg_arr);
				$pic = empty($preg_arr['1']) ? './blog/box/tpl/art_empty_pic.jpg' : './'.$preg_arr['1'];
			}
			$pdo = get_pdo();
			$sql = '';
			$db_pre = DB_PRE;
			//组装sql
			if(empty($_POST['k'])){
				$time = time();
				$sql = <<<SQL
	insert into {$db_pre}z_web_{$_POST['key']} 
		(title,pic,content,time,class_id) 
	values
		('{$_POST['title']}','{$pic}','{$_POST['content']}','{$time}','{$_POST['fenlei']}')
SQL;
			}else{
				$sql = <<<SQL
	update 
		{$db_pre}z_web_{$_POST['key']}
	set 
		title = '{$_POST['title']}',
		pic = '{$pic}',
		content = '{$_POST['content']}',
		class_id = '{$_POST['fenlei']}'
	where id = '{$_POST['k']}'
SQL;
			}
			echo $sql;
			$row = $pdo -> sql($sql);
			if($row===false)
				alert(0,0,null,'网络繁忙 编辑失败',1);
			alert(1,0,'?h=web&hconfig=mokuai','创建/编辑 成功');
			v($_POST);
		}

		public function delete(){
			if(empty($_GET['key']) && empty($_POST['key']))
				alert(0,0,null,'请选择要删除的项',1);
			if(!empty($_GET['k'])){
				//删除单个
				$sql = 'delete from '.DB_PRE."z_web_{$_GET['key']} where id='{$_GET['k']}'";
				$pdo = get_pdo();
				$pdo -> sql($sql);
			}else if(!empty($_POST['all'])){
				//删除选中
				$key = implode(',',$_POST['all']);
				$sql = 'delete from '.DB_PRE."z_web_{$_POST['key']} where id in ({$key})";
				$pdo = get_pdo();
				$pdo -> sql($sql);
			}else{
				alert(0,0,null,'请选择要删除的项',1);
			}
			$pdo -> sql($sql);
			alert(1,0,null,'删除成功');
		}

		public function hdp_t(){
			$this -> output();
		}
		public function hdp_submit(){
			if(empty($_FILES['pic']['name']) && empty($_POST['paixu']))
				alert(0,0,null,'请选择图片',1);
			$paixu = max(0,min(50000,ceil($_POST['paixu'])));
			$pic = empty($_POST['pic']) ? '' : $_POST['pic'];
			if(!empty($_FILES['pic']['name'])){
				$fileUpload = new fileUpload(array('type'=>'1'));
				$arr = $fileUpload -> upload($_FILES['pic']);
				if(empty($arr['num']))
					alert(0,0,null,$arr['msg'],0);
				$pic = $arr['new_file'];
			}
			if(empty($pic))
				alert(0,0,null,'图片上传失败',1);
			$pdo = get_pdo();
			if(empty($_POST['k']))
				$row = $pdo -> sql('insert into '.DB_PRE."z_web_hdp(title,pic,link,paixu)values('{$_POST['title']}','{$pic}','{$_POST['link']}','{$paixu}')");
			else
				$row = $pdo -> sql('update '.DB_PRE."z_web_hdp set title='{$_POST['title']}',pic='{$pic}',link='{$_POST['link']}',paixu='{$paixu}' where id='{$_POST['k']}'");
			if($row === false)
				alert(0,0,null,'创建/编辑 失败',1);
			alert(1,0,'?h=web&hconfig=mokuai','创建/编辑 成功');
		}

		public function hdp_d(){
			if(empty($_GET['k']))
				alert(0,0,null,'请选择一个幻灯片',1);
			$pdo = get_pdo();
			$row = $pdo -> sql('delete from '.DB_PRE."z_web_hdp where id='{$_GET['k']}'");
			alert(1,0,'?h=web&hconfig=mokuai','删除成功');
		}

		public function class_t(){
			$this -> output();
		}
		public function class_submit(){
			$paixu = max(0,min(50000,ceil($_POST['paixu'])));
			$pdo = get_pdo();
			if(empty($_POST['k']))
				$row = $pdo -> sql('insert into '.DB_PRE."z_web_class(title,type,paixu)values('{$_POST['title']}','{$_POST['type']}','{$paixu}')");
			else
				$row = $pdo -> sql('update '.DB_PRE."z_web_class set title='{$_POST['title']}',type='{$_POST['type']}',paixu='{$paixu}' where id='{$_POST['k']}'");
			if($row === false)
				alert(0,0,null,'创建/编辑 失败',1);
			alert(1,0,'?h=web&hconfig=mokuai','创建/编辑 成功');
		}

		public function class_d(){
			if(empty($_GET['k']))
				alert(0,0,null,'请选择一个分类',1);
			$pdo = get_pdo();
			$pdo -> sql('delete from '.DB_PRE."z_web_class where id='{$_GET['k']}'");
			alert(1,0,'?h=web&hconfig=mokuai','分类删除成功');
		}

		public function config_submit(){
			$pdo = get_pdo();
			foreach($_POST as $k => $v){
				$pdo -> sql('update '.DB_PRE."z_web_config set v='{$v}' where k = '{$k}'");
			}
			alert(1,0,'?h=web&hconfig=mokuai','编辑成功');
		}
		public function config2_submit(){
			$pdo = get_pdo();
			foreach($_POST as $k => $v){
				$pdo -> sql('update '.DB_PRE."z_web_config2 set v='{$v}' where k = '{$k}'");
			}
			alert(1,0,'?h=web&hconfig=mokuai','编辑成功');
		}
		







	}
 

?>