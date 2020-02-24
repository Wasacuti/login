	<?php 
	//session_start();
$dbhost="127.0.0.1";

	try {
		$conexion = new PDO('mysql:host=127.0.0.1;dbname=prueba1','root','');
	//echo 'Se conecto correctamente';


	} catch (\Throwable $th) {
	    echo("No se pudo conectar: $th");
	}




	?>