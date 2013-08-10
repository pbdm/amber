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
		// var_dump($path);
		// exit()
  		$controllerName = ucwords($path[0]) . 'Controller';
  		$controllerFilePath = CONTROLLER_PATH.$controllerName.'.php';
		if(is_file($controllerFilePath)) {
			include $controllerFilePath;
 			$controller = new $controllerName($path);
		} else if($path[0]) {
			$controller = new Controller($path,false);
		} else{
			$controller = new Controller($path);
		}
		$controller->index();
		$controller->run();
	}
}