<?php
$error = "";
?>
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

<form action="<?php echo constant('URL') . 'login/iniSesion' ?>" method="post">
<div style = " width: 500px; margin-left: 400px; margin-top: 100px">
<H1 style="text-align: center;">mis Series</H1><br><br>

<div class="mb-3" style = " width: 500px">
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de usuario" maxlength="10" name="usuario">
</div>

<div class="mb-3" style = " width: 500px">
  <input type="password" class="form-control" id="exampleFormControlInput" placeholder="Contraseña" maxlength="10" name="contr">
</div>

<button type="submit" class="btn btn-primary" style="width: 500px">Entrar</button>

<div style="margin-left: 120px">
<br>
<a href="<?php echo constant('URL') . 'registro/render' ?>"><span>Crear Usuario</span></a>
<span>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp</span>
<a href=""><span>Recordar contraseña</span></a>
</div>

</div>

</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>