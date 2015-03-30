<?php

/******************************************
 * page.class.php 	分页类
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-09-01 19:15';
 ******************************************/
	
	class page{
		private $res;				//返回的数据结果
		private $p;					//内置翻页的url变量
		private $url_name;			//翻页的url变量
		private $totalpage;			//多少页
		private $pagestr='';		//构造翻页的字符串
		private $canshu;			//翻页时url参数
		public $count;
		private $t;
		public $pages;				//当前是第几页

		/**
		 *	构造方法 初始化部分属性
		 *	@param String $table_name 操作的表名
		 *	@param String $type 获取的数据 id,name  全部用*
		 *	@param String $where where 条件
		 *	@param Int $perpage 每页显示多少条
		 *	@param String $url_name 分页依据的变量  
		 *	@param Int $even 是否连表  
		 *	@param String $table_k 连表时 第一张表的别名
		 *	@param Array $arr array(array('table_name'=>'表名','table_k'=>'连表的别名','where'=>'on和where条件'))
		 */
		public function __construct($table_name,$type,$where,$perpage,$url_name,$even=false,$table_k='',$arr=array()){
				$perpage=ceil($perpage)<1?1:ceil($perpage);
				if(empty($where))
					$where='1';
				if($even){
					$sql="select $type from $table_name $table_k ";
					$countSql="select count(*) from $table_name $table_k";
					for($i=0;$i<count($arr);$i++){
						$sql .= " left join {$arr[$i]['table_name']} {$arr[$i]['table_k']} {$arr[$i]['where']}";
						$countSql .= " left join {$arr[$i]['table_name']} {$arr[$i]['table_k']} {$arr[$i]['where']}";
					}
					$sql .=" where $where ";
					$countSql .=" where $where ";
				}else{
					$sql="select $type from $table_name where $where ";
					$countSql="select count(*) from $table_name where $where";
				}
			
			$pdo=get_pdo();
			$countRes=$pdo->query($countSql,'');
			$countRes=is_null($countRes)?0:$countRes;
			// 计算总的页数
			$totalpage = ceil($countRes['count(*)'] / $perpage);
			$p= max(min(isset($_GET[$url_name]) ? max(1,(int)$_GET[$url_name]) : 1,$totalpage),1);
			$this -> pages = $p;

			//构造偏移变量 从第几条开始取
			$offset = ($p-1) * $perpage;
			//构造LIMIT 变量  
			$limit = " limit $offset,$perpage";
			
			$sql=$sql.$limit;  
			$res=$pdo->query($sql);
			$res=is_null($res)?array():$res;
			//将数据存储
			$this->p=$p;
			$this->url_name=$url_name;
			$this->res=$res;
			$this->totalpage=$totalpage;
			$this->count=$countRes['count(*)'];
		}

		/**
		 *	只返回带首页 尾页  上一页 下一页的翻页
		 */
		public function page_1($pa=1){
			$this->pub();
			$this->pagestr .= $this->page_01($pa);
			$this->pagestr .= $this->page_02($pa);
			return array($this->res,$this->pagestr);

		}

		/**
		 *	首页 上一页 1 2 3 4 5 下一页 尾页
		 */
		public function page_2($num=5,$pa=1){
			$this->pub();
			$this->pagestr .= $this->page_01($pa);
			$this->pagestr .= $this->page_03($num,$pa);
			$this->pagestr .= $this->page_02($pa);
			return array($this->res,$this->pagestr);
		}

		private function pub(){
			$get = $_GET;
			unset($get['p']);
			$this->canshu=get_url($get,1,$this->url_name);
			if(1==1){
				//不使用静态
				$this->t=$this->canshu.'&'.$this->url_name.'=';
			}else if(1==2){
				//使用伪静态
			}
		}

		private function page_01($pa=1){
			$pagestr='';
			if($this->p>1){
				$pagestr .= '<a class="page_1 shouye" href="'.$this->t.'1">首页</a>';
				$pagestr .= '<a class="page_1 shangyiye" href='.$this->t.max(1,($this->p-1)).">上一页</a>";
			}
			else{
				if($pa==1){
					$pagestr .= '<span class="page_1 shouye">首页</span>';
					$pagestr .= '<span class="page_1 shangyiye">上一页</span>';
				}
			}
			if($this->count==0)
				$pagestr='';
			return $pagestr;
		}
		private function page_02($pa=1){
			$pagestr='';
			if($this->p < $this->totalpage){
				$pagestr .= '<a class="page_1 xiayiye" href="'.$this->t.min($this->totalpage,($this->p+1)).'">下一页</a>';
				$pagestr .= '<a class="page_1 weiye" href="'.$this->t.$this->totalpage.'">尾页</a>';
			}else{
				if($pa==1){
					$pagestr .= '<span class="page_1 xiayiye">下一页</span>';
					$pagestr .= '<span class="page_1 weiye">尾页</span>';
				}
			}
			if($this->count==0)
				$pagestr='';
			return $pagestr;
		}
		private function page_03($num){
			$pagestr='';
			if($this->totalpage>1){
				if($this->totalpage>$num){//总的页数
					$page_len=$num;//显示五条1--5
				}else{
					$page_len=$this->totalpage+1;
				}
				$pageoffset = ceil(($page_len-1)/2);//页码个数左右偏移量   23--4--56
			
				if($this->totalpage>$page_len){
					if($this->p<=$pageoffset){//如果当前页小于等于左偏移
						$left=1;  
						$max_p = $page_len;
					}else{//如果当前页大于左偏移  //如果当前页码右偏移超出最大分页数
						if($this->p+$pageoffset>=$this->totalpage+1){
							$left = $this->totalpage-$page_len+1;
							$max_p=$this->totalpage;
						}else{//左右偏移都存在时的计算
							$left = $this->p-$pageoffset;  $max_p = $this->p+$pageoffset;
						}	
					}	
				}else{
					$left=1;
					$max_p=$page_len-1;
				}
				
				for($i=$left;$i<=$max_p;$i++){
					if($i==$this->p){
						$pagestr.='<span class="page_1 dangqianye">'.$i.'</span>';
					}else{
						$pagestr .= '<a class="page_1" href='.$this->t.$i.">".$i.'</a>';
					}
				}
			}
			if($this->count==0)
				$pagestr='';
			return $pagestr;
		}


	 
	}