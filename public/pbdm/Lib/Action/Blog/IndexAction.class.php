<?php
class IndexAction extends MyAction {

    function _empty($url){

        $this->assign('title', L('blog'));
        
        $files = dirtree(C("PATH_ACTICLE"));
        $url = to_utf($url);

        $fullname = $url.C("TMPL_TEMPLATE_SUFFIX");

        foreach($files as &$file){
            $file = to_utf($file);
            $acticle['name'] = substr($file,11,-5);
            $acticle['date'] = substr($file,0,10);
            $acticle['fullname'] = $file;
            $acticle['path'] = C("PATH_ACTICLE").$file;
            if(!strcasecmp($fullname,$file)){
               $act = $acticle;//让文件名上的名字为文章的名字,(文件名上的名字是大小写敏感的)
            }
            $acts[] = $acticle;
        }
      
        if ($url == 'index'){
            $this->assign('acts',$acts);
            $this->display('index');
        } elseif($act){
            $this->assign('acts',$acts);
            $this->assign('act',$act);
            $this->display('content');
        }  else{
            parent::_empty();
        }
    }


  
}