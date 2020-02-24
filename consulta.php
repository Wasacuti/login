

<?php 
require('conexion.php');

$nombre=$_POST["txt_user"];
	$pass=$_POST["txt_pass"];
	$consulta = $conexion->prepare("SELECT * FROM usuarios WHERE user = '$nombre' AND '$pass'");	
$consulta->execute();

$result= $consulta-> fetch();
	if ($result!==false) {

	    session_start();
 	    $_SESSION['nombre']=$nombre;
	    header("location:hola.php");

	    }
	else {
		$errorLogin="Error al ingresar";
		include_once('login-formulario.php');

		header("location:login-formulario.php?error=1");
	   
	}



 ?>