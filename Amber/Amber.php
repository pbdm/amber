<?php
class Amber{
	static function init(){
		require(AMBER_PATH.'config.php');
		$config = require(APP_PATH.'config.php');
		include (AMBER_PATH.'Tpl.php');
		
		$tpl = new Tpl(TPL_PATH.'layout.html');
		foreach($config as $key=>$val){
			$tpl->assign_var($key,$val);
		}
		$tpl->assign_var('content',TPL_PATH.'index.html');
		$tpl->display();
	}
}