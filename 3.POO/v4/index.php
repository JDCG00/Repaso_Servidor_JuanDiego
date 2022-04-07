<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses</title>
</head>
<body>
    <h3>Meses del año</h3>
</body>
</html>
<?php
    require "inicio.php";
    $inicio = new Inicio();
    
    $meses = array(
        "<b>Enero</b>" => 31,
        "<b>Febrero</b>" => 28,
        "<b>Marzo</b>" => 31,
        "<b>Abril</b>" => 30,
        "<b>Mayo</b>" => 31,
        "<b>Junio</b>" => 30,
        "<b>Julio</b>" => 31,
        "<b>Agosto</b>" => 30,
        "<b>Septiembre</b>" => 31,
        "<b>Octubre</b>" => 30,
        "<b>Noviembre</b>" => 31,
        "<b>Diciembre</b>" => 30
    );
    $inicio -> mostrar($meses);
?>