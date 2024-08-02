<?php
$conexion = mysqli_connect("localhost","root","","sgdrrhhbd");// conexion a BD
if ($conexion -> connect_error){
    echo "Conexion errada";
}else{
    echo "Conexion exitosa";
    if(!empty($_POST["nameEva"])){
        $nombreEva=$_POST["nameEva"];
        echo $_POST["nameEva"];
    }
    if(!empty($_POST["descriEva"])){
        $decripEva=$_POST["descriEva"];
        echo $_POST["descriEva"];
    }
    $comandoinsersion="insert into tblevaluaciones values (null,'$nombreEva','$decripEva',null)";
    $resultado = $conexion ->query($comandoinsersion);

}

?>




