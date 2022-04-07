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
    //Se utiliza la clase Inicio.
    $inicio = new Inicio();
    //Se llama al método añadir del objeto inicio.
    $inicio -> añadir();

    //Se recorre el array del atributo meses y se imprime el índice y el valor de cada elemento del array.
    foreach ($inicio -> meses as $indice => $valor) {
        echo "$indice &nbsp $valor <br>";
    }
?>