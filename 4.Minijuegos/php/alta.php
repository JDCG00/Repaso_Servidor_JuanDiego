<?php
    require('config_db.php');
    $conex = new mysqli(servidor, usuario, pw, bd);      
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>CRUD Repaso Minijuegos Juan Diego</title>
</head>
<body>
    <nav>
        <ul class="nav nav-boton">    
            <li><a href="../index.html" class="nav-link activado">Inicio</a></li>
            <li><a href="#" class="nav-link">Alta de Minijuegos</a></li>
        </ul>
    </nav>
    <div class="contenedor">
        <form action="#" method="post">
            <div class="title">Alta de Minijuegos</div>
            <div class="subtitle">Introduzca datos</div>
            <div class="input-container ic1">
                <input class="input" type="text" placeholder=" " name="nombre" />
                <div class="cut"></div>
                <label class="placeholder" for="nombre">Nombre Minijuego</label>
            </div>
            <div class="input-container ic2">
                <input class="input" type="text" placeholder=" " name="icono" />
                <div class="cut"></div>
                <label for="icono" class="placeholder">Icono</label>
            </div>
            <div class="input-container ic2">
                <input class="input" type="text" placeholder=" " name="enlace" />
                <div class="cut cut-short"></div>
                <label for="enlace" class="placeholder">Enlace</label>
            </div>
            <input class="submit" type="submit" name="enviar" value="Enviar Alta">
        </form>
        <?php 
            if (isset($_POST['enviar'])) {
                if (empty($_POST['nombre'] && $_POST['icono'] && $_POST['enlance'])) {
                    echo "<div class=error>Debe rellenar todos los campos del formulario.</div>";
                }else {
                    $conex -> query("INSERT INTO minijuegos(nombre, icono, ruta) VALUES('".$_POST['nombre']."', '".$_POST['icono']."', '".$_POST['enlace']."');");
                }
            }
        ?>
    </div>    
</body>
</html>