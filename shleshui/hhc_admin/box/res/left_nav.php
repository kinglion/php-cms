<?php

	$left_nav=array(
		array(
			'title'=>'基本设置',
			'name'=>'set_up',
			'url'=>'javascript:void(0)',
			'child'=>array(
				array('title'=>'网站信息','url'=>'?h=set_up&c=basic'),
				array('title'=>'扩展设置','url'=>'?h=set_up&c=extended_settings'),
				array('title'=>'前台导航设置','url'=>'?h=set_up&c=nav'),
				array('title'=>'注册/访问','url'=>'?h=set_up&c=reg'),
				array('title'=>'地区设置','url'=>'?h=set_up&c=city'),
				//array('title'=>'搜索设置','url'=>'?h=set_up&c=so'),
				//array('title'=>'图片/附件/水印','url'=>'?h=set_up&c=file'),
			)
		),

		array(
			'title'=>'文章管理',
			'url'=>'javascript:void(0)',
			'name'=>'article',
			'child'=>array(
				array('title'=>'发布文章','url'=>'?h=article&c=article_lanmu'),
				array('title'=>'文章管理','url'=>'?h=article&c=article_moxing'),
				array('title'=>'内容评论管理','url'=>'?h=article&c=article_moxing_2'),
				//array('title'=>'内容回收站','url'=>'?h=article&c=huishouzhan'),
			)
		),

		array(
			'title'=>'模型管理',
			'url'=>'javascript:void(0)',
			'name'=>'moxing',
			'child'=>array(
				array('title'=>'模型安装/创建/管理','url'=>'?h=moxing&c=index'),
			)
		),

		array(
			'title'=>'模块管理',
			'url'=>'javascript:void(0)',
			'name'=>'mokuai',
			'child'=>array(
				//array('title'=>'模块安装/创建/管理','url'=>'?h=mokuai&c=index'),
				array('title'=>'企业系统','url'=>'?h=web&hconfig=mokuai'),
			)
		),

		array(
			'title'=>'会员管理',
			'name'=>'user',
			'url'=>'javascript:void(0)',
			'child'=>array(
				array('title'=>'用户列表','url'=>'?h=user&c=user_list'),
				array('title'=>'权限/级别设置','url'=>'?h=user&c=quanxian'),
				array('title'=>'发送消息','url'=>'?h=user&c=xiaoxi'),
				//array('title'=>'积分管理','url'=>'?h=user&c=jifen'),
				//array('title'=>'用户站点管理','url'=>'?h=user&c=website'),
			)
		),

		array(
			'title'=>'系统扩展',
			'url'=>'javascript:void(0)',
			'name'=>'system',
			'child'=>array(
				array('title'=>'系统在线升级','url'=>'?h=system&c=upgrade'),
				array('title'=>'模型内容采集','url'=>'?h=system&c=acquisition'),
				array('title'=>'友情链接','url'=>'?h=system&c=links'),
				array('title'=>'网站打包','url'=>'?h=system&c=sql_backup'),
				//array('title'=>'木马检测','url'=>'#123'),
				//array('title'=>'站点统计','url'=>'#123'),
				//array('title'=>'全文检索配置','url'=>'#123'),
				array('title'=>'邮箱配置','url'=>'?h=system&c=mail'),
			)
		),

	);

?>