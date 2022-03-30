<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach Meses</title>
</head>
<body>
    <h3>Meses del año</h3>
</body>
</html>
<?php

    //Declaro los meses del año junto con los días que tienen en un array asociativo
    $meses = array(
        "Enero" => 31,
        "Febrero" => 28,
        "Marzo" => 31,
        "Abril" => 30,
        "Mayo" => 31,
        "Junio" => 30,
        "Julio" => 31,
        "Agosto" => 30,
        "Septiembre" => 31,
        "Octubre" => 30,
        "Noviembre" => 31,
        "Diciembre" => 30
    );

    //Recorro el array asociativo $meses sacando todos los elementos del array, tanto el índice(meses), como el valor de este(días).
    echo "<h4>Diías de los meses del año con su respectivo índice (meses)</h4>";
    foreach ($meses as $i => $valor) {
       echo $i .":&nbsp" . $valor ."<br>";    
    }
    //Recorro el array asociativo $meses sacando solo el valor(días) de los elementos del array, sin índice(meses).
    echo "<h4>Días de los meses del año sin índice (sin meses)</h4>";
    foreach ($meses as $valor) {
       echo $valor ."<br>";    
    }
?>