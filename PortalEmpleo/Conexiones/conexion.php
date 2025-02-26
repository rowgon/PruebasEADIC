<?php
    $conexion = new mysqli("134.0.8.127","diego","Eadic*2010","portal-empleo"); 
	$conexion->set_charset("utf8");

    if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

?>