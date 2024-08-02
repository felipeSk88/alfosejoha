<?php
$conexion = mysqli_connect("localhost","root","","sgdrrhhbd")
or
die ("Se presentan problemas en la conexión a la base de datos");
if (isset($_POST["boton"])){
    if (!empty($_POST["No_pregunta"]) && strlen($_POST["No_pregunta"]) <=2 && is_numeric($_POST["No_pregunta"]) && preg_match("/[0-9]/" , $_POST["No_pregunta"])){
        $n_preg = $_POST["No_pregunta"];
    }
    if (!empty($_POST["pregunta1"]) && strlen($_POST["pregunta1"]) <=200 && !is_numeric($_POST["pregunta1"]) && !preg_match("/[0-9]/" , $_POST["pregunta1"])){
        $preg_1 = $_POST["pregunta1"];
    }
    if (!empty($_POST["pregunta2"]) && strlen($_POST["pregunta2"]) <=200 && !is_numeric($_POST["pregunta2"]) && !preg_match("/[0-9]/" , $_POST["pregunta2"])){
        $preg_2 = $_POST["pregunta2"] ;
    }    
    if (!empty($_POST["pregunta3"]) && strlen($_POST["pregunta3"]) <=200 && !is_numeric($_POST["pregunta3"]) && !preg_match("/[0-9]/" , $_POST["pregunta3"])){
        $preg_3 = $_POST["pregunta3"] ;
    }
    if (!empty($_POST["pregunta4"]) && strlen($_POST["pregunta4"]) <=200 && !is_numeric($_POST["pregunta4"]) && !preg_match("/[0-9]/" , $_POST["pregunta4"])){
        $preg_4 = $_POST["pregunta4"] ;
    }
    if (!empty($_POST["pregunta5"]) && strlen($_POST["pregunta5"]) <=200 && !is_numeric($_POST["pregunta5"]) && !preg_match("/[0-9]/" , $_POST["pregunta5"])){
        $preg_5 = $_POST["pregunta5"] ;
    }
    if (!empty($_POST["pregunta6"]) && strlen($_POST["pregunta6"]) <=200 && !is_numeric($_POST["pregunta6"]) && !preg_match("/[0-9]/" , $_POST["pregunta6"])){
        $preg_6 = $_POST["pregunta6"] ;
    }

    $consulta= " INSERT INTO tblpreguntaseva (CriPregunta) VALUES ('$preg_1', '$preg_2','$preg_3', '$preg_4','$preg_5', '$preg_6')";
    $resultado = mysqli_query ($conexion,$consulta);
    if ($resultado){
    ?>
    <h3> ¡Registro guardado con exito!</h3>
    <?php
    }else{
    ?>
    <h3> ¡Se ha presentado un error!</h3>
    <?php
    }




}

?>
