<?php
        $hostname = "db";
		$username = "admin";
		$password = "test";
		$db = "database";

		$conn = mysqli_connect($hostname,$username,$password,$db);
		if ($conn->connect_error) {
			die("Database connection failed: " . $conn->connect_error);
		}
		
		$id=$_POST['id'];
		$ubicacion=$_POST['ubicacion'];
		$habitantes=$_POST['habitantes'];
		$mC=$_POST['mCuadrados'];
		$precio=$_POST['precio'];
		$img=$_POST['imagen'];
        
		mysqli_query($conn, "UPDATE `alojamientos` SET ubicacion='$ubicacion', habitantes='$habitantes', mCuadrados='$mC', precio='$precio', imagen='$img' WHERE id='$id'")
   		or die (mysqli_error($conn));
   		
   		echo '<script>alert("Se han actualizado los datos correctamente"); window.location.href="../listaCasas.php"</script>';
?>
