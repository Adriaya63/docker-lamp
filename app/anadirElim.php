<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicio Web</title>
  <link rel="stylesheet" type="text/css" href="css/headerSets.css">
  <link rel="stylesheet" type="text/css" href="css/anaElimStyle.css">
  <script type="text/javascript" src="js/confirmacion.js"></script>
</head>
<?php include("templates/header.php")?>

<br>
        <div>
            <div class="contenedor1">
            <h4 class="titulocont">Añadir Alojamiento</h4>
            <p>Escriba los datos en sus respectivos campos y pulse el boton "Añadir"</p>
                <form class="form-register" onsubmit="" action="funcionesBD/anadir.php" method="POST">
                    <input class="control" type="text" name="ubicacion" id="ubicacion" placeholder="Ubicacion">
                    <input class="control" type="int " name="habitantes" id="habitantes" placeholder="Habitantes">
                    <input class="control" type="int" name="mCuad" id="mCuad" placeholder="Metros cuadrados">
                    <input class="control" type="int" name="precio" id="precio" placeholder="Precio">
                    <input class="control" type="file" name="imagen" id="imagen" placeholder="Elige un archivo">
                    <input class="boton" type="submit" value="Añadir">
                </form>
            </div>
            <img src="https://media.tenor.com/3WocBJh0dpIAAAAd/yo-cuando-me-dicen-que-no-hay-clase-monkey.gif" alt="mono bailando">
            <div class="contenedor2">
            <h4 class="titulocont">Eliminar Alojamiento</h4>
            <p>Introduzca el codigo del alojamiento y pulse "Eliminar"</p>
                <form class="form-register" onsubmit="return confirmacion()" action="funcionesBD/eliminar.php" method="POST">
                    <input class="control" type="int" name="codigo" id="codigo" placeholder="Codigo">
                    <input class="boton" type="submit" value="Eliminar">
                </form>
            </div>
        </div>


<?php include("templates/footer.php")?>
