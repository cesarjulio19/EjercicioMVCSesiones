<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="position : absolute;">
    <form action="<?php echo constant('URL') . 'registro/anadirUsu' ?>" method="post">

       <div style = " width: 500px; margin-left: 400px; margin-top: 100px">
       <H1 style="text-align: center;">mis Series</H1><br><br>

       <div class="mb-3" style = " width: 500px">
         <input type="text" class="form-control" id="nombre" placeholder="Nombre" maxlength="30" name="nombre">
       </div>

       <div class="mb-3" style = " width: 500px">
         <input type="text" class="form-control" id="apellido" placeholder="Apellidos" maxlength="69" name="apellido">
       </div>

       <div class="mb-3" style = " width: 500px">
         <input type="email" class="form-control" id="email" placeholder="Email" maxlength="50" name="email">
       </div>

       <div class="mb-3" style = " width: 500px">
         <input type="text" class="form-control" id="usuario" placeholder="Nombre de usuario" maxlength="10" name="usuario">
       </div>

       <div class="mb-3" style = " width: 500px">
         <input type="password" class="form-control" id="password" placeholder="Contraseña" maxlength="10" name="contr">
       </div>

       <div class="mb-3" style = " width: 500px">
         <input type="password" class="form-control" id="password1" placeholder="Conf:Contraseña" maxlength="10" name="contr1">
       </div>
       <br>
       <button type="submit" class="btn btn-primary btn-lg" style="width: 250px"><span>Entrar</span></button>
       
       



           
       </div>
       <a class="btn btn-danger btn-lg" role="button" aria-disabled="true" style="width: 250px; position: relative; top: -48px; left: 650px" href="<?php echo constant('URL') . 'login/render' ?>"><span>Cancelar</span></a>

    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>