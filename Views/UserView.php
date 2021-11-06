<?php
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class UserView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }
    function mostrarerror($error){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/errores.tpl');
    }

    function mostrarusarios($usuarios){
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->display('templates/usuarios.tpl');
        
    }

    function usuariosLocation(){
        header("Location: ".BASE_URL."verusuarios");
    }
}