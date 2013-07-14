<?php

class IndexAction extends MyAction {

    public function index(){
    	$this->display();
    }

    public function cv(){
        $this->assign('print',$this->_get('print'));
        $this->assign('age',age('1986-9-1'));
        $this->assign('title', L('cv_title'));
        $this->display();
    }

    public function pj_zh(){
        $this->display();
    }

    public function pj_en(){
        $this->display();
    }

}