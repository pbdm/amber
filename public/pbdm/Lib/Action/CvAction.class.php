<?php
class CvAction extends Action {

    public function pj_zh(){
        $this->display();
    }

    public function pj_en(){
        $this->display();
    }

    public function index(){
    	$this->assign('print',$this->_get('print'));
        $this->assign('age',age('1986-9-1'));
        $this->assign('title', L('cv_title'));
        $this->display();
    }

    function _empty(){
        header("HTTP/1.0 404 Not Found");//使HTTP返回404状态码
        $this->display("./protected/pbdm/Tpl/404.html");
    }
}