<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach Días</title>
</head>
<body>
    <h3>Días de la semana</h3>
</body>
</html>
<?php

    //Declaro los días de la semana en un array.
    $dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes");

    //El count lo que hace es contar todos los elementos que hay en un array, es decir, saca el número total de elementos de un array.
    
    //Recorro el array con un for más un count para saber el número total de elementos que contiene el array y así saber el nuḿero de veces que se repite el bucle, en este caso, el total(5) - 1, imprimiendo por pantalla el índice(números) y el valor(días).
    echo "<h4>Días de la semana con for con count con índice.</h4>";
    for ($i=0; $i < count($dias); $i++) { 
        echo $i ."&nbsp" . $dias[$i] ."<br>";
    }
    //Recorro el array con un for más un count para saber el número total de elementos que contiene el array y así saber el nuḿero de veces que se repite el bucle, en este caso, el total(5) - 1, sin índice, imprimiendo por pantalla solo el valor(días).
    echo "<h4>Días de la semana con for con count sin índice.</h4>";
    for ($i=0; $i < count($dias); $i++) { 
        echo $dias[$i]."<br>";
    }
    //Recorro el array sacando todos los elementos, tanto el índice(números), como el valor de este(días).
    echo "<h4>Días de la semana con foreach con índice.</h4>";
    foreach ($dias as $indice => $valor) {
        echo $indice ."&nbsp" . $valor ."<br>";
    }
    //Recorro el array sacando solo el valor de los elementos, los días de la semana.
    echo "<h4>Días de la semana con foreach sin índice.</h4>";
    foreach ($dias as $valor) {
        echo $valor ."<br>";
    }
?>