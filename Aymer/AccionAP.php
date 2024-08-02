<?php
if (isset($_POST["enviar"])){
    if(!empty($_POST["empleados"]) && !is_numeric($_POST["empleados"])) {

        echo "el empleado  ".($_POST["empleados"])." le han sido asignadas sus vacaciones "."<br/>";


    }

    if (!empty($_POST["areas"]) && !is_numeric($_POST["areas"])){
        echo " pertenece al area " .$_POST["areas"]."<br/>";
    }

    if(!empty($_POST["date"])) {

        echo "fecha de regreso: ".($_POST["date"])."<br/>";
        echo "le corresponden 15 dias acumulador"."<br/>";



    }



}

?>  