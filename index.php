<?php
session_start();
require 'config.php'; 

spl_autoload_register(function($class){
     if(file_exists('controllers/'.$class.'.Class.php')){
         require 'controllers/'.$class.'.Class.php';
     }
     else if(file_exists('models/'.$class.'.Model.php')){
        require 'models/'.$class.'.Model.php';
     }
     else if(file_exists('core/'.$class.'.Class.php')){
        require 'core/'.$class.'.Class.php';
    };
});

$core = new Core(); 
$core->run();
?>