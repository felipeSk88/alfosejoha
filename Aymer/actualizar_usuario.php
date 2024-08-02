<?php
// Incluir la conexión a la base de datos
include 'conexionBD.php';

// Verificar si los datos han sido enviados por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuCedula = isset($_POST['UsuCedula']) ? $_POST['UsuCedula'] : '';
    $usuNombre = isset($_POST['UsuNombre']) ? $_POST['UsuNombre'] : '';
    $usuApellido = isset($_POST['UsuApellido']) ? $_POST['UsuApellido'] : '';
    $usuCargo = isset($_POST['UsuCargo']) ? $_POST['UsuCargo'] : '';
    $usuGenero = isset($_POST['UsuGenero']) ? $_POST['UsuGenero'] : '';
    $usuDireccion = isset($_POST['UsuDireccion']) ? $_POST['UsuDireccion'] : '';
    $usuBarrio = isset($_POST['UsuBarrio']) ? $_POST['UsuBarrio'] : '';
    $usuCorreo = isset($_POST['UsuCorreo']) ? $_POST['UsuCorreo'] : '';
    $usuTelefono = isset($_POST['UsuTelefono']) ? $_POST['UsuTelefono'] : '';
    $usuFechaNaci = isset($_POST['UsuFechaNaci']) ? $_POST['UsuFechaNaci'] : '';
    $usuFechaExpCc = isset($_POST['UsuFechaExpCc']) ? $_POST['UsuFechaExpCc'] : '';
    $usuTIpoSangre = isset($_POST['UsuTIpoSangre']) ? $_POST['UsuTIpoSangre'] : '';
    $usuFechaContrato = isset($_POST['UsuFechaContrato']) ? $_POST['UsuFechaContrato'] : '';
    $usuNoHijos = isset($_POST['UsuNoHijos']) ? $_POST['UsuNoHijos'] : '';
    $usuForaPerfil = isset($_POST['UsuForaPerfil']) ? $_POST['UsuForaPerfil'] : '';
    $usuForaArea = isset($_POST['UsuForaArea']) ? $_POST['UsuForaArea'] : '';
    $usuDiasAcuVacaci = isset($_POST['UsuDiasAcuVacaci']) ? $_POST['UsuDiasAcuVacaci'] : '';
    $usuFotoPerfil = isset($_POST['UsuFotoPerfil']) ? $_POST['UsuFotoPerfil'] : '';
    $usuSalario = isset($_POST['UsuSalario']) ? $_POST['UsuSalario'] : '';
    $usuHorario = isset($_POST['UsuHorario']) ? $_POST['UsuHorario'] : '';
    $usuTipoContra = isset($_POST['UsuTipoContra']) ? $_POST['UsuTipoContra'] : '';
    
    // Verifica si los datos están bien recibidos antes de proceder con la actualización
    if ($usuCedula && $usuNombre) {
        $sql = "UPDATE tblusuario SET UsuNombre='$usuNombre', UsuApellido='$usuApellido', UsuCargo='$usuCargo', UsuGenero='$usuGenero', UsuDireccion='$usuDireccion', UsuBarrio='$usuBarrio', UsuCorreo='$usuCorreo', UsuTelefono='$usuTelefono', UsuFechaNaci='$usuFechaNaci', UsuFechaExpCc='$usuFechaExpCc', UsuTIpoSangre='$usuTIpoSangre', UsuFechaContrato='$usuFechaContrato', UsuNoHijos='$usuNoHijos', UsuForaPerfil='$usuForaPerfil', UsuForaArea='$usuForaArea', UsuDiasAcuVacaci='$usuDiasAcuVacaci', UsuFotoPerfil='$usuFotoPerfil', UsuSalario='$usuSalario', UsuHorario='$usuHorario', UsuTipoContra='$usuTipoContra' WHERE UsuCedula='$usuCedula'";
        
        if (mysqli_query($conexion, $sql)) {
            echo "Usuario actualizado exitosamente";
        } else {
            echo "Error al actualizar el usuario: " . mysqli_error($conexion);
        }
    } else {
        echo "Cédula o nombre del usuario no proporcionados.";
    }
}

// Cerrar la conexión
mysqli_close($conexion);
?>
