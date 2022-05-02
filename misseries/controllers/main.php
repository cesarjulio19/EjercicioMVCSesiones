<?php

class Main extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->datos = [];
    }
     //visualiza la tabla con todas las series
    function render(){
        session_start();
        $sesion = $_SESSION['usuario']??"";
        if($sesion == ""){
            $this->view->render('login/index');
        }else{
           $serie = $this->model->get();
           $this->view->series=$serie;
           $this->view->render('main/index');
        }

    }
     //visualiza la serie con id = x
    function verSerie($param = null){
        session_start();
        $sesion = $_SESSION['usuario']??"";

        if($sesion == ""){
            $this->view->render('login/index');
        }else{

            $idSerie = $param[0];
            $serie = $this->model->getById($idSerie);
            $generoserie = $this->model->genser($idSerie);
    
            $this->view->serie = $serie;
            $this->view->generos = $generoserie;
    
            
            $this->view->render('main/info');

        }

   }
   
    //visualiza el formulario para editar la serie
   function verEditarSerie($param = null){
       session_start();
       $sesion = $_SESSION['usuario']??"";

       if($sesion == ""){
        $this->view->render('login/index');
       }else{

        $idSerie = $param[0];
        $serie = $this->model->getById($idSerie);
        $generoserie = $this->model->genser($idSerie);

        $this->view->serie = $serie;
        $this->view->generos = $generoserie;

        
        $this->view->render('main/editar');

       }

    }

   // edita la serie y vuelve a la pagina principal
   function editarSerie(){
       session_start();
       $sesion = $_SESSION['usuario']??"";

       if($sesion == ""){
        $this->view->render('login/index');
       }else{

        $ids=$_POST['ids'];
       //echo $_POST['fecha'];
       $fecha=date('Y-m-d', strtotime($_POST['fecha']));
       $temporadas=$_POST['temporadas'];
       $puntuacion=number_format($_POST['puntuacion'], 2, '.', '');
       $argumento=$_POST['argumento'];
       //echo $fecha;
       
       if($this->model->editar($ids,$fecha,$temporadas,$puntuacion,$argumento)){
        $serie = $this->model->get();
        $this->view->series=$serie;
        $this->view->render('main/index');
       }else{
           echo "no se ha actualizado correctamente";
       }
       


       }
       
    }

    //nos manda a la pagina para gestionar los generos
   function gestionarGenero($param = null){
    session_start();
    $sesion = $_SESSION['usuario']??"";
    if($sesion == ""){
        $this->view->render('login/index');
    }else{

         $idSerie = $param[0];
         $generoserie = $this->model->genser($idSerie);
         $nogeneroserie = $this->model->noGenser($idSerie);
         $serie = $this->model->getById($idSerie);
         $this->view->nogeneros = $nogeneroserie;
         $this->view->generos = $generoserie;
         $this->view->serie = $serie;
         $this->view->render('main/generos');

       }

   }



    //elimina un genero de una serie
   function eliminarGenero($param = null){

    session_start();
    $sesion = $_SESSION['usuario']??"";

    if($sesion == ""){
        $this->view->render('login/index');
    }else{

        $idSerie = $param[1];
      $idGenero = $param[0];
      if($this->model->eliminarGen($idSerie,$idGenero)){
        $serie = $this->model->get();
        $this->view->series=$serie;
        $this->view->render('main/index');
      }else{
          echo "no se ha eliminado correctamente";
      }

    }
   }

    //añade genero existente
   function anadirGen(){

    session_start();
    $sesion = $_SESSION['usuario']??"";

    if($sesion == ""){
        $this->view->render('login/index');
    }else{

        $idSerie = $_POST['serie'];
        $idGenero = $_POST['genero'];
       if($_POST['genero']=="-1"){

        $idSerie = $_POST['serie'];
        $generoserie = $this->model->genser($idSerie);
        $nogeneroserie = $this->model->noGenser($idSerie);
        $serie = $this->model->getById($idSerie);
        $this->view->nogeneros = $nogeneroserie;
        $this->view->generos = $generoserie;
        $this->view->serie = $serie;
        $this->view->render('main/generos2');

       }else{
        $idSerie = $_POST['serie'];
        $idGenero = $_POST['genero'];
        
        if($this->model->anadirG($idSerie,$idGenero)){

            $idSerie = $_POST['serie'];
            $generoserie = $this->model->genser($idSerie);
            $nogeneroserie = $this->model->noGenser($idSerie);
            $serie = $this->model->getById($idSerie);
            $this->view->nogeneros = $nogeneroserie;
            $this->view->generos = $generoserie;
            $this->view->serie = $serie;
            $this->view->render('main/generos');

          }else{
              echo "no se ha añadido correctamente";
          }
       }

    }
   }

   //añade un nuevo genero 
   function anadirGenN(){

        session_start();
        $sesion = $_SESSION['usuario']??"";

        if($sesion == ""){
            $this->view->render('login/index');
        }else{
            $serie = $_POST['serie'];
            $genero = $_POST['nombre'];

        if($this->model->anadirGn($serie,$genero)){

            $idSerie = $_POST['serie'];
            $generoserie = $this->model->genser($idSerie);
            $nogeneroserie = $this->model->noGenser($idSerie);
            $serie = $this->model->getById($idSerie);
            $this->view->nogeneros = $nogeneroserie;
            $this->view->generos = $generoserie;
            $this->view->serie = $serie;
            $this->view->render('main/generos');
            
        }else{
            echo "no se ha añadido correctamente";
        }
        }

   }




}