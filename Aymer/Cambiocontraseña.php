<?php
require("conexionBD.php");

// Definir manualmente el documento del usuario
$docu = 1110000001; // Cambia este valor por el documento del usuario actual

if (isset($_POST['CambiarContrasena'])) {
    $contra = $_POST['Contra'];
    $npassword = $_POST['NuevaContrasena'];
    $rnpassword = $_POST['RepetirNuevaContrasena'];

    // Validaciones
    if (empty($contra) || empty($npassword) || empty($rnpassword)) {
        echo "Por favor, complete todos los campos.";
    } elseif ($npassword !== $rnpassword) {
        echo "Las nuevas contraseñas no coinciden.";
    } else {
        // Consultar la contraseña actual
        $sql = "SELECT UsuContrasenaSis FROM tblusuario WHERE UsuCedula=?";
        $stmt = $conexion->prepare($sql);

        if ($stmt === false) {
            die("Error preparando la consulta: " . $conexion->error);
        }

        $stmt->bind_param("i", $docu);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                if ($row['UsuContrasenaSis'] === $contra) {
                    // Actualizar la contraseña
                    $updateSql = "UPDATE tblusuario SET UsuContrasenaSis=? WHERE UsuCedula=?";
                    $updateStmt = $conexion->prepare($updateSql);

                    if ($updateStmt === false) {
                        die("Error preparando la actualización: " . $conexion->error);
                    }

                    $updateStmt->bind_param("si", $npassword, $docu);

                    if ($updateStmt->execute()) {
                        echo "Contraseña cambiada exitosamente.";
                    } else {
                        echo "Error al cambiar la contraseña: " . $conexion->error;
                    }

                    $updateStmt->close();
                } else {
                    echo "La contraseña actual es incorrecta.";
                }
            }
        } else {
            echo "Usuario no encontrado.";
        }

        $stmt->close();
    }
}

$conexion->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cambiocontraseña.css">
    <title>Cambio de contraseña</title>
</head>

<body>
    <header id="encabezado">
        <a href=""><img id="logo-header" src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s320/logoPag.png"></a>
        <img id="foto_perfil" src="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png">
        <nav>
            <ul>
                <li><a href=""><img class="logito" src="https://1.bp.blogspot.com/-EO10WM7B0Ig/YT5yOT5S7JI/AAAAAAAAAGw/FfqaAQ19Y709UTCC9jBUt7CW9pEv8_xjACNcBGAsYHQ/s0/IconoNotificaciones.png"></a></li>
                <li><a href="Index.php"><img class="logito" src="https://1.bp.blogspot.com/-BM03tlw4TH0/YT5yOxEwdoI/AAAAAAAAAG0/LneMrf5vRD0ooVH6n92poAdrIa8balaRACNcBGAsYHQ/s0/IconoSalir.png"></a></li>
            </ul>
        </nav>
        <h3> Nombre Apellido </h3>
    </header>
    <section id="cambiocontraseña">
        <h1>Cambio de contraseña</h1>
        <form method="POST">
            <input type="password" placeholder="Contraseña Actual" name="Contra" required><br><br>
            <input type="password" placeholder="Nueva Contraseña" name="NuevaContrasena" required><br><br>
            <input type="password" placeholder="Repetir nueva contraseña" name="RepetirNuevaContrasena" required><br><br>
            <button id="boton" type="submit" name="CambiarContrasena">Cambiar contraseña</button><br>
        </form>
    </section>
</body>

</html>
