<?php

class gopealleyController extends controller{
    public function index(){
        $data = array(
            'amount' => 125
        );
        $this->loadTemplate('gallery', $data);
    }
}