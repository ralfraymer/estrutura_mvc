<?php

class Controller{
    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        require('views/'.$viewName.'.View.php');
    }   

    public function loadTemplate($viewName, $viewData = array()){
        require('views/template.php');
    }

    public function loadViewInTemplate($viewName, $viewData = array()){
        $this->loadView($viewName, $viewData);
    }
}

?>