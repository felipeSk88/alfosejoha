<?php

	$conexion=mysqli_connect("localhost", "root", "", "sgdrrhhbd");
	if($conexion->connect_error){
		echo "fallo la conexion";
	}
	else{
		echo "conexion exitosa";
		if (isset($_POST["buttonEnviar"])){
				echo $_POST["nombre"];
				echo $_POST["Apellido"];
				echo $_POST["Cedula"];
				
			$name=$_POST["nombre"];	
			$Apell=$_POST["Apellido"];
			$Ced=$_POST["Cedula"];		
			$sql="INSERT INTO  tblusuario (UsuCedula, UsuNombre, UsuApellido) values ('$Ced', '$name', '$Apell')";
		$RESULTADO=$conexion->query($sql);	
		}			
		
		//Si lo queremos ver por pantalla.
		/*$sql1="select * from alumnos";
		$resultados = $conexion ->query($sql1);
	
		if($resultados ->num_rows){
			while ($fila=$resultados -> fetch_assoc()) {
				echo $fila['codigo']. '-'.$fila['nombre'].'-'.$fila['mail'].'-'.$fila['codigocurso'].'<br>';
			}
				echo "No hay mas registros para leer.";*/

	}


		
?>