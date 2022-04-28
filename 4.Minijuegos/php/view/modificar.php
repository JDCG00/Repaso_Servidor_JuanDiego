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
            <li><a href="../controller/controlador.php?accion=listar" class="nav-link">Listado de Minijuegos</a></li>
        </ul>
    </nav>
    <div class="contenedor">
        <div class="lista">
            <?php
                require_once('../controller/controlador.php');
                $controlador = new Controlador;
                $controlador->modificar();
                $filas = $controlador->filasModificar;
                echo "
                        <form action='#' method='post'>
                            <div class='title'>Modificación de Minijuegos</div>
                            <div class='subtitle'>Modificar datos</div>
                            <div class='input-container ic1'>
                                <input class='input' type='text' placeholder=' ' name='nombre' />
                                <div class='cut'></div>
                                <label class='placeholder' for='nombre'>".$filas['nombre']."</label>
                            </div>
                            <div class='input-container ic2'>
                                <input class='input' type='text' placeholder=' ' name='icono' />
                                <div class='cut'></div>
                                <label for='icono' class='placeholder'>".$filas['icono']."</label>
                            </div>
                            <div class='input-container ic2'>
                                <input class='input' type='text' placeholder=' ' name='enlace' />
                                <div class='cut cut-short'></div>
                                <label for='enlace' class='placeholder'>".$filas['ruta']."</label>
                            </div>
                            <input class='submit' type='submit' name='modificar' value='Modificar minijuego'>
                        </form>  
                ";
                if (isset($_POST['modificar'])) {
                    if (empty($_POST['nombre'] && $_POST['enlace'])) {
                        echo "<div class=error>Debe rellenar el nombre y el enlace.</div>";
                    }else{
                        echo "<div class=correcto>Datos introducidos correctamente.</div>";
                        header("Location:controlador.php?accion=listar");  
                    }
                }
            ?>                    
        </div>        
    </div>    
</body>
</html>