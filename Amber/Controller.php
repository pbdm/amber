<?php
class Controller{
	
	protected $tpl;
	protected $path;
	protected $content = 'index.html';

	function __construct($path) {
		$this->path = $path;
    	$this->tpl = new Tpl(LAYOUT_PATH);
    }

	function index(){
	}

	function run(){
		$controller = $this->path[0];
		$config = require(APP_PATH.'config.php');
		foreach($config as $key=>$val){
			$this->tpl->assign_var($key,$val);
		}
		$contentPath = TPL_PATH.$controller.DS.$this->content;
		if(file_exists($contentPath)){
			$this->tpl->assign_var('content',$contentPath);
		} else {
			$this->tpl->assign_var('content',ERROR_PATH);
		}
		
		$this->tpl->display();
	}
}