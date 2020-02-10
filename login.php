	<?php 

	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="prueba1";


	try {
	    $conexion = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if ($conexion->connect_errno >0) {
		die("Error no se pudo conectar a la BD");
	}

	else{
			echo nl2br("CONEXION EXITOSA\n\n");
	$nombre=$_POST["txt_user"];
	$pass=$_POST["txt_pass"];
	echo nl2br("Nombre: $nombre \n Password: $pass");
	$sql = "SELECT * FROM `usuarios` WHERE user = '$nombre' AND pass = '$pass'";
	$result = $conexion->query(	$sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    echo '<br><br> Ingreso satisfactorio';
	    session_start();
	    $_SESSION['nombre']=$nombre;
	    header("location:hola.php");

	    }
	else {
		$errorLogin="Error al ingresar";
		include_once('login-formulario.php');

		header("location:login-formulario.php?error=1");
	   
	}

	}


	} catch (\Throwable $th) {
	    echo("No se pudo conectar: $th");
	}




	?>