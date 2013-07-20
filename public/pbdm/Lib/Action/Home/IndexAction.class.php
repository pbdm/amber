<?php

class IndexAction extends MyAction {

    public function index(){
    	$this->assign('title', L('home'));
        $this->display();
    }

    public function cv(){
        $this->assign('print',$this->_get('print'));
        $this->assign('age',age('1986-9-1'));
        $this->assign('title', L('cv'));
        $this->display();
    }

    public function wiki(){
        if (file_exists(TMPL_PATH.'wiki.xml')) {
             $xml_array=simplexml_load_file(TMPL_PATH.'wiki.xml');  
        }
        $this->assign('title', L('wiki'));
        $this->assign('wiki', $xml_array);
        $this->display();
    }

    public function pj_zh(){
        $this->display();
    }

    public function pj_en(){
        $this->display();
    }

    public function phpinfo(){
        echo phpinfo();
        exit();
    }

    public function test(){
        if (file_exists(C("PATH_ACTICLE").'wiki.xml')) {
             $xml_array=simplexml_load_file(C("PATH_ACTICLE").'wiki.xml');  
        }
        var_dump($xml_array);
    }

}