<?php

$servidor = "localhost";

$basedatos = "worlds2021";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor, $usuario, $password, $basedatos) or die ("Fail to connect");
$consulta = "select * from equipo";

$registros = mysqli_query($con, $consulta) or die ("El dato no existe");


$result = mysqli_fetch_all($registros, MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);

?>