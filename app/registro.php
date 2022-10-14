<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicio Web</title>
  <link rel="stylesheet" type="text/css" href="css/headerSets.css">
  <link rel="stylesheet" type="text/css" href="css/regStyle.css">
  <script type="text/javascript" src="comprobarReg.js"></script>
</head>
<?php include("templates/header.php")?>
    <form class="form-register" onsubmit=" return comprobarReg()" action="reg.php" method="POST">
        <h4>Formulario de Registro</h4>
        <input class="control" type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input class="control" type="text" name="apellido" id="apellido" placeholder="Primer apellido">
        <input class="control" type="text" name="fechancto" id="fechancto" placeholder="Fecha de nacimiento">
        <input class="control" type="int" name="telefono" id="telefono" placeholder="Telefono">
        <input class="control" type="text" name="dni" id="dni" placeholder="DNI con letra">
        <input class="control" type="email" name="email" id="email" placeholder="Correo electonico">
        <input class="control" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
        <input class="boton" type="submit" value="Registrar">
        <p><a href="login.php">¿Ya tengo cuenta?</a></p>
    </form>

<?php include("templates/footer.php")?>