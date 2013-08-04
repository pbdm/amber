<?php
class Tpl{
	
	private $file;
	protected $vars;

	function __construct($file){
		$this->file = $file;
	}

	function display(){
		extract($this->vars);
		include $this->file;
	}

	public function assign_var($var, $val){
		$this->vars[$var] = $val;
	}
}