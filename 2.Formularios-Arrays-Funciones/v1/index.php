<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso Formulario, arrays, funciones v1</title>
</head>
<body>
    <h2>Repaso Formulario, arrays, funciones v1</h2>
    <form action="#" method="POST">
        <h3>Categorías</h3>
        <select name="categorias">
            <option value="Navidad">Navidad</option>
            <option value="Semana Ignaciana">Semana Ignaciana</option>
            <option value="Fiestas Escolares">Fiestas Escolares</option>
        </select>
        <br>
        <h3>Etapas</h3>
        <label for="actvidad">Nombre actividad: </label>
        <input type="text" name="actividad">
        <br>
        <label for="primaria">Primaria: </label>
        <input type="checkbox" name="etapas[]" value="Primaria">
        <br>
        <label for="eso">ESO: </label>
        <input type="checkbox" name="etapas[]" value="ESO">
        <br>
        <label for="bachillerato">Bachillerato: </label>
        <input type="checkbox" name="etapas[]" value="Bachillerato">
        <br>
        <label for="cfgm">CFGM: </label>
        <input type="checkbox" name="etapas[]" value="CFGM">
        <br>
        <label for="cfgs">CFGS: </label>
        <input type="checkbox" name="etapas[]" value="CFGS">
        <br>
        <br>
        <label for="actividad_de_seccion">Actividad de sección: </label>
        <input type="radio" name="actividad_de_seccion" value="Para clase">
        <br>
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>    
</body>
</html>
<?php
    //Si se pulsa el botón enviar realiza las siguientes acciones.
    if (isset($_POST['enviar'])) {
        //Imprime lo que se haya elegido en el input de categorías, y lo que se haya escrito en el input de actividad.
        echo "<br>".$_POST['categorias']."<br>";
        echo $_POST['actividad']."<br>";
        //Si existe etapas[], recorre el array $_POST['etapas'] e imprime el valor de los elementos del array.
        if (isset($_POST['etapas'])) {
            foreach ($_POST['etapas'] as $valor) {
                echo "$valor <br>";
            }
        }
        //Si existe actividad_de_seccion, recorre el array $_POST['actividad_de_seccion'] e imprime el valor si está seleccionado.
        if (isset($_POST['actividad_de_seccion'])) {
            echo $_POST['actividad_de_seccion']."<br>";
        }
    }
?>