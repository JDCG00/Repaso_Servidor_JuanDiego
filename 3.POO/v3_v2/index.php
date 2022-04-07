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
    //Se recoge el archivo inicio.php con todo lo que este contiene.
    require "inicio.php";
    //Se crea el objeto inicio instanciando la clase Inicio.
    $inicio = new Inicio();

    //Se recorre el array del método añadir y se imprime el índice y el valor de cada elemento del array.
    foreach ($inicio -> añadir() as $indice => $valor) {
        echo "$indice &nbsp $valor <br>";
    }
?>