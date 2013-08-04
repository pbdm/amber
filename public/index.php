<?php
define('DS', DIRECTORY_SEPARATOR);
define('BASE_PATH',trim($_SERVER['DOCUMENT_ROOT'],'public'));
define('AMBER_PATH',BASE_PATH.'Amber'.DS);
define('APP_PATH',BASE_PATH.'pbdm'.DS);
require(AMBER_PATH.'Amber.php');
Amber::Init();