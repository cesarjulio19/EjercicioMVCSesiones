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
<a href="<?php echo constant('URL') . 'main/render' ?>">Mis series</a><br><br>
        <form action="<?php echo constant('URL') . 'main/editarSerie' ?>" method="post">
        

        <input type="hidden" name="ids" id="ids" value="<?php echo $this->serie->ids  ?>">

        <div class="row mb-3">
          <label for="fecha" class="col-sm-2 col-form-label"><b>Fecha de estreno:</b></label>
          <div class="col-sm-10">
             <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $this->serie->fecha?>" style="width: 400px">
          </div>
        </div>

        <div class="row mb-3">
          <label for="temporadas" class="col-sm-2 col-form-label"><b>Temporadas:</b></label>
          <div class="col-sm-10">
             <input type="number" class="form-control" id="temporadas" name="temporadas"  value="<?php echo $this->serie->temporadas?>" style="width: 400px" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="puntuacion" class="col-sm-2 col-form-label"><b>Puntuación:</b></label>
          <div class="col-sm-10">
             <input type="number" class="form-control" id="puntuacion" name="puntuacion" step="0.01" value="<?php echo $this->serie->puntuacion?>" style="width: 400px" required>
          </div>
        </div>

        <div class="row mb-3">
          <label for="genero" class="col-sm-2 col-form-label"><b>Géneros:</b></label>
          <div class="col-sm-10">
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
         <span>&nbsp&nbsp&nbsp</span>
         <a href="<?php echo constant('URL') . 'main/gestionarGenero/' . $this->serie->ids; ?>"><span>Gestionar géneros</span></a>
          </div>
        </div>

        <div class="mb-3">
            <label for="argumento" class="form-label"><b>Argumento:</b></label>
            <textarea type="text" class="form-control" id="argumento" name="argumento" rows="10" required><?php echo $this->serie->argumento?></textarea>
        </div>

        <button type="submit" class="btn btn-outline-secondary">Actualizar información</button>
            
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>