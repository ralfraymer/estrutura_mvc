<?php

class homeController extends controller{
    public function index(){
        $data = array(
            'title' => 'Initial page',
            'amount' => 5,
            'name' => 'Ralf'
        );
        $this->loadTemplate('home', $data);
    }


}