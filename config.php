<?php

require 'environment.php';

//Configuration for connection on Database MySQL
$config = array();
if(ENVIRONMENT == 'development'){
    //Config for local environment 
    define("BASE_URL","http://structure_mvc/");
    $config['dbname'] = 'structure_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{ 
    //Config for web environment 
    define("BASE_URL","https://www.mandaweb.com.br/");
    $config['dbname'] = 'structure_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
    
}

//Start connection
global $dbConfig;
try {
    $dbConfig = new PDO("mysql:host=".$config['host'].";dbname=".$config['dbname'], $config['dbuser'], $config['dbpass']); 
} catch(PDOException $e){
    echo "Error: ".$e->getMessage();
    exit;
}