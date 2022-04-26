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
            <li><a href="../../index.html" class="nav-link activado">Inicio</a></li>
            <li><a href="../controller/controlador.php?accion=alta" class="nav-link">Alta de Minijuegos</a></li>
            <li><a href="#" class="nav-link">Listado de Minijuegos</a></li>
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
                require_once('../controller/controlador.php');
                $controlador = new Controlador;
                $controlador->listar();
                $filas = $controlador->filas;
                foreach ($filas as $valor) {
                    echo "
                            <tr>
                                <td>".$valor['nombre']."</td>
                                <td>".$valor['icono']."</td>
                                <td>".$valor['ruta']."</td>
                                <td><a href=../controller/controlador.php?accion=borrar&id=".$valor['idMinijuego']."><img src=https://cdn-icons-png.flaticon.com/512/3096/3096750.png></a></td>
                                <td><a href=><img src=https://cdn-icons-png.flaticon.com/512/588/588436.png></a></td>
                            </tr>
                        ";
                }             
            ?>
            </table>
        </div>        
    </div>    
</body>
</html>