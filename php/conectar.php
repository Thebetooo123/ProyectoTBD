<?php
    $usuario = "usuario";
	$password = "";
	$servidor = "localhost";
    $basededatos = "..\database\database.sql";
    $conexion = mysqli_connect( $servidor, $usuario, "" ) 
        or die ("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db( $conexion, $basededatos ) 
        or die ("No se ha podido conectar al servidor de Base de datos");
    $consulta = "insert into ";
    $resultado = mysql_query($conexion, $consulta) 
        or die ("Algo salió mal con la consulta a la base de datos");
    echo "<table borde = '2'>";
    echo "<tr>";
	echo "<th>Nombre</th>";
	echo "<th>Costo</th>";
    echo "</tr>";
    while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['nombre_platillo'] . "</td><td>" . $columna['costo'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
    mysqli_close( $conexion );
?>