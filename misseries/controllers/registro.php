<?php

class Registro extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->datos = [];
    }
    //visualiza la página de registro
    function render(){

        session_start();
        $sesion = $_SESSION['usuario']??"";

        if($sesion != ""){
            $serie = $this->model->get();
            $this->view->series=$serie;
            $this->view->render('main/index');
        }else{
            $this->view->render('registro/index');
        }
        
    }
    //añade un usuario a la bd y redirige al login
    function anadirUsu(){
        $nombre = $_POST["nombre"] . " " . $_POST["apellido"];
        $email = $_POST["email"];
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contr"];
        $contraseña1 = $_POST["contr1"];

        if($contraseña == $contraseña1){
            if($this->model->anadir($nombre,$email,$usuario,$contraseña)){
                $this->view->error = "Se ha realizado el registro correctamente";
                $this->view->render('login/indexerror');
            }else{
                $this->view->error = "Ha habido algún fallo en el registro";
                $this->view->nombre = $_POST["nombre"];
                $this->view->apellido = $_POST["apellido"];
                $this->view->usuario = $_POST["usuario"];
                $this->view->email = $_POST["email"];
                $this->view->render('registro/indexerror');
            }
        }else{
            $this->view->error = "Las contraseñas no son iguales";
            $this->view->nombre = $_POST["nombre"];
            $this->view->apellido = $_POST["apellido"];
            $this->view->usuario = $_POST["usuario"];
            $this->view->email = $_POST["email"];
            $this->view->render('registro/indexerror');
        }
    }



    

    




}