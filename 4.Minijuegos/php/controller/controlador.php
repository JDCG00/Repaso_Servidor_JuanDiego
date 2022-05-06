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
            if (isset($_POST['listar'])) {
                if (isset($_POST['minijuego'])) {
                    header("Location:controlador.php?accion=listarMinijuego&id=".$_POST['minijuego']."");  
                }
            }
        }
        function listarMinijuegoVista(){
            require_once('../view/listar_minijuego.php');
        }
        function listarMinijuego(){
            $this -> modelo -> delete_update_Listar();
            $this -> filasListar = $this -> modelo -> filasBorrarMod;
        }
        function listarCheckVista(){
            require_once('../view/listar_check.php');
        }
        function listarCheck(){            
            $this -> modelo-> consultar();
            $this->filas = $this -> modelo -> filas;
            if (isset($_POST['listar'])) {
                if (isset($_POST['checkMinijuego'])) {
                    $id = null;
                    foreach ($_POST['checkMinijuego'] as $valor) {
                        $id .= $valor.', ';
                    }
                    $id = rtrim($id, ', ');
                    header("Location:controlador.php?accion=listarCheckMinijuegos&id=$id");
                }              
            }
        }
        function listarCheckMinijuegosVista(){
            require_once('../view/listar_check_minijuegos.php');
        }
        function listarCheckMinijuegos(){
            $this -> modelo -> listarMinijuegosCheck();
            $this -> filasListarCheck = $this -> modelo -> filas;
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
    if (isset($_GET['accion'])) {
        switch ($_GET['accion']) {
            case 'alta':
                $controlador->alta();
                break;
            case 'listar':
                $controlador -> listarVista();
                break;
            case 'listarMinijuego':
                $controlador -> listarMinijuegoVista();
                break;
            case 'listarCheck':
                $controlador -> listarCheckVista();
                break;
            case 'listarCheckMinijuegos':
                $controlador -> listarCheckMinijuegosVista();
                break;
            case 'borrar':
                $controlador -> borrarVista();
                break;
            case 'modificar':
                $controlador -> modificarVista();
                break;
            default:
                header("Location:../view/accion_no_encontrada.html");
                break;
        }
    }else{
        header("Location:../view/error.html");
    }
?>