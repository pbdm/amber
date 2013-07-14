<?php
return array(
	//有关模板的
	'LAYOUT_ON'=>true, //开启模板布局
	'LAYOUT_NAME'=>'../layout', //默认模板

	//有关多语言的
	'LANG_SWITCH_ON' => true,   // 开启语言包功能

	'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
	'DEFAULT_LANG' => 'zh', // 默认语言
	'LANG_LIST'        => 'zh,en,fr', // 允许切换的语言列表 用逗号分隔
	'VAR_LANGUAGE'     => 'l', // 默认语言切换变量

	'URL_CASE_INSENSITIVE' =>true, //URL大小写不区分大小写

	//分组
	'APP_GROUP_LIST'     => 'Home,Blog', 
	'DEFAULT_GROUP'      =>'Home', 

	'APP_SUB_DOMAIN_DEPLOY'=>1, // 开启子域名配置
	/*子域名配置 
	*格式如: '子域名'=>array('分组名/[模块名]','var1=a&var2=b'); 
	*/ 
	'APP_SUB_DOMAIN_RULES'=>array(   
	   'blog'=>array('Blog/'),  // admin域名指向Admin分组
	),

	//自定义常量
	'PATH_ACTICLE'=>TMPL_PATH.'Acticle/', //博客存放目录名

	'TMPL_FILE_DEPR'=>'_',

	'TMPL_STRIP_SPACE'=>false,

);
