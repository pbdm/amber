<?php
$arr = "apple    orange banana   pear lemon peach mango";
var_dump($arr);
class reverse{
 
    public function __construct($arr){
        $this -> rev = $this->reverse($arr);
    }

    private function reverse($arr){
        $arr = $this -> arrrev($arr);
        $arr = $this -> wordrev($arr);
        return $arr;
    }

	/**
 	 * 将字符串反转
 	 */
    private function arrrev($arr){
        $len = strlen($arr);
        $newarr = '';
        for($i = $len-1 ; $i >= 0 ; $i--) {
        	$newarr .= $arr[$i];
        }
        return $newarr;
    }

    /**
     * 将字符串里的每个单词反转
     */
    private function wordrev($arr){
        $len = strlen($arr);
        $newarr = '';
        $word = '';
        for($i = 0 ; $i < $len ; $i++) {
        	if ($arr[$i] != ' ') {
        		$word .= $arr[$i];
        	} else {
        		$word = $this -> arrrev($word);	
        		$newarr .= $word;
        		$newarr .=' ';
        		$word = '';
        	}
        	if($i == $len-1) { //for the last word
        		$word = $this -> arrrev($word);
        		$newarr .= $word;
        	}   	
        }
        return $newarr;
    }
}
 
$obj = new reverse($arr);
$res = $obj -> rev;
var_dump($res);
