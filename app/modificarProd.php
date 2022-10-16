<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicio Web</title>
  <link rel="stylesheet" type="text/css" href="css/headerSets.css">
  <link rel="stylesheet" type="text/css" href="css/modProdStyle.css">
</head>
<?php include("templates/header.php")?>
<form class="form-register" action="modProdForm.php"  method="POST">
      <h4>Selecciona el codigo del alojamiento que quieras modificar</h4>
      <br>
      <input class="control" type="int" name="id" id="id" placeholder="Codigo">
      <input class="boton" type="submit" value="Modificar">
</form>
<?php include("templates/footer.php")?>
