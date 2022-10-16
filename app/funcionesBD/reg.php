<?php
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
		$email=$_POST['email'];
		$contrasena=$_POST['contrasena'];

		$resultado=mysqli_query($conn, "SELECT * FROM `usuarios` WHERE email='$email'")
   		or die (mysqli_error($conn));
		
		$filas=mysqli_num_rows($resultado);
		if ($filas>0) {
			echo '<script>alert("Este email ya esta registrado"); window.location.href="../registro.php"</script>';
		}
		else {
		  
		mysqli_query($conn, "INSERT INTO `usuarios` (nombre,apellido,fechancto,tlf,dni,email,contrasena) VALUES ('$nombre', '$apellido', '$fechancto', '$tlf', '$dni', '$email', '$contrasena')")
		or die (mysqli_error($conn));
		
		echo '<script>alert("Se han registrado los datos correctamente"); window.location.href="../index.php"</script>';
		}
		
		
?>
