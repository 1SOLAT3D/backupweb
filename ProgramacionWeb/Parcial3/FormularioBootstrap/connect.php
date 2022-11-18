<?php

$servidor = "localhost";

// La base de datos ya está definida. Se harán modificaciones al formulario para trabajar con ella

$basedatos = "worlds2021";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor, $usuario, $password, $basedatos) or die ("Fail to connect");
$consulta = "select * from equipo where paisEquipo = 'China' and nombreEquipo = 'LNG Esports' ";

$registros = mysqli_query($con, $consulta) or die ("El dato no existe");


$result = mysqli_fetch_all($registros);

mysqli_close($con);
echo json_encode($result);


?>