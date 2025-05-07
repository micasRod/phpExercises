<?php
// Iniciar sesión
session_start();

// Verificar si se recibieron los datos del POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guardar cookie 'nombre' (duración 30 días)
    if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        setcookie('nombre', $_POST['nombre'], time() + (86400 * 30), "/");
    }

    // Guardar datos en la sesión
    if (isset($_POST['apellido']) && !empty($_POST['apellido'])) {
        $_SESSION['apellido'] = $_POST['apellido'];
    }

    if (isset($_POST['comision']) && !empty($_POST['comision'])) {
        $_SESSION['comision'] = $_POST['comision'];
    }

    // Mostrar datos recibidos
    echo "<!DOCTYPE html>
    <html>
    <head>
        <title>Datos Procesados</title>
        <meta charset='UTF-8'>
        <style>
            body { font-family: Arial, sans-serif; margin: 20px; }
            .datos { max-width: 500px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; }
            .boton { margin-top: 15px; }
        </style>
    </head>
    <body>
        <div class='datos'>
            <h2>Datos Recibidos</h2>
            <p><strong>Nombre:</strong> " . htmlspecialchars($_POST['nombre']) . "</p>
            <p><strong>Apellido:</strong> " . htmlspecialchars($_POST['apellido']) . "</p>
            <p><strong>Comisión:</strong> " . htmlspecialchars($_POST['comision']) . "</p>
            <div class='boton'>
                <a href='index.php'>Volver a la página principal</a>
            </div>
        </div>
    </body>
    </html>";
} else {
    // Si alguien accede directamente a este archivo sin enviar el formulario
    header("Location: index.php");
    exit;
}
?>