<?php
class Controller{
	
	protected $tpl;

	function __construct() {
    	$this ->tpl = new Tpl(TPL_PATH.'layout.html');
    }
	function run($path){
		$tpl = new Tpl(TPL_PATH.'layout.html');
		$config = require(APP_PATH.'config.php');
		foreach($config as $key=>$val){
			$this->tpl->assign_var($key,$val);
		}
		$this->tpl->assign_var('content',TPL_PATH.$path[0].DS.'index.html');
		$this->tpl->display();
	}
}