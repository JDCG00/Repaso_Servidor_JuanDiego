<?php
    class Controlador    {
        function alta(){
            require('../view/alta.php');
            $icono;
            if (isset($_POST['enviar'])) {                
                if(!empty($_POST['nombre'] && $_POST['enlace'])) {
                    if (empty($_POST['icono'])) {
                        $icono = 'NULL';
                    }else {
                        $icono = "'".$_POST['icono']."'";
                    }
                }
            }            
            require('../model/modelo.php');
            $obj = new Modelo;
            $obj -> insertar($icono);
        }
        function listar(){
            echo "adsada";
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