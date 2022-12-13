<?php

$fechaHoy = date('Y/m/d H:i:s');

$siguienteSemana = time() + (7 * 24 * 60 * 60);
$fechaExpira = date('Y/m-d H:i:s', $siguienteSemana) ."<br>";

echo $fechaHoy.'<br>';
echo $fechaExpira.'<br>';

setcookie("ultimaVisita",$fechaHoy,time() + (7 * 24 * 60 * 60));

?>