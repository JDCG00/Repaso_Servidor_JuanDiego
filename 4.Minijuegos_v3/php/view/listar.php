<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilo.css">
    <title>CRUD Repaso Minijuegos Juan Diego</title>
</head>
<body>
    <nav>
        <ul class="nav nav-boton">    
            <li><a href="../../index.html" class="nav-link">Inicio</a></li>
            <li><a href="../controller/controlador.php?accion=alta" class="nav-link">Alta de Minijuegos</a></li>
            <li><a href="#" class="nav-link activado">Listado de Minijuegos</a></li>
        </ul>
    </nav>
    <div class="contenedor">
        <div class="lista">
            <form action="#" method="post">
                <label class="title" for='minijuego'>Selecciona un minijuego:</label>
                <?php
                    require_once('../controller/controlador.php');
                    $controlador = new Controlador;
                    $controlador->listar();
                    $filas = $controlador->filas;
                    if (isset($filas)) {
                        echo "<select name='minijuego'>";

                        foreach ($filas as $valor) {
                            echo "<option value=".$valor['idMinijuego'].">".$valor['nombre']."</option>";
                        }
                        echo "</select>";
                    }else{
                        echo "<div class=error>No existen valores.</div>";
                    }
                ?>
                <input class="submit" type="submit" name="borrar" value="Borrar">
                <input class="submit" type="submit" name="modificar" value="Modificar">
            </form>
        </div>        
    </div>    
</body>
</html>