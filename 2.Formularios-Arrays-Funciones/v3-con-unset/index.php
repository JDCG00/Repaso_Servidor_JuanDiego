<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso Formulario, arrays, funciones v3 con unset</title>
</head>
<body>
    <h2>Repaso Formulario, arrays, funciones v3 con unset</h2>
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
    //Si existe la variable $_POST['enviar'], es decir, si se pulsa enviar, realiza la siguiente acción.
    if (isset($_POST['enviar'])) {
        //Se recoge el archivo inicio.php con todo lo que este contiene.
        require("inicio.php");
        //Se utiliza la clase Inicio.
        $inicio = new Inicio();
        
        //Se crea la variable $array que recoge el array retornado de la funcion recogerDatos, y ejecuta la función recogerDatos.
        $array = $inicio -> recogerDatos();
        //Se ejecuta la función mostrar datos, que muestra los valores de la variable creada anteriormente llamada $array, que es dónde se haya el array retornado.
        $inicio -> mostrarDatos($array);
    }
?>