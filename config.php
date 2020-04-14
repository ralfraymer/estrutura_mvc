<?php

require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development'){
    define("BASE_URL","http://localhost/estrutura_mvc/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    define("BASE_URL","https://www.mandaweb.com.br/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
    
}

global $db;
try {
    $db = new PDO("mysql:host=".$config['host'].";dbname=".$config['dbname'], $config['dbuser'], $config['dbpass']); 

} catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}