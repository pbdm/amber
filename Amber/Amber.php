<?php
class Amber{
	static function init(){
		require(AMBER_PATH.'config.php');
		require(AMBER_PATH.'Tpl.php');
		self::router(isset($_SERVER['PATH_INFO'])?trim($_SERVER['PATH_INFO'],'/'):'');
	}

	static function router($path){
		$config = require(APP_PATH.'config.php');
		if (file_exists(SOURCE_PATH.'wiki.xml')) {
             $xml_array=simplexml_load_file(SOURCE_PATH.'wiki.xml');  
        }
        $tpl = new Tpl(TPL_PATH.'layout.html');
        $tpl->assign_var('wiki', $xml_array);
		foreach($config as $key=>$val){
			$tpl->assign_var($key,$val);
		}
		$tpl->assign_var('content',TPL_PATH.$path.DS.'index.html');
		$tpl->display();
	}
}