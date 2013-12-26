<?php
class CodeController extends Controller{
    function index() {
    	$pathString = '';
    	foreach($this->path as $key => $value) {
    		if($key != 0 ) {
    			$pathString .= DS.$value;
    		}
    	}	
        include(CODE_PATH.$pathString);
        exit();
    }
}
