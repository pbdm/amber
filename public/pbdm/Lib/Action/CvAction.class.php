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
        $this->assign('age',$this->age('1986-9-1'));
        $this->assign('title', L('cv_title'));
        $this->display();
    }

    function _empty(){
        header("HTTP/1.0 404 Not Found");//使HTTP返回404状态码
        $this->display("./protected/pbdm/Tpl/404.html");
    }

    /**
     * function pour obtenir le age par le date de birth given
     * @param  [string] $brith [le date de brith]
     * @return [string]        [le age]
     */
    function age($birth){
        list($by,$bm,$bd) = explode('-',$birth);
        $cm  = date('n');
        $cd  = date('j');
        $age = date('Y')-$by-1;
        if ($cm > $bm || $cm == $bm && $cd >= $bd) $age++;
        return $age;
    }

}