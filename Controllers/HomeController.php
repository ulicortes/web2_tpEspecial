<?php


require_once './Views/HomeView.php';
require_once './Helpers/AutenticacionHelper.php';

class HomeController {
    private $view;
    private $authy;
   
    function __construct() {
        $this->view = new HomeView();
        $this->authy = new AutenticacionHelper();
      
    }
    function showHome() {        
        $this->view->showHome();
    }
}