<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if(isset($_COOKIE['ultimaVisita']))
        {
        printf("Su ultima vista fue : %s", $_COOKIE['ultimaVisita']);
        }
        else {
            $fechaHoy = date('Y/m/d H:i:s');

            $siguienteSemana = time() + (7 * 24 * 60 * 60);
            $fechaExpira = date('Y/m-d H:i:s', $siguienteSemana) ."<br>";

            echo '<b>Fecha de Creacion de Cookie: </b>' .$fechaHoy.'<br>';
            echo '<b>Fecha de Vencimiento de Cookie: </b>' .$fechaExpira.'<br>';

            setcookie("ultimaVisita", $fechaHoy, time() + (7 * 24 * 60 * 60));
        }
    ?>
</body>
</html>