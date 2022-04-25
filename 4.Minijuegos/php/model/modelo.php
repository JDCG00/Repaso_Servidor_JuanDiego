<?php
    require('../config_db.php');

    class Modelo{
        
        private $conex = null;

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
            $consulta = "SELECT nombre, icono, ruta FROM minijuegos;";
            
            $resultado = $this -> conex -> query($consulta);
            // $resultado -> fetch_array();
            while($fila = $resultado->fetch_array())
            {
                $filas[] = $fila;
            }
            return $filas;
        }
    }
    
    
?>