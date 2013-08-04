<?php
class BlogController extends Controller{
    public function index($url=null) {
        $files = dirtree(ACTICLE_PATH);
      
        $fullname = to_utf($url.'.html');

        foreach($files as &$file){
            $acticle['path'] = ACTICLE_PATH.$file;
            $file = to_utf($file);
            $acticle['name'] = substr($file,11,-5);
            $acticle['date'] = substr($file,0,10);
            $acticle['fullname'] = $file;
            if(!strcasecmp($fullname,$file)){
               $act = $acticle;//让文件名上的名字为文章的名字,(文件名上的名字是大小写敏感的)
            }
            $acts[] = $acticle;
        }
      	
        if (!$url){
            $this->tpl->assign_var('acts',$acts);
        } elseif($act){
            $this->tpl->assign_var('acts',$acts);
            $this->tpl->assign_var('act',$act);
            // $this->display('content');
        }  else{
            $this->tpl->assign_var('title', L('blog'));
            parent::_empty();
        }
    }
}
