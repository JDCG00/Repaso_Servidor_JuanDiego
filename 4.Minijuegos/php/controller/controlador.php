<?php
    class Controlador{
        public $modelo;
        public $filas;
        public $filasBorrar;
        function __construct(){
            require_once('../model/modelo.php');
            $this->modelo = new Modelo;

        }
        
        function alta(){
            require('../view/alta.php');
            if (isset($_POST['enviar'])) {                
                if(!empty($_POST['nombre'] && $_POST['enlace'])) {
                    $this ->modelo -> insertar();
                }
            }            
            
        }
        function listar(){
            require_once('../view/listar.php');
            $this -> modelo-> consultar();
            $this->filas = $this -> modelo -> filas;
        }
        function borrar(){
            require_once('../view/borrar.php');
            $this -> modelo -> deleteListar();
            $this -> filasBorrar = $this -> modelo ->filasBorrar;
            if (isset($_POST['borrar'])) {
                $this->modelo->delete();
                header("Location:controlador.php?accion=listar");             
            }            
            
        }
    }

    $controlador = new Controlador;

    switch ($_GET['accion']) {
        case 'alta':
            $controlador->alta();
            break;
        case 'listar':
            $controlador -> listar();
            break;
        case 'borrar':
            $controlador -> borrar();
            break;
        default:
            echo "<h1>Acción no encontrada.</h1>";
            break;
    }

?>