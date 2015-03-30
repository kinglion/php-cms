<?php

/******************************************
 * func.hhc 	hhc_admin 应用函数库
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-06-30 11:13';
 ******************************************/

	
	/**
	 *	获取字段信息
	 */
	function get_ziduan_leixing($id,$type){
		$ziduan = array(
			'1'=>array(
				'type' => '单行文本(varchar[50])',
			),
			'2'=>array(
				'type' => '单行文本(varchar[200])',
			),
			'3'=>array(
				'type' => '多行文本(varchar[500])',
			),
			'4'=>array(
				'type' => '整数(int)',
			),
			'5'=>array(
				'type' => '浮点数(float[10,2])',
			),/*
			'6'=>array(
				'type' => '日期时间(int[unsigned]) 日期选择框',
			),*/
			'7'=>array(
				'type' => '图片(varchar[200])',
			),
			'8'=>array(
				'type' => 'html文本(text)',
			),
			'9'=>array(
				'type' => 'option下拉框',
			),
			'10'=>array(
				'type' => 'radio单选框',
			),
			'11'=>array(
				'type' => 'checkbox多选框',
			),
			'12'=>array(
				'type' => '略缩图(varchar[200])',
			),/*
			'13'=>array(
				'type' => '音频文件(varchar[200])',
			),
			'14'=>array(
				'type' => '附件(varchar[200])',
			),*//*
			'15'=>array(
				'type' => '多图上传',
			),*/
			'16'=>array(
				'type' => '普通分类',
			),
			/*'17'=>array(
				'type' => '智能排序',
			),*/
		);

		if($type=='1')
			//返回指定的字段名
			return $ziduan[$id]['type'];
		else if($type=='2')
			//返回所有字段
			return $ziduan;

		
	}

	function ziduan_switch($arr){
		switch($arr['moxing_type']){
			case '1':
				unset($arr['html_gongneng']);
				unset($arr['default_val']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' varchar(50) not null default "" ';
			break;
			case '2':
				unset($arr['html_gongneng']);
				unset($arr['default_val']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' varchar(200) not null default "" ';
			break;
			case '3':
				unset($arr['html_gongneng']);
				unset($arr['default_val']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' varchar(500) not null default "" ';
			break;
			case '4':
				unset($arr['html_gongneng']);
				unset($arr['default_val']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' int not null default 0 ';
			break;
			case '5':
				unset($arr['html_gongneng']);
				unset($arr['default_val']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' float(10,2) ';
			break;
			case '6':
				unset($arr['html_gongneng']);
				unset($arr['default_val']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' int unsigned not null default 0 ';
			break;
			case '7':
				unset($arr['html_gongneng']);
				unset($arr['default_val']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' varchar(200) not null default "" ';
			break;
			case '8':
				$arr['html_gongneng']=implode(',',$arr['html_gongneng']);
				unset($arr['default_val']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' text ';
			break;
			case '9':
				unset($arr['html_gongneng']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' varchar(50) not null default "" ';
			break;
			case '10':
				unset($arr['html_gongneng']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' varchar(50) not null default "" ';
			break;
			case '11':
				unset($arr['html_gongneng']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' varchar(500) not null default "" ';
			break;
			case '12':
				unset($arr['html_gongneng']);
				unset($arr['default_val']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' varchar(200) not null default "" ';
			break;
			case '13':
				unset($arr['html_gongneng']);
				unset($arr['default_val']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' varchar(200) not null default "" ';
			break;
			case '14':
				unset($arr['html_gongneng']);
				unset($arr['default_val']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = ' varchar(200) not null default "" ';
			break;
			case '15':
				unset($arr['html_gongneng']);
				unset($arr['default_val']);
				unset($arr['default_val2']);
				unset($arr['paixu_ziduan']);
				$sql = 'duotu';
			break;
			case '16':
				unset($arr['html_gongneng']);
				$arr['default_val']=$arr['default_val2'];
				unset($arr['paixu_ziduan']);
				unset($arr['default_val2']);
				$sql = ' int unsigned not null default 0 ';
			break;
			case '17':
				unset($arr['html_gongneng']);
				unset($arr['default_val']);
				unset($arr['default_val2']);
				$sql = 'paixu';
			break;
		}

		return array('sql'=>$sql,'arr'=>$arr);
	}