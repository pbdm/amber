<?php
class IndexAction extends Action {
    public function cv(){
    	$this->display();
    }
    public function index(){
    	$this->display();
    }
    public function test(){
    	import('ORG.Net.IpLocation');// 导入IpLocation类
		$Ip = new IpLocation(); // 实例化类
		$location = $Ip->getlocation('194.254.61.44'); // 获取某个IP地址所在的位置
		$info =  $location['country'].$location['area'];
		var_dump($location);
    }
    public function demo(){
        $this->display();
    }
}