<?php

class AutenticacionHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        session_start();
        if(isset($_SESSION["usuario"])){            
            return $_SESSION["usuario"];
        }
    }

    function estaLogueado(){
        session_start();
        if(!isset($_SESSION["usuario"])){
            header("Location: ".BASE_URL."login");            
        }
    }
    
}