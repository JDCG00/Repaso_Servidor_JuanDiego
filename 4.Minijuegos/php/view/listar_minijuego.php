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
            <li><a href="../controller/controlador.php?accion=listarCheck" class="nav-link">Listar Minijuegos con Check</a></li>
        </ul>
    </nav>
    <div class="contenedor">
        <div class="lista">
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Icono</th>
                    <th>Ruta</th>
                </tr>
            <?php
                if (!empty($_GET['id'])) {                    
                    require_once('../controller/controlador.php');
                    $controlador = new Controlador;
                    $controlador->listarMinijuego();
                    $filas = $controlador->filasListar;
                    if (isset($filas)) {
                        echo "
                            <tr>
                                <td>".$filas['nombre']."</td>
                            ";
                            if ($filas['icono'] == NULL) {
                                echo "
                                    <td>".$filas['icono']."</td>
                                ";
                            }else{
                                echo "
                                    <td><img src=../../ficheros/".$filas['icono']."></td>
                                ";
                            }
                            echo "    
                                <td>".$filas['ruta']."</td>
                                <td><a href=../controller/controlador.php?accion=borrar&id=".$_GET['id']."><img src=https://cdn-icons-png.flaticon.com/512/3096/3096750.png></a></td>
                                <td><a href=../controller/controlador.php?accion=modificar&id=".$_GET['id']."><img src=https://cdn-icons-png.flaticon.com/512/588/588436.png></a></td>
                                </tr>
                                <a class=submit href='../controller/controlador.php?accion=listar'>Volver</a>
                            ";
                    }else{
                        echo "<div class=error>No existe el id: ".$_GET['id']."</div>";
                    }
                }else{
                    header("Location:../view/error.html");
                }
            ?>
            </table>
        </div>        
    </div>    
</body>
</html>