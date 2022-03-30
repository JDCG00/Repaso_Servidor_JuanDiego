<?php
    if (isset($_POST['enviar'])) {
        foreach ($_POST as $i => $valor) {
            $array[$i] = $valor;
        }
        print_r($array);
        echo "<br>";
        foreach ($array['etapas'] as $value) {
            echo("$value <br>");
        }
        print_r($_POST);
    }
?>