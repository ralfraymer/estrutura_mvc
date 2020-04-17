<?php

class homeController extends Controller{
    public function index(){
        $ads = new Ads();
        $user = new Usuario();

        $data = array(
            'title' => 'My Title',
            'amount' => $ads->getQtd(),
            'name' => $user->getName(),
            'year' => $user->getYear()
        );
        $this->loadTemplate('home', $data);
    }


}