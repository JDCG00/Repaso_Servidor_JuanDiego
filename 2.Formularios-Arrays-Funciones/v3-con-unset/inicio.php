<?php

    //Se crea la clase Inicio para mandar las variables con mayor seguridad.
    class Inicio{
        //Creación de la función recoger datos, que recoge los datos de todos los inputs utilizados en el formulario, y los guarda en un array para su posterior uso.
        function recogerDatos(){
            //Crear el array $array, añadiendo el contenido del input categoría, en este caso "Categoría" de índice y lo que recoga por $_POST del input como valor.
            
            $array = $_POST;
            unset($array['enviar']);
            
            if (empty($array['actividad'])) {
                echo "<h4>Debe poner un nombre de actividad</h4>";
                unset($array['actividad']);
            }

            if (!isset($array['etapas'])) {
                echo "<h4>Debe seleccionar al menos una etapa</h4>";
            }

            if (!isset($array['actividad_de_seccion'])) {
                echo $array['actividad_de_seccion'] = "Para alumnos";
            }

            extract($array);
            foreach ($etapas as $value) {
                echo "$value <br>";
            }

            print_r($array);


            //Devuelve/retorna el array $array.
            return $array;
        }

        //Creación de la función mostrar datos, que mostrará los datos obtenidos del array. (Recoge el array $array retornado anteriormente.)
        function mostrarDatos($array){
            //Recorre el array $array e imprime el valor de los elementos del array.
            foreach ($array as $valorArray) {
                if (isset($array['etapas'])) {
                    echo  "$valorArray <br>";
                }
            }
        }
    }
?>