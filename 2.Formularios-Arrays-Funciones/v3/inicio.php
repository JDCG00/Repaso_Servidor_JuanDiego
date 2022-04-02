<?php

    //Se crea la clase Inicio para mandar las variables con mayor seguridad.
    class Inicio{
        //Creación de la función recoger datos, que recoge los datos de todos los inputs utilizados en el formulario, y los guarda en un array para su posterior uso.
        function recogerDatos(){
            //Crear el array $array, añadiendo el contenido del input categoría, en este caso "Categoría" de índice y lo que recoga por $_POST del input como valor.
            $array['Categoría'] = $_POST['categorias'];

            //Si está vacío el elemento actividad pone que el campo se debe rellenar, sino (es decir, si hay contenido) añade al array $array lo que haya en el input actividad.
            if (empty($_POST['actividad'])) {
                echo "<h4>Debe poner un nombre de actividad</h4>";
            }else{
                $array['Actividad'] = $_POST['actividad'];
            }

            //Si existe la variable etapas[], recorre el array $_POST['etapas'] y guarda los valores uno a uno en el array $array.
            if (isset($_POST['etapas'])) {
                foreach ($_POST['etapas'] as $valor) {
                    $array[] = $valor;
                }
            }

            //Si existe actividad_de_seccion, recorre el array $_POST['actividad_de_seccion'] y guarda en el array $array el valor seleccionado en actividad_de_sección(si se selecciona se guarda, sino no.)
            if (isset($_POST['actividad_de_seccion'])) {
                $array['actividad_de_seccion'] = $_POST['actividad_de_seccion'];
            }
            //Devuelve/retorna el array $array.
            return $array;
        }

        //Creación de la función mostrar datos, que mostrará los datos obtenidos del array. (Recoge el array $array retornado anteriormente.)
        function mostrarDatos($array){
            //Recorre el array $array e imprime el valor de los elementos del array.
            foreach ($array as $valorArray) {
                echo  "$valorArray <br>";
            }
        }
    }
?>