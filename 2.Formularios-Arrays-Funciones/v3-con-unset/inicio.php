<?php

    //Se crea la clase Inicio para mandar las variables con mayor seguridad.
    class Inicio{
        //Creación de la función recoger datos, que recoge los datos de todos los inputs utilizados en el formulario, y los guarda en un array para su posterior uso.
        function recogerDatos(){
            //Crear el array $formulario, añadiendo el contenido del input categoría, en este caso "Categoría" de índice y lo que recoga por $_POST del input como valor.
            
            $formulario = $_POST;
            unset($formulario['enviar']);
            
            if (empty($formulario['actividad'])) {
                echo "<h4>Debe poner un nombre de actividad</h4>";
                unset($formulario['actividad']);
            }


            if (isset($formulario['etapas'])) {
                extract($formulario);
                foreach ($etapas as $valorEtapas) {
                    $formulario[] = $valorEtapas;
                }
                unset($formulario['etapas']);
            }else{
                echo "<h4>Debe seleccionar al menos una etapa</h4>";
            }
            

            if (!isset($formulario['actividad_de_seccion'])) {
                $formulario['actividad_de_seccion'] = "Para alumnos";
            }


            //Devuelve/retorna el array $formulario.
            return $formulario;
        }

        //Creación de la función mostrar datos, que mostrará los datos obtenidos del array. (Recoge el array $formulario retornado anteriormente.)
        function mostrarDatos($formulario){
            //Recorre el array $formulario e imprime el valor de los elementos del array.
            foreach ($formulario as $valorFormulario) {
                echo  "$valorFormulario <br>";
            }
        }
    }
?>