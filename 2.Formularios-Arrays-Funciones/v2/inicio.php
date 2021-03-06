<?php
    //Si se pulsa el botón enviar realiza las siguientes acciones.
    if (isset($_POST['enviar'])) {

        //Crear el array $array, añadiendo el contenido del input categoría, en este caso "Categoría" de índice y lo que recoga por $_POST del input como valor.
        $array['Categoría'] = $_POST['categorias'];

        //Si está vacío el elemento actividad pone que el campo se debe rellenar, sino (es decir, si hay contenido) añade al array $array lo que haya en el input actividad.
        if (empty($_POST['actividad'])) {
            echo "<h4>Debe poner un nombre de actividad</h4>";
        }else{
            $array['Actividad'] = $_POST['actividad'];
        }

        //Si existe la variable etapas[], recorre el array $_POST['etapas'] y guarda los valores uno a uno en el array $array, si no se selecciona nada, se manda un mensaje de que debe seleccionar al menos un valor.
        if (isset($_POST['etapas'])) {
            foreach ($_POST['etapas'] as $valor) {
                $array[] = $valor;
            }
        }else{
            echo "<h4>Debe seleccionar al menos una etapa</h4>";
        }

        //Si existe actividad_de_seccion, recorre el array $_POST['actividad_de_seccion'] y guarda en el array $array el valor seleccionado en actividad_de_sección, sino guarda que es para alumnos.
        if (isset($_POST['actividad_de_seccion'])) {
            $array['actividad_de_seccion'] = $_POST['actividad_de_seccion'];
        }else{
            $array['actividad_de_seccion'] = 'Para alumnos';
        }

        //Recorre el array $array e imprime el valor de los elementos del array.
        foreach ($array as $valorArray) {
            echo  "$valorArray <br>";
        }
    }
?>