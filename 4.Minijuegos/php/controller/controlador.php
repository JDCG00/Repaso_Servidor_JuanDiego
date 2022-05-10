<?php
    class Controlador{
        public $modelo;
        public $filas;
        public $filasBorrar;
        function __construct(){
            require_once('../model/modelo.php');
            $this->modelo = new Modelo;

        }
        function altaVista(){
            require_once('../view/alta.php');
        }
        function alta(){
            if (isset($_POST['enviar'])) {
                $ruta = '../../ficheros/';            
                $fichero = $_FILES['icono'];

                $this->fichero_nombre = $fichero['name'];
                $this->fichero_tmp = $fichero['tmp_name'];
                $this -> fichero_tipo = $fichero['type'];

                $this->fichero_subido = $ruta . basename($this->fichero_nombre);
                $this->permitido = array("image/png", "image/jpeg", "image/gif");
                
                if(!empty($_POST['nombre'] && $_POST['enlace'])) {
                    $nombre = "'".$_POST['nombre']."'";
                    $enlace = "'".$_POST['enlace']."'";
                    if (in_array($this->fichero_tipo, $this->permitido)) {
                        if (strlen($this->fichero_nombre) <= 40) {
                            move_uploaded_file($this->fichero_tmp, $this->fichero_subido);
                        }
                        $icono = "'$this->fichero_nombre'";
                        $this ->modelo -> insertar($nombre, $icono, $enlace);
                    }elseif (empty($this->fichero_nombre)) {
                        $icono = 'NULL';
                        $this ->modelo -> insertar($nombre, $icono, $enlace);
                    }
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
            $id = $_GET['id'];
            if (!empty($id)) {
                $this -> modelo -> delete_update_Listar($id);
                $this -> filasListar = $this -> modelo -> filasBorrarMod;
            }
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
                        $id .= $valor.',';
                    }
                    $id = rtrim($id, ',');
                    header("Location:controlador.php?accion=listarCheckMinijuegos&id=$id");
                }              
            }
        }
        function listarCheckMinijuegosVista(){
            require_once('../view/listar_check_minijuegos.php');
        }
        function listarCheckMinijuegos(){
            $id = $_GET['id'];
            if (!empty($id)) {
                $this -> modelo -> listarMinijuegosCheck($id);
                $this -> filasListarCheck = $this -> modelo -> filas;
            }
        }

        function borrarVista(){
            require_once('../view/borrar.php');
        }
        function borrar(){
            $id = $_GET['id'];
            if (!empty($id)) {
                $this -> modelo -> delete_update_Listar($id);
                $this -> filasBorrar = $this -> modelo ->filasBorrarMod;
                if (isset($_POST['borrar'])) {
                    $this->modelo->delete($id);
                    header("Location:controlador.php?accion=listar");             
                }
            }
        }
        function modificarVista(){
            require_once('../view/modificar.php');
        }
        function modificar(){
            $id = $_GET['id'];
            if (!empty($id)) {
                $this -> modelo -> delete_update_Listar($id);
                $this -> filasModificar = $this -> modelo ->filasBorrarMod;
                if (isset($_POST['modificar'])) {
                    if(!empty($_POST['nombre'] && $_POST['enlace'])) {
                        $nombre = "'".$_POST['nombre']."'";
                        $enlace = "'".$_POST['enlace']."'";
                        if (empty($_POST['icono'])) {
                            $icono = 'NULL';
                        }else {
                            $icono = "'".$_POST['icono']."'";
                        }
                        $this->modelo->update($icono, $nombre, $enlace, $id);
                    }            
                }
            }
        }
    }

    $controlador = new Controlador;
    if (isset($_GET['accion'])) {
        switch ($_GET['accion']) {
            case 'alta':
                $controlador->altaVista();
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