<?php
class Controller{
	
	protected $tpl;
	protected $path;
	protected $exist;

	function __construct($path,$exist = true) {
		$this->path = $path;
		$this->exist = $exist;
    	$this->tpl = new Tpl(TPL_PATH.'layout.html');
    }

	function index(){
	}

	function run(){
		$path = $this->path;
		$config = require(APP_PATH.'config.php');
		foreach($config as $key=>$val){
			$this->tpl->assign_var($key,$val);
		}
		if(!$this->exist){
			$this->tpl->assign_var('content',TPL_PATH.'404.html');
		} else if(isset($path[1])){
			$this->tpl->assign_var('content',TPL_PATH.$path[0].DS.'content.html');
		} else {
			$this->tpl->assign_var('content',TPL_PATH.$path[0].DS.'index.html');
		} 
		$this->tpl->display();
	}
}