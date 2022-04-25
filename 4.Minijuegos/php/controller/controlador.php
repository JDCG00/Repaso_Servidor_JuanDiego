<?php
    class Controlador{
        function alta(){
            require('../view/alta.php');
            if (isset($_POST['enviar'])) {                
                if(!empty($_POST['nombre'] && $_POST['enlace'])) {
                    if (empty($_POST['icono'])) {
                        $icono = 'NULL';
                    }else {
                        $icono = "'".$_POST['icono']."'";
                    }
                    require('../model/modelo.php');
                    $obj = new Modelo;                    
                    $obj -> insertar($icono);
                }
            }            
            
        }
        function listar(){
            require('../view/listar.php');
            require('../model/modelo.php');
            $obj = new Modelo;
            foreach ($obj -> consultar() as $indice => $valor) {
                echo '<b>Nombre: </b>'.$valor['nombre'] .'<br>';
                echo '<b>Icono: </b>'.$valor['icono'] .'<br>';
                echo '<b>Ruta: </b>'.$valor['ruta'] .'<br>';
            }
        }
    }

    $obj = new Controlador;

    switch ($_GET['accion']) {
        case 'alta':
            $obj->alta();
            break;
        case 'listar':
            $obj -> listar();
            break;
        default:
            echo "<h1>Acción no encontrada.</h1>";
            break;
    }

?>