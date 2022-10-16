<?php
    //Guardar los datos de la bd en variables
    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";
    //Conectar con la bd
    $conn = mysqli_connect($hostname,$username,$password,$db);
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    } 
    //Guardar los datos del formulario
    $ubi = $_POST['ubicacion'];
    $hab = $_POST['habitantes'];
    $mCuad = $_POST['mCuad'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    //Controlar que estan todos los datos
    if($ubi==null or $hab==null or $mCuad==null or $precio==null or $imagen==null){
        echo '<script>alert("Error: rellena todos los campos");window.location.href="../anadirElim.php"</script>';
    }
    //Introducir los datos
    mysqli_query($conn, "INSERT INTO `alojamientos` (ubicacion,habitantes,mCuadrados,precio,imagen) VALUES ('$ubi', '$hab', '$mCuad', '$precio', '$imagen')")
   		or die (mysqli_error($conn));
   		
   		echo '<script>alert("Alojamiento registrado correctamente"); window.location.href="../listaCasas.php"</script>';

?>