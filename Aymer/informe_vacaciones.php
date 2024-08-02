<?php

if (isset($_POST["btn_consulta"])) {
    // Función para sanitizar la entrada
    function sanitize_input($data) {
        return htmlspecialchars(trim($data));
    }

    // Lista de campos a verificar
    $fields = [
        "ftl" => "Fecha de Lanzamiento",
        "IniCalVac" => "Inicio de Calendario Vacacional",
        "ini_cal" => "Inicio de Cal",
        "FinCalVac" => "Fin de Calendario Vacacional"
    ];

    foreach ($fields as $key => $label) {
        if (!empty($_POST[$key])) {
            echo $label . ": " . sanitize_input($_POST[$key]) . "<br/>";
        }
    }
}
?>