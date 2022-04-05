<?php

    class Inicio{
        private $meses;

        private function añadir(){
            $this -> meses = array(
                "<b>Enero</b>" => 31,
                "<b>Febrero</b>" => 28,
                "<b>Marzo</b>" => 31,
                "<b>Abril</b>" => 30,
                "<b>Mayo</b>" => 31,
                "<b>Junio</b>" => 30,
                "<b>Julio</b>" => 31,
                "<b>Agosto</b>" => 30,
                "<b>Septiembre</b>" => 31,
                "<b>Octubre</b>" => 30,
                "<b>Noviembre</b>" => 31,
                "<b>Diciembre</b>" => 30
            );
        }
        public function mostrar(){
            $this -> añadir();
            
            $arrayMeses = $this -> meses;
        
            foreach ($arrayMeses as $indice => $valor) {
                echo "$indice &nbsp $valor <br>";
            }
        }
    }
?>