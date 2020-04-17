<?php

class galleryController extends Controller{
    public function index(){
        $data = array(
            'amount' => 125
        );
        $this->loadTemplate('gallery', $data);
    }
}