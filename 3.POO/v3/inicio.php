<?php
    //Se crea la clase Inicio.
    class Inicio{
        //Creación del atributo $meses de forma pública, para que se pueda utilziar fuera de la clase inicio.
        public $meses; 
        //Creación del método añadir (de manera pública para que posteriormente se pueda llamar desde el otro archivo) que crea el array en el atributo $meses
        public function añadir(){
            //Se crea el array en el atributo $meses.
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
    }
?>