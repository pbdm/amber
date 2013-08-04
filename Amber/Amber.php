<?php
class Amber{
	static function init(){
		require(AMBER_PATH.'config.php');
		require(AMBER_PATH.'Tpl.php');
		require(AMBER_PATH.'function.php');
		$path = isset($_SERVER['PATH_INFO'])?trim($_SERVER['PATH_INFO'],'/'):'';
		$path = explode('/',$path);
		self::router($path);
	}

	static function router($path){
		require(AMBER_PATH.'Controller.php');
  		$controllerName = ucwords($path[0]) . 'Controller';
  		$controllerFilePath = CONTROLLER_PATH.$controllerName.'.php';
		if(is_file($controllerFilePath)) {
			include $controllerFilePath;
			if(class_exists($controllerName)) {
 				$controller = new $controllerName();
				if(isset($path)){
					$controller->index($path);
				} else{
					$controller->index();
				}
 			}

		} else{
			$controller = new Controller();
		}
		$controller->run($path);
	}
}