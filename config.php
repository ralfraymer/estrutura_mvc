<?php

require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development'){
    define("BASE_URL","http://structure_mvc/");
    $config['dbname'] = 'structure_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    define("BASE_URL","https://www.mandaweb.com.br/");
    $config['dbname'] = 'structure_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
    
}

global $dbConfig;
try {
    $dbConfig = new PDO("mysql:host=".$config['host'].";dbname=".$config['dbname'], $config['dbuser'], $config['dbpass']); 

} catch(PDOException $e){
    echo "Error: ".$e->getMessage();
    exit;
}