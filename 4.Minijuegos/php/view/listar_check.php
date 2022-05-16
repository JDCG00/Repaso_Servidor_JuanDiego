<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="icon" href="../../img/icono_minijuego.png">
    <title>CRUD Repaso Minijuegos Juan Diego</title>
</head>
<body>
    <nav>
        <ul class="nav nav-boton">    
            <li><a href="../../index.html" class="nav-link">Inicio</a></li>
            <li><a href="../controller/controlador.php?accion=alta" class="nav-link">Alta de Minijuegos</a></li>
            <li><a href="../controller/controlador.php?accion=listar" class="nav-link">Listado de Minijuegos</a></li>
            <li><a href="#" class="nav-link activado">Listar Minijuegos con Check</a></li>
        </ul>
    </nav>
    <div class="contenedor">
        <div class="lista">
            <form action="#" method="post">
                <label class="title" for='minijuego'>Selecciona un minijuego:</label>
                <ul class="ul_checkbox">
                <?php
                    require_once('../controller/controlador.php');
                    $controlador = new Controlador;
                    $controlador->listarCheck();
                    $filas = $controlador->filas;
                    if (isset($filas)) {
                        echo "<input class='button' name='seleccionarTodo' value='Seleccionar todo' type='submit'>";
                        if (isset($_POST['seleccionarTodo'])) {
                            foreach ($filas as $valor) {
                                echo "
                                        <li class='li_checkbox'>
                                            <input name='checkMinijuego[]' value=".$valor['idMinijuego']." id='s1' type='checkbox' class='switch' checked>
                                            <label for='checkMinijuego[]'>".$valor['nombre']."</label>
                                        </li>
                                ";
                            }
                            echo "<input class='button' name='quitarTodo' value='Quitar todo' type='submit'>";
                            if (isset($_POST['quitarTodo'])) {
                                foreach ($filas as $valor) {
                                    echo "
                                            <li class='li_checkbox'>
                                                <input name='checkMinijuego[]' value=".$valor['idMinijuego']." id='s1' type='checkbox' class='switch'>
                                                <label for='checkMinijuego[]'>".$valor['nombre']."</label>
                                            </li>
                                    ";
                                }
                            }
                        }else{
                            foreach ($filas as $valor) {
                                echo "
                                        <li class='li_checkbox'>
                                            <input name='checkMinijuego[]' value=".$valor['idMinijuego']." id='s1' type='checkbox' class='switch'>
                                            <label for='checkMinijuego[]'>".$valor['nombre']."</label>
                                        </li>
                                ";
                            }
                        }
                        if (isset($_POST['listar'])) {
                            if (!isset($_POST['checkMinijuego'])){
                                echo "<div class=error>Debe seleccionar al menos un valor.</div>";
                            }
                        }
                    }else{
                        echo "<div class=error>No existen valores.</div>";
                    }
                ?>
                </ul>
                <input class="submit" type="submit" name="listar" value="Listar">
            </form>
        </div>        
    </div>    
</body>
</html>