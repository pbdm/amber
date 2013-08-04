<?php
define('DS', DIRECTORY_SEPARATOR);
define('BASE_PATH',trim(dirname(__FILE__),'public'));
define('AMBER_PATH',BASE_PATH.'Amber'.DS);
define('APP_PATH',BASE_PATH.'pbdm'.DS);
require(AMBER_PATH.'Amber.php');
Amber::Init();