<?php
    //Se crea la clase Inicio.
    class Inicio{
        //Creación del atributo $meses de forma privada, para que solo se pueda utilizar en la clase Inicio.
        private $meses; 

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
        //Creación del método mostrar (de manera pública para que posteriormente se pueda llamar desde el otro archivo) el cual visualiza los datos del array creados en el atributo.
        public function mostrar(){
            
            //Creo una variable $arrayMeses que contiene el atributo creado anteriormente, para que sea más intuitivo y más accesible utilizar el atributo dentro de la función mostrar. Esta variable solo se puede utilizar de manera local única y exlusivamente en este método.
            $arrayMeses = $this -> meses;
        
            //Recorro el array $arrayMeses(qué es el atributo $meses) e imprimo el índice y el valor de cada elemento recorrido del array.
            foreach ($arrayMeses as $indice => $valor) {
                echo "$indice &nbsp $valor <br>";
            }
        }
    }
?>