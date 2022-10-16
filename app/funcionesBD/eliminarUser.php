<?php
    session_start();
    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";

    $conn = mysqli_connect($hostname,$username,$password,$db);
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    } 

    $email=$_SESSION['email'];

    mysqli_query($conn, "DELETE FROM `usuarios` WHERE email='$email'")
   		or die (mysqli_error($conn));
   		
   		echo '<script>alert("El usuario ha sido eliminado."); window.location.href="../index.php"</script>';

?>