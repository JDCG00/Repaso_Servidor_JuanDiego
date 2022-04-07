<?php

    class Inicio{

        public function mostrar($meses){
        
            foreach ($meses as $indice => $valor) {
                echo "$indice &nbsp $valor <br>";
            }
        }
    }
?>