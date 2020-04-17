<?php
class Model{
    
    protected $db;

    public function __construct(){
        global $dbConfig;
        $this->db = $dbConfig;
    }
}