<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicio Web</title>
  <link rel="stylesheet" type="text/css" href="css/headerSets.css">
  <link rel="stylesheet" type="text/css" href="css/tusDatosStyle.css">
  <script type="text/javascript" src="js/comprobarReg.js"></script>
</head>
<?php include("templates/header.php")?>



<form id="formularioregistro" class="formularioregistro" onsubmit=" return comprobarReg()" action="modificarDatosUser.php" method="POST">
            <div class="tituloregistro"> <h1>Tus Datos</h1> </div>

            <table class="tabladatos">
              <tr>
                <th> Nombre</th>
                <th> Apellido</th>
                <th> Fecha de nacimiento</th>
                <th> Teléfono</th>
                <th> DNI</th>
                <th> Email</th>
                <th>Contraseña</th>
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

    $correo = $_SESSION['email'];
    $query = mysqli_query($conn, "SELECT * FROM `usuarios` WHERE email='$correo'")
        or die (mysqli_error($conn));

    while($mostrar=mysqli_fetch_array($query)){
      

?>

              <tr>
               <td><input class="control" type="text" name="nombre" id="nombre" value="<?php echo $mostrar['nombre'] ?>"></td>
               <td><input class="control" type="text" name="apellido" id="apellido" value="<?php echo $mostrar['apellido'] ?>"></td>
               <td><input class="control" type="text" name="fechancto" id="fechancto" value="<?php echo $mostrar['fechancto'] ?>"></td>
               <td><input class="control" type="int" name="telefono" id="telefono" value="<?php echo $mostrar['tlf'] ?>"></td>
               <td><input class="control" type="text" name="dni" id="dni" value="<?php echo $mostrar['dni'] ?>"></td>
               <td><?php echo $mostrar['email'] ?></td>
               <td><input class="control" type="text" name="contrasena" id="contrasena" value="<?php echo $mostrar['contrasena'] ?>"></td>
              </tr>
    <?php } ?>
                </table>
            <br>
            <h2>Para cambiar de email, elimine su usuario y vuelva a registrarse con el nuevo email </h2>
	    <br>
            <div class="botonregistro"> <button class="botonsumbit"  type="submit" value="Modificar" > Modificar</button></div>
            
            <br><br>
            </form>
            <form name="formularioeliminar" action="eliminar.html">

            <div class="botonregistro"> <button class="botonsumbit"  type="submit" value="Eliminar" > Eliminar</button></div>
       

        </form>
        

<?php include("templates/footer.php")?>











