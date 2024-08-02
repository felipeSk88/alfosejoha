<?php
if (isset($_POST["botonenvio"])){
    if (!empty($_POST["documentoEvaEm"]) && strlen($_POST["documentoEvaEm"]) <=10 && is_numeric($_POST["documentoEvaEm"]) && preg_match("/[0-9]/" , $_POST["documentoEvaEm"])){
        echo $_POST["documentoEvaEm"] . "<br/>";
    }
    if (!empty($_POST["pregunta1"])){
        echo $_POST["pregunta1"] . "<br/>";
    }
    if (!empty($_POST["pregunta2"])){
        echo $_POST["pregunta2"] . "<br/>";
    }
    if (!empty($_POST["pregunta3"])){
        echo $_POST["pregunta3"] . "<br/>";
    }
}
?>