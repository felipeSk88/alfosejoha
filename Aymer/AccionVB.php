<?php

if (isset($_POST["enviar"])){
    if(!empty($_POST["empleados"]) && !is_numeric($_POST["empleados"])) {

        echo "El empleado ".($_POST["empleados"])." ha sido seleccionado "."<br/>";


    }

    if (!empty($_POST["textarea"]) && strlen($_POST["textarea"]) <=50 && !is_numeric($_POST["textarea"])){
        echo "Comentario: ". $_POST["textarea"] . "<br/>";
    }

}

?>  