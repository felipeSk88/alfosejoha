<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <style>
        /* Añade estilos similares al anterior */
    </style>
</head>
<body>
    <h3>Agregar Nuevo Usuario</h3>
    <form method="POST" action="procesar_agregar_usuario.php">
        <!-- Campos para agregar un nuevo usuario -->
        <div class="columna3">
            <label for="UsuNombre">Nombre:</label>
            <input type="text" id="UsuNombre" name="UsuNombre" required>
        </div>
        <!-- Agrega otros campos necesarios -->
        <div class="columna3">
            <input type="submit" value="Agregar Usuario">
        </div>
    </form>
</body>
</html>
