<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/disPhotoPerfil.css">
    <title>Plantilla para proyecto unix</title>
</head>

<body>
    <div class="cuerpo">
        <div class="panelLeft">
            <nav>
                <ul>
                    <li><img src="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png" id="photoPer"></li>
                    <li> <img src="https://1.bp.blogspot.com/-EO10WM7B0Ig/YT5yOT5S7JI/AAAAAAAAAGw/FfqaAQ19Y709UTCC9jBUt7CW9pEv8_xjACNcBGAsYHQ/s0/IconoNotificaciones.png" id="photoNoti"></li>
                    <li><button>Gestion contraseña</button></li>
                    <li><button>Cerrar sesión</button></li>
                </ul>
            </nav>
        </div>
        <div class="titlePag">
            <h1>Cambiar foto de perfil</h1>
        </div>
        <div class="container">
            <div class="formularioFoto">
            <form enctype="multipart/form-data" action="uploadPhoto.php" method="POST">
                    <label for="imagen">Imagen:</label>
                    <input id="imagen" name="subir_archivo" size="30" type="file"><br>
                    <button>Enviar</button>
                </form>
            </div>
            <img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix">
        </div>
    </div>
    <div class="foo">
        <footer>
            <h2>Pie de página va acá</h2>
        </footer>
    </div>
</body>
</html>