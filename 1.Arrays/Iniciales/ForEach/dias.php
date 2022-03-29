<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach Días</title>
</head>
<body>
    
</body>
</html>
<?php
    $dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes");
    // for ($i=0; $i < count($dias); $i++) { 
    //     echo $dias[$i]."<br>";
    // }
    foreach ($dias as $i => $valor) {
        echo $i ."&nbsp" . $valor ."<br>";
    }
?>