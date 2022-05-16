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
            <li><a href="../controller/controlador.php?accion=listar" class="nav-link">Listado de Minijuegos</a></li>
            <li><a href="#" class="nav-link activado">Listar Minijuegos con Check</a></li>
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
                    $controlador->listarCheckMinijuegos();
                    $filas = $controlador->filasListarCheck;
                    if (isset($filas)) {
                        foreach ($filas as $valor) {
                            echo "
                                    <tr>
                                        <td>".$valor['nombre']."</td>
                                    ";
                                    if ($valor['icono'] == NULL) {
                                        echo "<td class='td_img'>No hay imagen</td>";
                                    }else{
                                        echo "
                                            <td class='td_img'>
                                                <div class='cell_listar'>
                                                    <img class='img_modificar' src='../../ficheros/".$valor['icono']."' alt='Imagen no encontrada' />
                                                </div>
                                            </td>
                                        ";
                                    }
                                    echo "       
                                        <td>".$valor['ruta']."</td>
                                        <td><a href=../controller/controlador.php?accion=borrar&id=".$valor['idMinijuego']."><img src=https://cdn-icons-png.flaticon.com/512/3096/3096750.png></a></td>
                                        <td><a href=../controller/controlador.php?accion=modificar&id=".$valor['idMinijuego']."><img src=https://cdn-icons-png.flaticon.com/512/588/588436.png></a></td>
                                    </tr>
                                    ";
                        }
                        echo "<a class=submit href='../controller/controlador.php?accion=listarCheck'>Volver</a>";
                    }else{
                        echo "<div class=error>No existen valores.</div>";
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