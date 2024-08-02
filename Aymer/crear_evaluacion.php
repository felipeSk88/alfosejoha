<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/crear_evaluacion.css">
    <title>Crear Evaluación</title>
</head>

<body>
    <header id="encabezado">
        <a href="#"><img id="logo-header" src="https://i.ibb.co/G2DKNYt/Logo-u-L6mi-Ug-T-transformed.png" alt="Logo"></a>
        <img id="foto_perfil" src="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png" alt="Foto de perfil">
        <nav>
            <ul>
                <li><a href="#"><img id="notificacion" src="https://1.bp.blogspot.com/-EO10WM7B0Ig/YT5yOT5S7JI/AAAAAAAAAGw/FfqaAQ19Y709UTCC9jBUt7CW9pEv8_xjACNcBGAsYHQ/s0/IconoNotificaciones.png" alt="Notificaciones"></a></li>
                <li><a href="Index.php"><img id="cerrarSe" src="https://1.bp.blogspot.com/-BM03tlw4TH0/YT5yOxEwdoI/AAAAAAAAAG0/LneMrf5vRD0ooVH6n92poAdrIa8balaRACNcBGAsYHQ/s0/IconoSalir.png" alt="Cerrar sesión"></a></li>
            </ul>
        </nav>
    </header>

    <br>

    <img id="foto_perfil" src="Iconos_imagenes/IconoAgregarPregunta.png" class="ubi1" alt="Agregar pregunta">

    <div id="presentacion">
        <form method="POST">
            <h3><label for="cargo">CARGO:</label></h3><label>_____________________________</label>
            <h3><label for="nombre">NOMBRE:</label></h3><label>_____________________________</label>
            <blockquote>
                <h4>
                    <br> Pregunta: <br>
                    <input type="text" size="50" name="preguntaN" id="preguntaN">
                    <br> Valor: <br>
                    <input type="text" size="50" name="Valor" id="valor">
                    <br>
                    <input type="submit" name="boton" value="Cargar" id="btngrabar">
                </h4>
            </blockquote>
        </form>
    </div>

    <?php
    require("conexionBD.php"); // Llama a la conexión a la base de datos

    if (isset($_POST['boton'])) {
        $lapregunta = $_POST['preguntaN'];
        $valorpre = $_POST['Valor'];

        // Verificar si las variables están definidas y no están vacías
        if (!empty($lapregunta) && !empty($valorpre)) {
            // Preparar la consulta para evitar SQL Injection
            $sql = $conexion->prepare("INSERT INTO tblpreguntaseva (pregunta, valor) VALUES (?, ?)");
            $sql->bind_param("ss", $lapregunta, $valorpre);
            $resultado = $sql->execute();

            if ($resultado) {
                echo "Pregunta: " . htmlspecialchars($lapregunta) . " Valor: " . htmlspecialchars($valorpre);
            } else {
                echo "Error: " . $conexion->error;
            }
        } else {
            echo "Por favor, complete todos los campos.";
        }
    }
    ?>
</body>

</html>