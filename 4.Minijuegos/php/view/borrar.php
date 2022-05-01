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
            <li><a href="../controller/controlador.php?accion=listar" class="nav-link activado">Listado de Minijuegos</a></li>
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
                    if (isset($_GET['id'])) {
                        require_once('../controller/controlador.php');
                        $controlador = new Controlador; 
                        $controlador->borrar();
                        $filas = $controlador->filasBorrar;
                        if (isset($filas)) {
                            echo "
                                <tr>
                                    <td>".$filas['nombre']."</td>
                                    <td>".$filas['icono']."</td>
                                    <td>".$filas['ruta']."</td>
                                </tr>
                                <form class=formBorrar action=# method=post>
                                    <input class=submit type=submit value=Borrar minijuego name=borrar>
                                </form>   
                            "; 
                        }else{
                            echo "<div class=error>No existe el id: ".$_GET['id']."</div>";
                        }                        
                    }else{
                        echo "<div class=error>Error, no hay minijuego seleccionado.</div>";                        
                    }
                ?>
            </table>                     
        </div>        
    </div>    
</body>
</html>