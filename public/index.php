<?php
define('APP_NAME','pbdm');
define('APP_PATH','./protected/pbdm/');

if(strpos($_SERVER['SERVER_NAME'], 'www.pbdm') === false){
 	define('APP_DEBUG',TRUE); // 开启调试模式
}

//获取访客语言,自动分配模板

//if(!isset($_GET['l'])){
	// $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2); //获取访客语言，是HTTP头信息的ACCEPT_LANGUAGE的前两个字符
	// switch ($language) {
	// 	case 'en' :
	// 		define('LANG_SET','en');
	//        	break;
	//     case 'fr' :
	//        	define('LANG_SET','fr');
	//        	break;
	//     default: 
	//         define('LANG_SET','zh');
	//        	break;
	// }	
//}
require 'protected/ThinkPHP/ThinkPHP.php';