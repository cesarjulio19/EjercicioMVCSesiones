<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h1>mis Series</h1><br><br>
<a href="<?php echo constant('URL') . 'main/render' ?>">Mis series</a><br><br>

<div class="card mb-3" style="max-width: 1000px; height: 493px; position: relative;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo $this->serie->poster ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h1 class="card-title"><?php echo $this->serie->titulo ?></h1>
        <h5 class="card-title"><?php echo $this->serie->plataforma ?></h5>
        <?php echo "<span><b>Fecha de estreno:</b></span>" . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $this->serie->fecha . "<br>"?>
        <?php echo "<span><b>Temporadas:</b></span>" . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $this->serie->temporadas . "<br>"?>
        <?php echo "<span><b>Puntuación:</b></span>" . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . number_format($this->serie->puntuacion, 2, '.', ',') . "<br>"?>
        <span><?php echo $this->serie->argumento ?></span>
        <div class="genero" style="position: absolute; bottom: 10px; right: 0;">
        <?php
         include_once 'models/genero.php';
         foreach($this->generos as $row){
            $genero = new genero();
            $genero = $row;

        ?>

         <span><?php echo $genero->genero . ","?></span>

         <?php
         }
         ?>

        </div>
      </div>
    </div>
  </div>
</div>
<br>

<div style="margin-left: 400px">

<a href="<?php echo constant('URL') . 'main/render' ?>"><span>Volver atrás</span></a>
<span>&nbsp&nbsp&nbsp|</span>
<a href="<?php echo constant('URL') . 'main/gestionarGenero/' . $this->serie->ids; ?>"><span>Gestionar géneros</span></a>
<span>&nbsp&nbsp&nbsp|</span>
<a href="<?php echo constant('URL') . 'main/verEditarSerie/' . $this->serie->ids; ?>"><span>Editar serie</span></a>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>