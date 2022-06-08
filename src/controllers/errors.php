<?php

class Errors extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->message = '0pss! Error en la Solicitud';
        $this->view->render('errors/index');
    }
}
