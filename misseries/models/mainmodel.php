<?php

include_once 'models/serie.php';
include_once 'models/genero.php';


class MainModel extends Model{

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
    //obtienes la serie mediante su id
    public function getById($id){
        $item = new Serie();
        $query = $this->db->connect()->query("SELECT*FROM serie WHERE ids = $id");
        try{

            

            while($row = $query->fetch()){

                $item->ids = $row['ids'];
                $item->titulo = $row['titulo'];
                $item->fecha    = $row['fecha'];
                $item->temporadas  = $row['temporadas'];
                $item->puntuacion  = $row['puntuacion'];
                $item->argumento  = $row['argumento'];
                $item->plataforma = $row['plataforma'];
                $item->poster  = $row['poster'];

                
            }

            return $item;
        }catch(PDOException $e){
            return [];
        }
    }

    //obtienes los generos de la serie
    public function genser($id){
        $items = [];
        $items2 = [];
        


            try{

            $query = $this->db->connect()->query("SELECT*FROM pertenece WHERE ids = $id");
            $query2 = $this->db->connect()->query("SELECT*FROM genero");

            while($row = $query->fetch()){
                $item = $row['idg'];
                

                array_push($items, $item);
            }
             $n = sizeof($items);

            while($row = $query2->fetch()){
                $item = new genero();
                for($i=0;$i<$n;$i++){
                    if($items[$i] == $row['idg']){
                        $item->idg = $row['idg'];
                        $item->genero = $row['genero'];
                        array_push($items2, $item);
                    }
                }
            }

                return $items2;

            }catch(PDOException $e){
                return[];
            }

          
    }

    //obtienes los generos que no pertenece a la serie
    public function noGenser($id){
        $items = [];
        $items2 = [];
        


            try{

            $query = $this->db->connect()->query("SELECT*FROM pertenece WHERE ids = $id");
            $query2 = $this->db->connect()->query("SELECT*FROM genero");

            while($row = $query->fetch()){
                $item = $row['idg'];
                

                array_push($items, $item);
            }
             $n = sizeof($items);

            while($row = $query2->fetch()){
                $item = new genero();
                $item->idg = $row['idg'];
                $item->genero = $row['genero'];
                array_push($items2, $item);
            }
            $z = sizeof($items2);
            
            for($i=0;$i<$n;$i++){
                for($f=0;$f<$z;$f++){
                    if($items[$i]==($items2[$f]->idg)){
                        array_splice($items2, $f, 1);
                        $z = sizeof($items2);
                    }
                }
            }


                return $items2;

            }catch(PDOException $e){
                return[];
            }

          
    }
    //edita la serie
    public function editar($ids,$fecha,$temporadas,$puntuacion,$argumento){

        
        
        try{
            
            $query = $this->db->connect()->query("UPDATE serie SET fecha = '$fecha', temporadas = $temporadas, puntuacion = $puntuacion, argumento = '$argumento'  WHERE ids = $ids");
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
    //elimina el genero de una serie
    public function eliminarGen($ids,$idg){
        $query = $this->db->connect()->query("DELETE FROM pertenece WHERE ids = $ids AND idg = $idg ");
        try{
            
            
            $query ->execute();
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
    //añade un genero existente a una serie
    public function anadirG($ids,$idg){
        try{
            
            $query = $this->db->connect()->query("INSERT INTO pertenece (ids , idg) VALUES ($ids,$idg);");
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
    //crea un nuevo genero y lo añade a la serie
    public function anadirGn($ids,$gen){
        try{
            
            $query = $this->db->connect()->query("INSERT INTO genero(idg , genero) VALUES ('','$gen');");
            $query2 = $this->db->connect()->query("SELECT * FROM genero WHERE genero = '$gen'");
            $n = $query2->fetch(PDO::FETCH_OBJ);
            $query3 = $this->db->connect()->query("INSERT INTO pertenece (ids , idg) VALUES ($ids,$n->idg)");
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    
}




?>