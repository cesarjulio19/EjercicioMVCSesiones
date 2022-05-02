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
<h1>mis Series</h1>
<h4><b><?php echo $this->serie->titulo ?></b></h4>
<a href="<?php echo constant('URL') . 'main/render' ?>"><span>Mis series</span></a>
<span>&nbsp|</span>
<a href="<?php echo constant('URL') . 'main/verSerie/' . $this->serie->ids; ?>"><span>Volver atrás</span></a>
<br><br><br>

<table class="table table-borderless" style="width: 500px">
  <thead  class="table-dark ">
    <tr>
      <th style="border-right-width: 5px;border-color: white" scope="col">Género</th>
      <th style="border-right-width: 5px;border-color: white" scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
        include_once 'models/genero.php';
        foreach($this->generos as $row){
            $genero = new genero();
            $genero = $row;
                
   ?>

    <tr>
      <td><?php echo $genero->genero?></td>
      <td><a href="<?php echo constant('URL') . 'main/eliminarGenero/' . $genero->idg . '/' . $this->serie->ids ?>">Borrar</a></td>
    </tr>

    <?php
         }
    ?>
     <form action="<?php echo constant('URL') . 'main/anadirGenN' ?>" method="post">
     <input type="hidden" name="serie" id="serie" value="<?php echo $this->serie->ids  ?>">
    <tr>
      <td>
      <select name = "genero" class="form-select" aria-label="Default select example">
        <option selected>Elige un Género</option>
        <?php
        include_once 'models/genero.php';
        foreach($this->nogeneros as $row){
            $nogenero = new genero();
            $nogenero = $row;
                
        ?>
        <option  value="<?php echo $nogenero->idg?>"><?php echo $nogenero->genero?></option>
        <?php
         }
        ?>
        <option value="-1">Nuevo género</option>
      </select>
      
      </td>
      <td></td>
    </tr>

    <tr>
      <td><input type="text" class="form-control" id="nombre" name="nombre"  style="" required></td>
      <td><button type="submit" class="btn btn-link">Añadir</button></td>
    </tr>



    </form>



  </tbody>
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>