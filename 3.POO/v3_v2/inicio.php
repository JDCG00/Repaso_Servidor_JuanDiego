<?php
    //Se crea la clase Inicio.
    class Inicio{
        //Creación del método añadir (de manera pública para que posteriormente se pueda llamar desde el otro archivo) que crea el array con los meses y los días.
        public function añadir(){
            //Se crea el array.
            return array(
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