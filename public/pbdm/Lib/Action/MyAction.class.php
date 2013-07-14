<?php
class MyAction extends Action {

    public function __construct() {
        parent::__construct();
        $mydomaine = explode('.',$_SERVER['SERVER_NAME']);
        $this->assign('mydomaine',$mydomaine);
    }


    function _empty(){
        header("HTTP/1.0 404 Not Found");//使HTTP返回404状态码
        $this->display("../404");
    }
}