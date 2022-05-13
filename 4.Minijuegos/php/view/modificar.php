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
            <li><a href="../controller/controlador.php?accion=listarCheck" class="nav-link">Listar Minijuegos con Check</a></li>
        </ul>
    </nav>
    <div class="contenedor">
        <?php
            if (!empty($_GET['id'])) {
                require_once('../controller/controlador.php');
                $controlador = new Controlador;
                $controlador->modificar();
                $filas = $controlador->filasModificar;
                if (isset($filas)) {
                    echo "
                        <form action='#' method='post' enctype='multipart/form-data'>
                            <div class='title'>Modificación de Minijuegos</div>
                            <div class='subtitle'>Modificar datos</div>
                            <div class='input-container ic1'>
                                <input class='input' type='text' value='".$filas['nombre']."' name='nombre' />
                                <div class='cut'></div>
                                <label class='placeholder' for='nombre'>Nombre</label>
                            </div>
                        ";
                        if ($filas['icono']==NULL) {
                            echo "
                                    <div class='hex-cell'>
                                        <img class='img_modificar' src='../../ficheros/imagen_no_encontrada.png' alt='Imagen no encontrada' />
                                    </div>
                                    <input class='submit' type='submit' name='borrar_imagen' value='Borrar Imagen'>
                                    <div class='input-container ic2'>
                                        <div class='file-upload'>
                                            <div class='file-upload-select'>
                                                <div class='file-select-button' >Modificar imagen</div>
                                                <div class='file-select-name'>No hay imagen...</div> 
                                                <input type='file' name='icono' id='file-upload-input'>
                                            </div>
                                        </div>
                                    </div> 
                            ";
                        }else{
                            echo "
                                <div class='hex-cell'>
                                    <object class='img_modificar' data='../../ficheros/".$filas['icono']."'>
                                        <img class='img_modificar' src='../../ficheros/imagen_no_encontrada.png' alt='Imagen no encontrada' />
                                    </object>
                                </div>
                                <input class='submit' type='submit' name='borrar_imagen' value='Borrar Imagen'>
                                <div class='input-container ic2'>
                                    <div class='file-upload'>
                                        <div class='file-upload-select'>
                                            <div class='file-select-button' >Modificar imagen</div>
                                            <div class='file-select-name'>No hay imagen...</div> 
                                            <input type='file' name='icono' id='file-upload-input'>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                        echo "
                            <div class='input-container ic2'>
                                <input class='input' type='text' value='".$filas['ruta']."' name='enlace' />
                                <div class='cut cut-short'></div>
                                <label for='enlace' class='placeholder'>Enlace</label>
                            </div>
                            <input class='submit' type='submit' name='modificar' value='Modificar minijuego'>
                            <a class=submit href='../controller/controlador.php?accion=listar'>Cancelar</a>
                        </form>
                        ";
                    if (isset($_POST['modificar'])) {
                        if (empty($_POST['nombre'] && $_POST['enlace'])) {
                            echo "<div class=error>Debe rellenar el nombre y el enlace.</div>";
                        }else{
                            echo "<div class=correcto>Datos introducidos correctamente.</div>";
                        }
                    }
                }else{
                    echo "
                        <div class=lista>
                            <div class=error>No existe el id: ".$_GET['id']."</div>
                        </div>
                    ";
                }
            }else{
                echo "
                        <div class=lista>
                            <div class=error>Error, no hay minijuego seleccionado.</div>
                        </div>
                    ";
            }
        ?>   
    </div>    
    <script src="../../js/inputFile.js"></script>
</body>
</html>