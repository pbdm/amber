<?php
class WikiController extends Controller{
    public function index() {
        if (file_exists(SOURCE_PATH.'wiki.xml')) {
             $xml_array=simplexml_load_file(SOURCE_PATH.'wiki.xml');  
        }
        $this->tpl->assign_var('wiki', $xml_array);
    }
}
