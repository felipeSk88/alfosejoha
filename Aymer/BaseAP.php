<?php 

$conexion = new  mysqli("localhost","root","","sgdrrhhbd");

    $fechaparti=$_POST['date'];
    $fechasoli=$_POST['dated'];
    $avion=$_POST['image']; 

    $sql= "INSERT INTO tblhistovaca(HisCodigo,HisFechaInicio,HisFechaRegreso,HisFechaSolicitud,HisEstado,HisForSoliciva) VALUES (null,'$fechaparti',null,'$fechasoli','$avion',null)";
    
    $resultados=$conexion->query($sql);

    echo $fechaparti. $fechasoli. $avion;

?>