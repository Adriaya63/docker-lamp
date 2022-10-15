<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicio Web</title>
  <link rel="stylesheet" type="text/css" href="css/headerSets.css">
  <link rel="stylesheet" type="text/css" href="css/logStyle.css">
</head>
<?php include("templates/header.php")?>

  <form class="form-register" action="funcionesBD/log.php"  method="POST">
      <h4>Inicia Sesión</h4>
      <input class="control" type="email" name="email" id="email" placeholder="Correo electonico">
      <input class="control" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
      <input class="boton" type="submit" value="Login">
      <p><a href="registro.php">¿No tengo cuenta?</a></p>
</form>

<?php include("templates/footer.php")?>