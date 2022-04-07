<?php
    //Se crea la clase Inicio para mandar las variables con mayor seguridad.
    class Inicio{
        //Creación del atributo $meses
        private $meses; 

        //Creación del método añadir, que crea el array en el atributo $meses
        public function añadir(){
            //Se crea el array en el atributo $meses
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
        //Creación del método mostrar, el cual visualiza los datos creados en el array $meses.
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