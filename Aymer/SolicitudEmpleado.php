<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TercerApunte</title>
    <link rel="stylesheet" href="CSS/SEmagia.css">
    <link rel="stylesheet" href="CSS/normalize.css">

</head>

<body >
    
    <header >
        
        
    
        <a href=""><img id="logo-header" src="https://i.ibb.co/G2DKNYt/Logo-u-L6mi-Ug-T-transformed.png"></a>
        <img id="foto_perfil" src="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png">
        
        <nav>
            <ul>
                <li>
                    <a href=""><img id="notificacion" src="https://1.bp.blogspot.com/-EO10WM7B0Ig/YT5yOT5S7JI/AAAAAAAAAGw/FfqaAQ19Y709UTCC9jBUt7CW9pEv8_xjACNcBGAsYHQ/s0/IconoNotificaciones.png"></a>
                    
                </li>
                <li>
                    <a href="Index.php"><img id="cerrarSe" src="https://1.bp.blogspot.com/-BM03tlw4TH0/YT5yOxEwdoI/AAAAAAAAAG0/LneMrf5vRD0ooVH6n92poAdrIa8balaRACNcBGAsYHQ/s0/IconoSalir.png"></a>
                </li>
            </ul>
            
        </nav>
        <section class="hero__container">
                <div class="hero__texts">
                    <h1 class="hero_title">Empleado</h1>
                    <h2 class="hero_subtitle">nombre</h2>
                    
                </div>

            </section>
    </header>
    <br>
    <div id="Menu">
        <form  action="BaseAP.php" method="POST">
          <br>  
          <p>Dias acumulados por el empleado: 15 </p>
          <input type="submit" name="image" onclick="alert('Vacaciones solicitadas');"img id="vacaciones" src="Iconos_imagenes/IconoSolicitarVa.png" style="float: right;" value="solicitado"/>
          
          <h3>Ingrese fecha de partida</h3>
          <input type="date" name="date" id="date" >

          <br>
          <h3>Ingrese fecha de solicitud</h3>
          <input type="date" name="dated" id="dated" >
          
        </form>   
    </div>
    <br>
</div>
</body>
</html>