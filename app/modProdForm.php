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

<form id="formularioregistro" class="formularioregistro" action="funcionesBD/modProd.php" method="POST">
            <div class="tituloregistro"> <h1>Tus Datos</h1> </div>

            <table class="tabladatos">
            <tr>
                <th> Codigo</th>
                <th> Domicilio</th>
                <th> Nº Habitantes</th>
                <th> Extension(m2)</th>
                <th> Precio</th>
                <th> Nombre de la Imagen</th>
                <th></th>
            </tr>

<?php 
    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";    
      
    $conn = mysqli_connect($hostname,$username,$password,$db);
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    $cod = $_POST['id'];
    $query = mysqli_query($conn, "SELECT * FROM `alojamientos` WHERE id='$cod'")
        or die (mysqli_error($conn));

    while($mostrar=mysqli_fetch_array($query)){
      

?>

              <tr>
                <td><input class="control" type="text" name="id" id="id" value="<?php echo $mostrar['id'] ?>"></td>
                <td><input class="control" type="text" name="ubicacion" id="ubicacion" value="<?php echo $mostrar['ubicacion'] ?>"></td>
                <td><input class="control" type="int" name="habitantes" id="habitantes" value="<?php echo $mostrar['habitantes'] ?>"></td>
                <td><input class="control" type="int" name="mCuadrados" id="mCuadrados" value="<?php echo $mostrar['mCuadrados'] ?>"></td>
                <td><input class="control" type="int" name="precio" id="precio" value="<?php echo $mostrar['precio'] ?>"></td>
                <td><input class="control" type="text" name="imagen" id="imagen" value="<?php echo $mostrar['imagen'] ?>"></td>
              </tr>
    <?php } ?>
                </table>
	    <br>
            <div class="botonregistro"> <button class="botonsumbit"  type="submit" value="Modificar" > Modificar</button></div>
            
            <br><br>
            </form>

<?php include("templates/footer.php")?>