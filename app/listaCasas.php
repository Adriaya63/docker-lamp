<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicio Web</title>
  <link rel="stylesheet" type="text/css" href="css/headerSets.css">
  <link rel="stylesheet" type="text/css" href="css/prodStyle.css">
</head>
<?php include("templates/header.php")?>

<br>
        <div class="tituloproductos"><h1> LISTADO DE ALOJAMIENTOS</h1></div>
		<div class="todosproductos" id="todosproductos">
			
			<br>
            </h2></div>
            <br>
			<ul>
                <li>
                    <table class="tabla">
                    <tr>
                        <th> Codigo</th>
                        <th> Domicilio</th>
                        <th> Nº Habitantes</th>
                        <th> Extension(m2)</th>
                        <th> Precio</th>
                        <th> Imagen</th>
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
                
    $query = mysqli_query($conn, "SELECT * FROM `alojamientos`")
        or die (mysqli_error($conn));
            
    while($mostrar=mysqli_fetch_array($query)){
?>

                    <tr>
                            <td name="id" id="id"> <?php echo $mostrar['id'] ?></td>
                            <td> <?php echo $mostrar['ubicacion'] ?></td>
                            <td> <?php echo $mostrar['habitantes'] ?></td>
                            <td> <?php echo $mostrar['mCuadrados'] ?></td>
                            <td> <?php echo $mostrar['precio'] ?></td>
                            <td> <img src="./img/<?php echo $mostrar['imagen'] ?>" alt="imagen casa"></td>
                    </tr>
    <?php } ?>

                </table></li>

<?php include("templates/footer.php")?>