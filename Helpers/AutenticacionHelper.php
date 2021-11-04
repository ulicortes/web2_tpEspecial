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
        else{
            return true;
        }
    }

    function esAdmin(){
        session_start();
        if(isset($_SESSION["role"])&&($_SESSION["role"]==1)){
            return $_SESSION["usuario"];
        }
        else return null;
        
    }
    
}