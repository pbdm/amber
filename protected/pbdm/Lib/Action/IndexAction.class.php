<?php
class IndexAction extends Action {
    public function cv(){
    	$this->display();
    }
    public function index(){
    	$this->display();
    }
    public function test(){
        var_dump(LANG_SET) ;

  // //   	import('ORG.Net.IpLocation');// 导入IpLocation类
		// // $Ip = new IpLocation(); // 实例化类
		// // $location = $Ip->getlocation('194.254.61.44'); // 获取某个IP地址所在的位置
		// // $info =  $location['country'].$location['area'];
		// // var_dump($location);
        $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
         var_dump($language) ;
  //       echo L('lan_define');
    }
    public function demo(){
        $this->display();
    }
}