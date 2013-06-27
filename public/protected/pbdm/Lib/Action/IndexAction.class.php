<?php
class IndexAction extends Action {
<<<<<<< HEAD
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

=======

    public function cv(){
        $this->assign('print',$this->_get('print'));
        $this->assign('age',$this->age('1986-9-1'));
        $this->assign('title', L('cv_title'));
        $this->display();
    }

    public function pj_zh(){
        $this->display();
    }

    public function pj_en(){
        $this->display();
    }

    public function index(){
    	$this->display();
    }

>>>>>>> efefc7a4cee6d44026239e1e283d2aaf4e02e65e
    function _empty(){
        header("HTTP/1.0 404 Not Found");//使HTTP返回404状态码
        $this->display("./protected/pbdm/Tpl/404.html");
    }
<<<<<<< HEAD
=======

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
>>>>>>> efefc7a4cee6d44026239e1e283d2aaf4e02e65e
}