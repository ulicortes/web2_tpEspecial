<?php

require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class HeaderView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }
    function elegirBtnMenu($usuario) {
        $this->smarty->assign('user', $usuario);
        $this->smarty->display('templates/header.tpl');
    }
}