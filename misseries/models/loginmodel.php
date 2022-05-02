<?php

include_once 'models/usuario.php';
include_once 'models/serie.php';
include_once 'models/genero.php';

class LoginModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    //obtienes todas las series
    public function get(){
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT*FROM serie");

            while($row = $query->fetch()){
                $item = new serie();
                $item->ids = $row['ids'];
                $item->titulo = $row['titulo'];
                $item->fecha    = $row['fecha'];
                $item->temporadas  = $row['temporadas'];
                $item->puntuacion  = $row['puntuacion'];
                $item->argumento  = $row['argumento'];
                $item->plataforma = $row['plataforma'];
                $item->poster  = $row['poster'];

                array_push($items, $item);
            }

            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function login($usu,$contra){
        
        $query = $this->db->connect()->query("SELECT*FROM usuario WHERE usuario = '$usu' AND pasword = '".md5($contra)."' ");

        if( $row = $query->fetch() ){
            return true;
        }else{
          return false;
        }
    }

}