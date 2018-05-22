<?php
    $usuario = "usuario";
	$password = "";
	$servidor = "localhost";
    $basededatos = "database";
    $conexion = mysqli_connect( $servidor, $usuario, "" ) 
        or die ("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db( $conexion, $basededatos ) 
        or die ("No se ha podido conectar al servidor de Base de datos");
            
    mysqli_close( $conexion );
?>