<?php 
 
require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/session_helper.php';

require_once 'config/config.php';
 spl_autoload_register(function($className){
    require_once 'core/' . $className . '.php';
  });