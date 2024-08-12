<?php
    require_once './Controllers/HomeController.php';
// api/index.php
    $homeController = new HomeController;
    $homeController->showhome();
