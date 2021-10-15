<?php

require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class LoginView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function mostrarLoginForm($respuesta) {
        if (!empty($respuesta)) {
            $this->smarty->assign('respuesta', $respuesta);
        }
        else {
            $this->smarty->assign('respuesta', 'Si ya estas registrado, ingresa tus datos');
        }
        $this->smarty->display('./templates/login.tpl');
    }

    function mostrarRegistroForm() {
        $this->smarty->display('./templates/registro.tpl');
    }
}