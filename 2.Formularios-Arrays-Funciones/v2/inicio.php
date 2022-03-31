<?php
    if (isset($_POST['enviar'])) {
        
        $array['Categoría'] = $_POST['categorias'];
        if (empty($_POST['actividad'])) {
        }else{
            $array['Actividad'] = $_POST['actividad'];
        }
        foreach ($_POST['etapas'] as $valor) {
            $array[] = $valor;
        }
        if (empty($_POST['actividad_de_seccion'])) {
        }else{
            $array['actividad_de_seccion'] = $_POST['actividad_de_seccion'];
        }
        print_r($array);      
    }
?>