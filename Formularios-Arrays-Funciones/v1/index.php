<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso Formulario, arrays, funciones</title>
</head>
<body>
    <h2>Repaso Formulario, arrays, funciones v1</h2>
    <form action="#" method="POST">
        <select name="categorias">
            <option value="navidad">Navidad</option>
            <option value="semana_ignaciana">Semana Ignaciana</option>
            <option value="fiestas_escolares">Fiestas Escolares</option>
        </select>
        <br>
        <h3>Etapas</h3>
        <label for="actvidad">Nombre actividad: </label>
        <input type="text" name="actividad">
        <br>
        <label for="primaria">Primaria: </label>
        <input type="checkbox" name="primaria">
        <br>
        <label for="eso">ESO: </label>
        <input type="checkbox" name="eso">
        <br>
        <label for="bachillerato">Bachillerato: </label>
        <input type="checkbox" name="bachillerato">
        <br>
        <label for="cfgm">CFGM: </label>
        <input type="checkbox" name="cfgm">
        <br>
        <label for="cfgs">CFGS: </label>
        <input type="checkbox" name="cfgs">
        <br>
        <br>
        <label for="clase">Clase: </label>
        <input type="radio" name="clase">
        <br>
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>    
</body>
</html>
<?php
    if (isset($_POST['enviar'])) {
       $actividad = $_POST['actividad'];
    }
?>