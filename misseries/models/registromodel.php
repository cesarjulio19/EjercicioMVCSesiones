<?php
include_once 'models/usuario.php';
include_once 'models/serie.php';
include_once 'models/genero.php';

class RegistroModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function anadir($nombre,$email,$usuario,$contraseña){
        try{
            
            $query = $this->db->connect()->query("INSERT INTO usuario (idu , usuario , pasword , email , nombre) VALUES ('','$usuario','".md5($contraseña)."','$email','$nombre');");
            return true;
        }catch(PDOException $e){
            return false;
        }
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

    

}