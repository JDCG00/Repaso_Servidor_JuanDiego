<?php
    require('../config_db.php');

    class Modelo{
        function __construct(){
            $this->conex = new mysqli(servidor, usuario, pw, bd);
        }
        

        function insertar($icono){
            
            echo $icono;
            if (isset($_POST['enviar'])) {
                $consulta = "INSERT INTO minijuegos(nombre, icono, ruta) VALUES('".$_POST['nombre']."', $icono, '".$_POST['enlace']."');";
                try {
                    $this->conex -> query($consulta);
                } catch (mysqli_sql_exception $e) {
                    echo $e->getMessage();
                }
            }            
        }
    }
    
    
?>