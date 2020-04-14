<?php

class Core{
    public function run() {
        
        $url = '/';
        if(isset($_GET['url'])){
             $url .= $_GET['url'];
        }

        echo "URL: ".$url;

    }
}