<?php
class BlogController extends Controller{
    public function index($path=null) {
        $files = dirtree(ACTICLE_PATH);
      
        if(isset($path[1])){
            $fullname = to_utf($path[1]);
        } else{
            $fullname = null;
        }

        foreach($files as &$file){
            $acticle['path'] = ACTICLE_PATH.$file;
            $file = to_utf($file);
            $acticle['name'] = substr($file,11,-5);
            $acticle['date'] = substr($file,0,10);
            $acticle['fullname'] = DS.$path[0].DS.$file;
            if(!strcasecmp($fullname,$file)){
               $act = $acticle;//让文件名上的名字为文章的名字,(文件名上的名字是大小写敏感的)
            }
            $acts[] = $acticle;
        }
        
        $this->tpl->assign_var('acts',$acts);
        if(isset($act)){
            $this->tpl->assign_var('act',$act);
        }
        
    }
}
