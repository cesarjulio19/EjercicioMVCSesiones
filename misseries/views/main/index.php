<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<h1>mis Series</h3><br><br>
<span><a href="<?php echo constant('URL') . 'main/render' ?>">Mis series</a></span>
<span><a href="<?php echo constant('URL') . 'login/cerrarSesion' ?>">&nbsp&nbsp|&nbsp&nbspCerrar sesión</a></span>
<br><br>



<table class="table table-borderless">
  <thead class="table-dark ">
    <tr>
      <th style="border-right-width: 5px;border-color: white" scope="col">Título</th>
      <th style="border-right-width: 5px;border-color: white" scope="col">Puntuación</th>
      <th style="border-right-width: 5px;border-color: white" scope="col">Plataforma</th>
      <th style="border-right-width: 5px;border-color: white" scope="col"></th>
    </tr>
  </thead>
  <tbody>

    <?php
       include_once 'models/serie.php';
       foreach($this->series as $row){
           $serie = new Serie();
           $serie = $row;

    ?>

    <tr>
      <td><?php echo $serie->titulo;?></th>
      <td><?php echo number_format($serie->puntuacion, 2, '.', ',');?></td>
      <?php
        if($serie->plataforma == null){
      ?>
      <td><span style="color: red;">no emitiéndose</span></td>
      <?php
        }else{
      ?>
      <td><?php echo $serie->plataforma;?></td>
      <?php
        }
      ?>
      <td><a href="<?php echo constant('URL') . 'main/verSerie/' . $serie->ids; ?>">+info</a></td>
    </tr>
    <?php
        }
      ?>
  </tbody>
</table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>