<?php

class Login extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->datos = [];
    }
    //visualiza la página de login
    function render(){

        session_start();
        $sesion = $_SESSION['usuario']??"";

        if($sesion != ""){
            $serie = $this->model->get();
            $this->view->series=$serie;
            $this->view->render('main/index');
        }else{
            $this->view->render('login/index');
        }
            
    }
    //comprueba si existe el usuario y entra en la página main
    function iniSesion(){
        $contra = $_POST["contr"];
        $usuario = $_POST["usuario"];
        
        if($this->model->login($usuario,$contra)){
            session_start();
            $_SESSION['usuario']=$usuario;
            $serie = $this->model->get();
            $this->view->series=$serie;
            $this->view->render('main/index');
        }else{
            $this->view->error = "el usuario o la contraseña son incorrectos";
            $this->view->render('login/indexerror');
        }

    }
    //cierra la sesión y vuelve al login
    function cerrarSesion(){
        session_start();
        session_destroy();
        $this->view->render('login/index');
        exit();
    }

    




}