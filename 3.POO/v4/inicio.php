<?php
    //Se crea la clase Inicio.
    class Inicio{
        //Creación del método mostrar (de manera pública para que posteriormente se pueda llamar desde el otro archivo) el cual visualiza los datos del array recogidos por parámetro.
        public function mostrar($meses){
            //Recorre el array pasado por parámetro e imprime el índice y el valor de cada elemento del array.
            foreach ($meses as $indice => $valor) {
                echo "$indice &nbsp $valor <br>";
            }
        }
    }
?>