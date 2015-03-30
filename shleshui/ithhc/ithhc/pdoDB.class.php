<?php	
/****************************************************
 * sturdy.php 	框架pdo驱动							*
 ****************************************************
 * $Website = 'wwww.ithhc.cn';   					*
 ****************************************************
 * $Author = '郝海川';								*
 ****************************************************
 * $DateTime = '2014-08-03 10:28';          		*
 ******************************************************/


	/**
	 *	pdo驱动
	 */
	class pdoDB{
		static $pdo=null;				//初始化pdo 

		/**
		 *	静态单例 连接数据库
		 */
		static function connect(){
			if(is_null(self::$pdo)){
					$dsn='mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME;
					try{
						$pdo=new PDO($dsn, DB_USER_NAME,DB_PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'set names utf8'));
					}catch(Exception $e){
						return null;
					}
					self::$pdo=$pdo;
					return new pdoDB();
			}else
				return new pdoDB();
		}
		
		/**
		 *	执行有返回值的普通sql 适合查询
		 *	@return Resources/bool 
		 *	@param 	String $sql 执行的sql语句
		 *	@param  Int $type 1为查询全部 0为查询1条数据
		 */
		public function query($sql,$type='all'){
			$res=self::$pdo -> query($sql);
			if($res){
				$fetch='fetch'.$type;
					$row=$res->$fetch(PDO::FETCH_ASSOC);
					if($row && is_array($row)){
						if(HHC_BUG){
							$time=date('Y-m-d H:i:s',time());
							HHC_BUG::add("执行query方法使用：{$sql}&nbsp;{$time},执行成功",1);						
						}
						$row = unTranslation($row);
						return $row;
					}else{	
						if(HHC_BUG){
							$time=date('Y-m-d H:i:s',time());
							HHC_BUG::add("执行query方法使用：{$sql}&nbsp;{$time},执行成功，但没有值，返回了null",1);	
						}
						return array();
					}
			}else{
				//sql语句出错
				if(HHC_BUG){
					$time=date('Y-m-d H:i:s',time());
					HHC_BUG::add("执行query方法使用：{$sql}&nbsp;{$time},执行失败，sql语句出错，返回了false",1);
				}
				return false;
			}
		}

		/**
		 *	普通执行sql语句的方法
		 *	@param String $sql 执行的sql语句
		 *	@return bool/false
		 */
		public function sql($sql){
			$type=self::$pdo->exec($sql);
			if($type===false)
				$msg='执行失败，sql语句出错，返回false';
			elseif($type=='0')
				$msg='执行成功，但没有真正影响行数，返回0';
			else
				$msg='执行成功,返回影响了的行数';
			if(HHC_BUG){
				$time=date('Y-m-d H:i:s',time());
				HHC_BUG::add("执行sql方法使用：{$sql}&nbsp;{$time},{$msg}",1);
			}
			return $type;
		}

		/**
		 *	自动组装sql语句 适用于大量字段的增加修改
		 *	@param String $table_name 表名
		 *	@param String $type 类型 insert update delete
		 *	@param Array $data update和insert的数据
		 *	@param String $where update和delete的条件
		 *	@return bool/false
		 */
		public function exec($table_name,$type='insert',$data=array(),$where=''){
			if($type=='insert'){
				if(!is_array($data))
					exit;
				$key='';$val='';
				foreach ($data as $k => $v){
					$key .= '`'.$k.'`'.',';
					$val .= "'$v',";
				}
				$key = rtrim($key,',');
				$val = rtrim($val,',');
				$sql="insert into $table_name($key)values($val)";
			}else if($type=='update'){
				if(!is_array($data))
					exit;
				$sql = 'update '.$table_name.' set ';
				foreach ($data as $k => $v){
					$sql .= '`'.$k.'`'."="."'$v'".",";
				}
				$sql = rtrim($sql,',');
				$sql .= ' '.$where;
			}else if($type=='delete'){
				$sql="delete from $table_name $where";
			}else{
				//语法错误
			}
			$type=self::$pdo->exec($sql);
			if($type===false)
				$msg='执行失败，sql语句出错，返回false';
			elseif($type=='0')
				$msg='执行成功，但没有真正影响行数，返回0';
			else
				$msg='执行成功,返回影响了的行数';
			if(HHC_BUG){
				$time=date('Y-m-d H:i:s',time());
				HHC_BUG::add("执行sql方法使用：{$sql}&nbsp;{$time},{$msg}",1);
			}
			return $type;
		}

		/**
		 *	获取最后增长的id
		 */
		public function last_id(){
			return self::$pdo->lastInsertId();
		}		
		/**
		 * 事务开始
    	 */
		public function beginTransaction() {
			self::$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 0); 
			self::$pdo->beginTransaction();
		}
		
		/**
     	 * 事务提交
     	 */
		public function commit() {
			self::$pdo->commit();
			self::$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 1); 
		}
		
		/**
     	 * 事务回滚
     	 */
		public function rollBack(){
			self::$pdo->rollBack();
			self::$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 1); 
    	}

	}









