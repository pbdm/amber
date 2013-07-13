<?php
class BlogAction extends Action {

    function _empty($url){

        $this->assign('title', L('blog_title'));

        $myurl = str_replace('/index.php',"",__URL__).'/';
        
        $files = dirtree(TMPL_PATH.C("PATH_ACTICLE"));
        //$url = to_utf($url);
        
        foreach($files as &$file){
            //$file = to_utf($file);
            $acticle['name'] = substr($file,11,-5);
            $acticle['date'] = substr($file,0,10);
            $acticle['filepath'] = $myurl.$file;
            $acts[] = $acticle;
        }
        
        $fullname = $url.'.html';
        $name = substr($url,11);
        $date = substr($url,0,10);
        $path = C("PATH_ACTICLE").':'.$url;
        
        if ($url == 'index'){
            $this->assign('acts',$acts);
            $this->display('index');
        } elseif(in_arrayi($fullname,$files)){
            $this->assign('acts',$acts);
            $this->assign('path',$path);
            $this->assign('name',$name);
            $this->assign('date',$date);
            $this->display('content');
        }  else{
            header("HTTP/1.0 404 Not Found");//使HTTP返回404状态码
            $this->display("/404");
        }
    }


  
}