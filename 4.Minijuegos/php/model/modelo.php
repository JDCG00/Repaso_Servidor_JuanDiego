<?php
    require_once('../config_db.php');

    class Modelo{
        
        private $conex;
        public $filas;
        public $filasBorrar;

        function __construct(){
            $this->conex = new mysqli(SERVIDOR, USUARIO, PW, BD);
        }        

        function insertar($nombre, $icono, $enlace){            
            $consulta = "INSERT INTO minijuegos(nombre, icono, ruta) VALUES($nombre, $icono, $enlace);";
            
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
        function listarMinijuegosCheck($id){
            $consulta = "SELECT * from minijuegos WHERE idMinijuego IN($id);";
            
            $resultado = $this -> conex -> query($consulta);
            
            
            while($fila = $resultado->fetch_array())
            {
                $this -> filas[] = $fila;
            }
        }
        function delete_update_Listar($id){
            $consulta1 = "SELECT * FROM minijuegos WHERE idMinijuego=$id;";
            
            $resultado = $this -> conex ->query($consulta1);

            $this -> filasBorrarMod = $resultado -> fetch_array();
        }
        function delete($id){
            $consulta2 = "DELETE FROM minijuegos WHERE idMinijuego = $id;";
            $this -> conex ->query($consulta2);

        }
        function update($nombre, $icono, $enlace, $id){

            $consulta = "UPDATE minijuegos SET nombre = $nombre, icono = $icono, ruta = $enlace WHERE minijuegos.idMinijuego = $id;";
            echo $consulta;
            try {
                $this->conex -> query($consulta);
            } catch (mysqli_sql_exception $e) {
                echo $e->getMessage();
            }
        }
    }
?>