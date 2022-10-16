<?php

    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";

    $conn = mysqli_connect($hostname,$username,$password,$db);
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    } 

    $codigo=$_POST['codigo'];

    if($codigo==null){
        echo '<script>alert("Error: Introduce un codigo");window.location.href="../anadirElim.php"</script>';

    }

    mysqli_query($conn, "DELETE FROM `alojamientos` WHERE id='$codigo'")
   		or die (mysqli_error($conn));
   		
   		echo '<script>alert("Se han eliminado los datos correctamente"); window.location.href="../listaCasas.php"</script>';

?>