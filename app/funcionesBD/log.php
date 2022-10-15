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
		
		$email=$_POST['email'];
		$contraseña=$_POST['contrasena'];
		$_SESSION['email']=$email;
		
		$resultado=mysqli_query($conn, "SELECT * FROM `usuarios` WHERE email='$email' AND contrasena='$contraseña'")
   		or die (mysqli_error($conn));
		
		$filas=mysqli_num_rows($resultado);
		if ($filas>0) {
		  header("location:tusDatos.php");
		}
		else {
		  echo '<script>alert("Contraseña incorrecta"); window.location.href="login.php"</script>';;
		}
		mysqli_free_result($resultado);
?>

