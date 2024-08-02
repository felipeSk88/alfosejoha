<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Index.css">
    <title>Login</title>
    <style>
        /* Añadir estilos para el formulario de restablecimiento */
        #resetForm {
            display: none;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header id="encabezado">
        <img id="logo-header" src="https://i.ibb.co/G2DKNYt/Logo-u-L6mi-Ug-T-transformed.png" alt="Logo">
    </header>
    <section id="Login">
        <h1>Inicio de sesión</h1>
        <form method="POST">
            <input type="text" placeholder="Usuario" name="Usuario" required><br><br>
            <input type="password" placeholder="Contrasena" name="Contrasena" required><br><br>
            <button id="boton" type="submit" name="Iniciarsesion">Iniciar sesión</button><br><br>
            <button id="boton1" type="button" onclick="mostrarRestablecimiento()">Restablecer contraseña</button><br><br>
        </form>

        <!-- Formulario de Restablecimiento de Contraseña -->
        <div id="resetForm">
            <form method="POST">
                <input type="text" placeholder="Usuario" name="resetUsuario" required><br><br>
                <input type="password" placeholder="Nueva Contraseña" name="nuevaContrasena" required><br><br>
                <button type="submit" name="restablecer">Restablecer Contraseña</button><br><br>
            </form>
        </div>
    </section>

    <script>
        function mostrarRestablecimiento() {
            document.getElementById('resetForm').style.display = 'block';
        }
    </script>
</body>
<?php
require("conexionBD.php");

// Procesar inicio de sesión
if (isset($_POST['Iniciarsesion'])) {
    $docu = $_POST['Usuario'];
    $contra = $_POST['Contrasena'];

    $sql = "SELECT * FROM tblusuario WHERE UsuCedula='$docu'";
    $resulpassword = $conexion->query($sql);

    foreach ($resulpassword as $rows) {
        if ($rows['UsuContrasenaSis'] == $contra) {
            switch ($rows["UsuForaPerfil"]) {
                case 1:
                    header("Location: menuAdministrador.php");
                    exit();
                case 2:
                    header("Location: menuJefe.php");
                    exit();
                case 3:
                    header("Location: menuEmpleado.php");
                    exit();
                case 4:
                    header("Location: menuInformes.php");
                    exit();
                default:
                    echo "No perfil";
                    break;
            }
        } else {
            echo "Credenciales incorrectas";
        }
    }
}

// Procesar restablecimiento de contraseña
if (isset($_POST['restablecer'])) {
    $resetUsuario = $_POST['resetUsuario'];
    $nuevaContrasena = $_POST['nuevaContrasena'];

    if (!empty($resetUsuario) && !empty($nuevaContrasena)) {
        // Actualizar la contraseña en la base de datos
        $sql = "UPDATE tblusuario SET UsuContrasenaSis='$nuevaContrasena' WHERE UsuCedula='$resetUsuario'";

        if (mysqli_query($conexion, $sql)) {
            echo "Contraseña restablecida exitosamente.";
        } else {
            echo "Error al restablecer la contraseña: " . mysqli_error($conexion);
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
}

// Cerrar la conexión
mysqli_close($conexion);
?>
</html>
