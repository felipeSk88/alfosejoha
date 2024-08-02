<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cssmenuAdmin.css">
    <title>Menu Administrador</title>
</head>

<body>
    <?php 
    require("conexionBD.php");
    $documentoFunLoguea = 1110000001; // Esta variable debe capturar quien se logueo por el momento se pone manual.
    $return = "https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png"; // Valor predeterminado

    if ($conexion) {
        $query = $conexion->prepare("SELECT UsuFotoPerfil FROM tblusuario WHERE UsuCedula = ?");
        $query->bind_param("i", $documentoFunLoguea);
        $query->execute();
        $result = $query->get_result();

        if ($row = $result->fetch_assoc()) {
            $return = $row['UsuFotoPerfil'] ?: $return;
        }

        $query->close();
    }
    ?>

    <div class="cuerpo">
        <div class="panelLeft">
            <nav>
                <ul>
                    <li><a href="photoPerfil.php"><img src="<?php echo htmlspecialchars($return); ?>" id="photoPer"></a></li>
                    <li><img src="https://1.bp.blogspot.com/-EO10WM7B0Ig/YT5yOT5S7JI/AAAAAAAAAGw/FfqaAQ19Y709UTCC9jBUt7CW9pEv8_xjACNcBGAsYHQ/s0/IconoNotificaciones.png" id="photoNoti"></li>
                    <li><a href="Cambiocontraseña.php"><button>Gestionar contraseña</button></a></li>
                    <li><button id="btnCerrarSesion">Cerrar sesión</button></li>
                </ul>
            </nav>
        </div>
        <div class="titlePag">
            <h1>ALFOSEJOHA</h1>
        </div>
        <div class="container">
            <div id="Menu">
                <h1 id="tit">¿Que deseas hacer?</h1>
                <nav id="logos">
                    <ul>
                        <li>
                            <a href="formulario_modificacion.php"><img class="logo" src="https://1.bp.blogspot.com/--_3Twc7jE_4/YT5yHKJ8sqI/AAAAAAAAAF0/ywykiJsi3yY8S1op1g-MyU8O072GJoeYACNcBGAsYHQ/s0/IconoAdmPerfiles.png"></a>
                        </li>
                            <a href="SolicitudEmpleado.php"><img class="logo" src="https://1.bp.blogspot.com/-CVbG8VMJUGg/YT5yP3LJHnI/AAAAAAAAAG8/oSqBcKNbMWcH6gM4eXFSKPc2TC3Mm0rJgCNcBGAsYHQ/s320/IconoSolicitarYConsuVa.png"></a>
                        </li>
                        <li>
                            <a href="datosBasicos.html"><img class="logo" src="https://1.bp.blogspot.com/-a5TanyEIRgk/YT5yHI4qFcI/AAAAAAAAAFs/mCLSeiyQ5RMHRy8tevTtSORRIaODcvaFQCNcBGAsYHQ/s320/IconoActualiData.png"></a>
                        </li>
                        <li>
                            <a href="menuInformes.php"><img class="logo" src="https://1.bp.blogspot.com/-zNm1SxTs37c/YT5yN-a4IwI/AAAAAAAAAGs/ya7hx4ayapcuP53sZUm-XyRiY27bjjnIACNcBGAsYHQ/s0/IconoInformes.png"></a>
                        </li>
                    </ul>
                </nav>
                <img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix">
            </div>
        </div>
    </div>
    <div class="foo">
        <footer>
            <h2>Pie de página va acá</h2>
        </footer>
    </div>

    <script>
        document.getElementById('btnCerrarSesion').addEventListener('click', function() {
            window.location.href = 'index.php';
        });
    </script>
</body>

</html>
