/*
create table hhc_z_web_hdp(
	id smallint unsigned not null primary key auto_increment,
	title varchar(60) not null default '',
	pic varchar(100) not null default '',
	link varchar(150) not null default '',
	paixu smallint unsigned not null default 0
)engine=myisam charset=utf8;
insert into hhc_z_web_hdp(title,pic,link,paixu)values('幻灯片','./web/box/tpl/images/banner01.jpg','http://ithhc.cn','5');
*/
/*
create table hhc_z_web_class(
	id smallint unsigned not null primary key auto_increment,
	title varchar(10) not null default '',
	paixu smallint unsigned not null default 0,
	type tinyint unsigned not null default 0
)engine=myisam charset=utf8;
insert into hhc_z_web_class(title,paixu,type)values('新闻分类1','0','1');
insert into hhc_z_web_class(title,paixu,type)values('产品分类1','0','2');
insert into hhc_z_web_class(title,paixu,type)values('方案分类1','0','3');
insert into hhc_z_web_class(title,paixu,type)values('案例分类1','0','4');
*/
/*
create table hhc_z_web_news(
	id int unsigned not null primary key auto_increment,
	title varchar(100) not null default '',
	content text not null,
	time int unsigned not null default 0,
	on_read int unsigned not null default 0,
	class_id smallint unsigned not null default 0
)engine=myisam charset=utf8;
insert into hhc_z_web_news(title,content,time,class_id)values('文章1','内容1',1598752546,'1');
insert into hhc_z_web_news(title,content,time,class_id)values('文章2','内容2',1598752546,'1');
*/
alter table hhc_z_web_news add pic varchar(100) not null default '';
/*
create table hhc_z_web_product(
	id int unsigned not null primary key auto_increment,
	title varchar(100) not null default '',
	pic varchar(100) not null default '',
	content text not null,
	time int unsigned not null default 0,
	on_read int unsigned not null default 0,
	class_id smallint unsigned not null default 0
)engine=myisam charset=utf8;
insert into hhc_z_web_product(title,content,time,class_id,pic)values('产品1','内容1',1598752546,'2','./web/box/tpl/images/pci02.jpg');
insert into hhc_z_web_product(title,content,time,class_id,pic)values('产品2','内容2',1598752546,'2','./web/box/tpl/images/pci02.jpg');
*/
/*
create table hhc_z_web_solution(
	id int unsigned not null primary key auto_increment,
	title varchar(100) not null default '',
	pic varchar(100) not null default '',
	content text not null,
	time int unsigned not null default 0,
	on_read int unsigned not null default 0,
	class_id smallint unsigned not null default 0
)engine=myisam charset=utf8;
insert into hhc_z_web_solution(title,content,time,class_id,pic)values('方案1','内容1',1598752546,'3','./web/box/tpl/images/pci01.jpg');
insert into hhc_z_web_solution(title,content,time,class_id,pic)values('方案2','内容2',1598752546,'3','./web/box/tpl/images/pci01.jpg');
*/
/*
create table hhc_z_web_case(
	id int unsigned not null primary key auto_increment,
	title varchar(100) not null default '',
	pic varchar(100) not null default '',
	content text not null,
	time int unsigned not null default 0,
	on_read int unsigned not null default 0,
	class_id smallint unsigned not null default 0
)engine=myisam charset=utf8;
insert into hhc_z_web_case(title,content,time,class_id,pic)values('案例1','内容1',1598752546,'3','./web/box/tpl/images/pci01.jpg');
insert into hhc_z_web_case(title,content,time,class_id,pic)values('案例2','内容2',1598752546,'3','./web/box/tpl/images/pci02.jpg');
*/
/*
create table hhc_z_web_config(
	id smallint unsigned not null primary key auto_increment,
	k varchar(10) not null default '',
	v varchar(500) not null default ''
)engine=myisam charset=utf8;
insert into hhc_z_web_config(k,v)values('lxwm','联系我们');
insert into hhc_z_web_config(k,v)values('gsjj','公司简介');
insert into hhc_z_web_config(k,v)values('khal','客户案例');
*/
/*
create table hhc_z_web_config2(
	id smallint unsigned not null primary key auto_increment,
	k varchar(10) not null default '',
	v text not null
)engine=myisam charset=utf8;
insert into hhc_z_web_config2(k,v)values('rczp','人才招聘');
insert into hhc_z_web_config2(k,v)values('khfw','客户服务');
*/






