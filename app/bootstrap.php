<?php
//echo "bootsrtrap load sucessfuly!!"; checked 
//require_once "libraries/Core.php";
//require_once "libraries/Controller.php";
//require_once "libraries/Database.php";
require_once "config/config.php";
//helper 
require_once 'helpers/session_helper.php';
require_once 'helpers/url_helper.php';
//require_once 'helpers/session_helper.php';

//auto loader 
spl_autoload_register(function($className){require_once 'libraries/'.$className.'.php';});


?>
