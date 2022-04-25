<?php
    class Controlador
    {
        function __construct()
        {
           switch ($_GET['accion']) {
               case 'alta':
                   $this->alta();
                   break;
           }
        }
        function alta(){
            echo "aa";
        }
    }
?>