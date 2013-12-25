<?php
class Amber{
	static function init(){
		require(AMBER_PATH.'config.php');
		require(AMBER_PATH.'Tpl.php');
		require(AMBER_PATH.'function.php');
		require(AMBER_PATH.'Controller.php');
		$path = isset($_SERVER['PATH_INFO'])?trim($_SERVER['PATH_INFO'],'/'):'';
		$path = explode('/',$path);
		self::router($path);
	}

	static function router($path){
		if(empty($path[0])) {
			$path[0] = "blog";
		}
  		$controllerName = ucwords($path[0]) . 'Controller';
  		$controllerFilePath = CONTROLLER_PATH.$controllerName.'.php';
		if(is_file($controllerFilePath)) {
			include $controllerFilePath;
 			$controller = new $controllerName($path);
		} else{
			$controller = new Controller($path);
		}
		$controller->index();
		$controller->run();
	}
}