<?php
$conexion = mysqli_connect("localhost", "root", "", "sgdrrhhbd");

// Verificar la conexión
if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
?>
