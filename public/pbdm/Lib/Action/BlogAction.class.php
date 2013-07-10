<?php
class BlogAction extends Action {

    function _empty($name){
        $this->assign('title', L('blog_title'));
        $str = dirtree(TMPL_PATH.'/Acticle');
        $this->assign('str',$str);
        $this->assign('name',"Acticle:".$name);
        if(in_array($name.'.html', $str) || $name == 'index'){
            $this->display('index');
        } else {
            header("HTTP/1.0 404 Not Found");//使HTTP返回404状态码
            $this->display("/404");
        }
    }


  
}