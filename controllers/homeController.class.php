<?php

class homeController extends Controller{
    public function index(){
        //requesting information of database ads
        $ads = new Ads();
        ////requesting information of model User
        $user = new User();

        $data = array(
            'title' => 'My Title',
            'amount' => $ads->getQtd(),
            'name' => $user->getName(),
            'year' => $user->getYear()
        );
        $this->loadTemplate('home', $data);
    }


}