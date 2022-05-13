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
            <li><a href="#" class="nav-link activado">Alta de Minijuegos</a></li>
            <li><a href="../controller/controlador.php?accion=listar" class="nav-link">Listado de Minijuegos</a></li>
            <li><a href="../controller/controlador.php?accion=listarCheck" class="nav-link">Listar Minijuegos con Check</a></li>
        </ul>
    </nav>
    <div class="contenedor">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="title">Alta de Minijuegos</div>
            <div class="subtitle">Introduzca datos</div>
            <div class="input-container ic1">
                <input class="input" type="text" placeholder=" " name="nombre" />
                <div class="cut"></div>
                <label class="placeholder" for="nombre">Nombre Minijuego</label>
            </div>
            <div class="input-container ic2">
                <div class="file-upload">
                    <div class="file-upload-select">
                        <div class="file-select-button" >Subir imagen</div>
                    <div class="file-select-name">No hay imagen...</div> 
                        <input type="file" name="icono" id="file-upload-input">
                    </div>
                </div>
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
                require_once('../controller/controlador.php');
                $controlador = new Controlador;
                $controlador -> alta();

                if(!empty($_POST['nombre'] && $_POST['enlace'])) {
                    if (in_array($controlador->fichero_tipo, $controlador->permitido)) {
                        if (strlen($controlador->fichero_nombre) <= 40) {
                            echo "<div class=correcto>Datos introducidos correctamente.</div>"; 
                        }else{
                            echo "<div class=error>El nombre del fichero debe tener como máximo 40 caracteres.</div>";
                        }                                      
                    }elseif (!empty($controlador->fichero_nombre)) {
                        echo "<div class=error>El archivo debe ser una imagen.</div>";
                    }else{
                        echo "<div class=correcto>Datos introducidos correctamente.</div>"; 
                    }
                }else{
                    echo "<div class=error>Debe rellenar el nombre y el enlace.</div>";
                }
            }
        ?>
    </div> 
    <script src="../../js/inputFile.js"></script>
</body>
</html>