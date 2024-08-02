<?php
// Incluir la conexión a la base de datos
include 'conexionBD.php';

$usuCedula = '';
$row = [];
$horarios = [];
$tiposContrato = [];

// Obtener valores válidos de tipos de contrato
$sqlTiposContrato = "SELECT ContId, ContDescripcion FROM tblcontratos";
$resultTiposContrato = mysqli_query($conexion, $sqlTiposContrato);

if ($resultTiposContrato === false) {
    die("Error en la consulta SQL de tipos de contrato: " . mysqli_error($conexion));
}

while ($tipoContrato = mysqli_fetch_assoc($resultTiposContrato)) {
    $tiposContrato[] = $tipoContrato;
}

// Obtener los valores válidos de horarios
$sqlHorarios = "SELECT horarIdPK, horarios FROM tblhorarios";
$resultHorarios = mysqli_query($conexion, $sqlHorarios);

if ($resultHorarios === false) {
    die("Error en la consulta SQL de horarios: " . mysqli_error($conexion));
}

while ($horario = mysqli_fetch_assoc($resultHorarios)) {
    $horarios[] = $horario;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['UsuCedula'])) {
    $usuCedula = $_POST['UsuCedula'];
    $sql = "SELECT * FROM tblusuario WHERE UsuCedula='$usuCedula'";
    $result = mysqli_query($conexion, $sql);

    if ($result === false) {
        die("Error en la consulta SQL: " . mysqli_error($conexion));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo '<p class="message">Usuario no encontrado</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/didatosbasicos.css">
    <title>Datos Básicos</title>
</head>

<body>
    <header id="encabezado">
        <a href=""><img id="logo-header" src="https://i.ibb.co/G2DKNYt/Logo-u-L6mi-Ug-T-transformed.png" alt="Logo"></a>
        <img id="foto_perfil" src="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png" alt="Foto Perfil">
        <nav>
            <ul>
                <li><a href=""><img id="notificacion" src="https://1.bp.blogspot.com/-EO10WM7B0Ig/YT5yOT5S7JI/AAAAAAAAAGw/FfqaAQ19Y709UTCC9jBUt7CW9pEv8_xjACNcBGAsYHQ/s0/IconoNotificaciones.png" alt="Notificaciones"></a></li>
                <li><a href="Index.php"><img id="cerrarSe" src="https://1.bp.blogspot.com/-BM03tlw4TH0/YT5yOxEwdoI/AAAAAAAAAG0/LneMrf5vRD0ooVH6n92poAdrIa8balaRACNcBGAsYHQ/s0/IconoSalir.png" alt="Cerrar Sesión"></a></li>
            </ul>
        </nav>
    </header>
    <br>
    <div id="Menu">
        <blockquote>
            <h3> DATOS BÁSICOS DEL EMPLEADO</h3>

            <form method="POST" action="">
                <div class="columna3">
                    <label title="Cédula" style="width:40%; display: block;">Ingrese la cédula del usuario:</label>
                    <input type="text" size="12" name="UsuCedula" id="UsuCedula" value="<?php echo htmlspecialchars($usuCedula); ?>" required>
                </div>
                <div class="columna3">
                    <input type="submit" value="Buscar Usuario">
                </div>
            </form>

            <?php if (!empty($row)): ?>
            <form method="POST" action="actualizar_usuario.php">
                <input type="hidden" name="UsuCedula" value="<?php echo htmlspecialchars($row['UsuCedula']); ?>">
                <div class="columna3">
                    <label title="Nombre" style="width:40%; display: block;">Nombre</label>
                    <input type="text" size="40" name="UsuNombre" id="UsuNombre" value="<?php echo htmlspecialchars($row['UsuNombre']); ?>">
                </div>
                <div class="columna3">
                    <label title="Apellido" style="width:40%; display: block;">Apellido</label>
                    <input type="text" size="40" name="UsuApellido" id="UsuApellido" value="<?php echo htmlspecialchars($row['UsuApellido']); ?>">
                </div>
                <div class="columna3">
                    <label title="Cargo" style="width:40%; display: block;">Cargo</label>
                    <input type="text" size="40" name="UsuCargo" id="UsuCargo" value="<?php echo htmlspecialchars($row['UsuCargo']); ?>">
                </div>
                <div class="columna3">
                    <label title="Género" style="width:40%; display: block;">Género</label>
                    <input type="text" size="1" name="UsuGenero" id="UsuGenero" value="<?php echo htmlspecialchars($row['UsuGenero']); ?>">
                </div>
                <div class="columna3">
                    <label title="Dirección" style="width:40%; display: block;">Dirección</label>
                    <input type="text" size="40" name="UsuDireccion" id="UsuDireccion" value="<?php echo htmlspecialchars($row['UsuDireccion']); ?>">
                </div>
                <div class="columna3">
                    <label title="Barrio" style="width:40%; display: block;">Barrio</label>
                    <input type="text" size="40" name="UsuBarrio" id="UsuBarrio" value="<?php echo htmlspecialchars($row['UsuBarrio']); ?>">
                </div>
                <div class="columna3">
                    <label title="Correo" style="width:40%; display: block;">Correo</label>
                    <input type="email" size="40" name="UsuCorreo" id="UsuCorreo" value="<?php echo htmlspecialchars($row['UsuCorreo']); ?>">
                </div>
                <div class="columna3">
                    <label title="Teléfono" style="width:40%; display: block;">Teléfono</label>
                    <input type="text" size="15" name="UsuTelefono" id="UsuTelefono" value="<?php echo htmlspecialchars($row['UsuTelefono']); ?>">
                </div>
                <div class="columna3">
                    <label title="Fecha de Nacimiento" style="width:40%; display: block;">Fecha de Nacimiento</label>
                    <input type="date" name="UsuFechaNaci" id="UsuFechaNaci" value="<?php echo htmlspecialchars($row['UsuFechaNaci']); ?>">
                </div>
                <div class="columna3">
                    <label title="Fecha de Expedición de CC" style="width:40%; display: block;">Fecha de Expedición de CC</label>
                    <input type="date" name="UsuFechaExpCc" id="UsuFechaExpCc" value="<?php echo htmlspecialchars($row['UsuFechaExpCc']); ?>">
                </div>
                <div class="columna3">
                    <label title="Tipo de Sangre" style="width:40%; display: block;">Tipo de Sangre</label>
                    <input type="text" size="3" name="UsuTIpoSangre" id="UsuTIpoSangre" value="<?php echo htmlspecialchars($row['UsuTIpoSangre']); ?>">
                </div>
                <div class="columna3">
                    <label title="Fecha de Contrato" style="width:40%; display: block;">Fecha de Contrato</label>
                    <input type="date" name="UsuFechaContrato" id="UsuFechaContrato" value="<?php echo htmlspecialchars($row['UsuFechaContrato']); ?>">
                </div>
                <div class="columna3">
                    <label title="Número de Hijos" style="width:40%; display: block;">Número de Hijos</label>
                    <input type="number" name="UsuNoHijos" id="UsuNoHijos" value="<?php echo htmlspecialchars($row['UsuNoHijos']); ?>">
                </div>
                <div class="columna3">
                    <label title="Foro de Perfil" style="width:40%; display: block;">Foro de Perfil</label>
                    <input type="text" size="40" name="UsuForaPerfil" id="UsuForaPerfil" value="<?php echo htmlspecialchars($row['UsuForaPerfil']); ?>">
                </div>
                <div class="columna3">
                    <label title="Foro de Área" style="width:40%; display: block;">Foro de Área</label>
                    <input type="text" size="40" name="UsuForaArea" id="UsuForaArea" value="<?php echo htmlspecialchars($row['UsuForaArea']); ?>">
                </div>
                <div class="columna3">
                    <label title="Días Acumulados de Vacaciones" style="width:40%; display: block;">Días Acumulados de Vacaciones</label>
                    <input type="number" name="UsuDiasAcuVacaci" id="UsuDiasAcuVacaci" value="<?php echo htmlspecialchars($row['UsuDiasAcuVacaci']); ?>">
                </div>
                <div class="columna3">
                    <label title="Foto de Perfil" style="width:40%; display: block;">Foto de Perfil</label>
                    <input type="text" size="40" name="UsuFotoPerfil" id="UsuFotoPerfil" value="<?php echo htmlspecialchars($row['UsuFotoPerfil']); ?>">
                </div>
                <div class="columna3">
                    <label title="Salario" style="width:40%; display: block;">Salario</label>
                    <input type="number" name="UsuSalario" id="UsuSalario" value="<?php echo htmlspecialchars($row['UsuSalario']); ?>">
                </div>
                <div class="columna3">
                    <label title="Horario" style="width:40%; display: block;">Horario</label>
                    <select id="UsuHorario" name="UsuHorario">
                        <?php foreach ($horarios as $horario): ?>
                            <option value="<?php echo $horario['horarIdPK']; ?>" <?php echo $row['UsuHorario'] == $horario['horarIdPK'] ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($horario['horarios']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="columna3">
                    <label title="Tipo de Contrato" style="width:40%; display: block;">Tipo de Contrato</label>
                    <select id="UsuTipoContra" name="UsuTipoContra">
                        <?php foreach ($tiposContrato as $tipoContrato): ?>
                            <option value="<?php echo $tipoContrato['ContId']; ?>" <?php echo $row['UsuTipoContra'] == $tipoContrato['ContId'] ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($tipoContrato['ContDescripcion']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="columna3">
                    <input type="submit" value="Actualizar">
                </div>
            </form>
            <?php endif; ?>
        </blockquote>
    </div>
</body>

</html>

<?php
// Cerrar la conexión
mysqli_close($conexion);
?>
