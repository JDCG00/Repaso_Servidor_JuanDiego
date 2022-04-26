<?php
    require_once('../config_db.php');

    class Modelo{
        
        private $conex;
        public $filas;
        public $filasBorrar;

        function __construct(){
            $this->conex = new mysqli(servidor, usuario, pw, bd);
        }        

        function insertar($icono){
                     
            $consulta = "INSERT INTO minijuegos(nombre, icono, ruta) VALUES('".$_POST['nombre']."', $icono, '".$_POST['enlace']."');";
            try {
                $this->conex -> query($consulta);
            } catch (mysqli_sql_exception $e) {
                echo $e->getMessage();
            }
                     
        }
        function consultar(){
            $consulta = "SELECT * FROM minijuegos;";
            
            $resultado = $this -> conex -> query($consulta);
            while($fila = $resultado->fetch_array())
            {
                $this -> filas[] = $fila;
            }
        }
        function deleteListar(){
            $consulta1 = "SELECT * FROM minijuegos WHERE idMinijuego=".$_GET['id'].";";
            
            $resultado = $this -> conex ->query($consulta1);

            $this -> filasBorrar = $resultado -> fetch_array();
        }
        function delete(){
            $consulta2 = "DELETE FROM minijuegos WHERE idMinijuego = ".$_GET['id'].";";
            $this -> conex ->query($consulta2);

        }
    }
?>