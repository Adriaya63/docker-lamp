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
		
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$fechancto=$_POST['fechancto'];
		$tlf=$_POST['telefono'];
		$dni=$_POST['dni'];
		$correo=$_SESSION['email'];
		$contraseña=$_POST['contrasena'];
		
		mysqli_query($conn, "UPDATE `usuarios` SET nombre='$nombre', apellido='$apellido', fechancto='$fechancto', tlf='$tlf', dni='$dni', contrasena='$contraseña' WHERE email='$correo'")
   		or die (mysqli_error($conn));
   		
   		echo '<script>alert("Se han actualizado los datos correctamente"); window.location.href="tusDatos.php"</script>';
?>
