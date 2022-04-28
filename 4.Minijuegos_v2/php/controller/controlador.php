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
        function listarVista(){
            require_once('../view/listar.php');
        }
        function listar(){            
            $this -> modelo-> consultar();
            $this->filas = $this -> modelo -> filas;
        }
        function borrarVista(){
            require_once('../view/borrar.php');
        }
        function borrar(){
            $this -> modelo -> delete_update_Listar();
            $this -> filasBorrar = $this -> modelo ->filasBorrarMod;
            if (isset($_POST['borrar'])) {
                $this->modelo->delete();
                header("Location:controlador.php?accion=listar");             
            }
        }
        function modificarVista(){
            require_once('../view/modificar.php');
        }
        function modificar(){
            $this -> modelo -> delete_update_Listar();
            $this -> filasModificar = $this -> modelo ->filasBorrarMod;
            if (isset($_POST['modificar'])) {
                if(!empty($_POST['nombre'] && $_POST['enlace'])) {
                    $this->modelo->update();
                }            
            }            
        }
    }

    $controlador = new Controlador;

    switch ($_GET['accion']) {
        case 'alta':
            $controlador->alta();
            break;
        case 'listar':
            $controlador -> listarVista();
            break;
        case 'borrar':
            $controlador -> borrarVista();
            break;
        case 'modificar':
            $controlador -> modificarVista();
            break;
        default:
            echo "<h1>Acción no encontrada.</h1>";
            break;
    }

?>