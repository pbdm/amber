<?php
class IndexAction extends Action {
    public function vars(){
    	echo 'here';
    }
    public function index(){
    	 $this->display();
    }
}