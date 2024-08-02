<?php
if (isset($_POST["ContraseñaActual"])) {
    if (!empty($_POST["ContraseñaActual"]) && strlen($_POST["ContraseñaActual"]) <= 10 && !is_numeric($_POST["ContraseñaActual"]) && !preg_match("/[0-9]/", $_POST["ContraseñaActual"])) {
        $_inicio = 1;
    }
}
if (isset($_POST["NuevaContraseña"])) {
    if (!empty($_POST["NuevaContraseña"]) && strlen($_POST["NuevaContraseña"]) > 8 && !is_numeric($_POST["NuevaContraseña"]) && !preg_match("/[7-20]/", $_POST["NuevaContraseña"])) {
        $_inicio = $_inicio + 1;
    }
}
if (isset($_POST["RepetirNuevaContraseña"])) {
    if (!empty($_POST["RepetirNuevaContraseña"]) && strlen($_POST["RepetirNuevaContraseña"]) <= 10 && !is_numeric($_POST["RepetirNuevaContraseña"]) && !preg_match("/[0-9]/", $_POST["RepetirNuevaContraseña"])) {
        $_inicio = $_inicio + 1;
    }
}
if ($inicio = 3) {
    echo "Tu contraseña fue cambiada con exito";
} else {
    echo "No fue posible cambiar la contraseña";
}
