<?php
// Iniciar sesión
session_start();

// Contenido HTML con encabezado
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario con Cookies y Sesiones</title>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .formulario { max-width: 500px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; }
        .saludo { background: #f0f0f0; padding: 10px; margin-bottom: 15px; }
        .datos { background: #e6f7ff; padding: 10px; margin-top: 15px; }
    </style>
</head>
<body>
<div class="formulario">
    <h2>TP Formulario</h2>

    <?php
    // Verificar si existe la cookie 'nombre'
    if(isset($_COOKIE['nombre'])) {
        // [SÍ] → Muestra saludo
        echo '<div class="saludo">';
        echo '<p>¡Hola, ' . htmlspecialchars($_COOKIE['nombre']) . '!</p>';
        echo '</div>';
    }

    // Mostrar datos de sesión si existen
    if(isset($_SESSION['apellido']) && isset($_SESSION['comision'])) {
        echo '<div class="datos">';
        echo '<h3>Datos anteriores:</h3>';
        echo '<p>Apellido: ' . htmlspecialchars($_SESSION['apellido']) . '</p>';
        echo '<p>Comisión: ' . htmlspecialchars($_SESSION['comision']) . '</p>';
        echo '</div>';
    }
    ?>

    <!-- Formulario siempre se muestra (vacío o no) -->
    <form action="procesar.php" method="POST">
        <p>
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre"
                   value="<?php echo isset($_COOKIE['nombre']) ? htmlspecialchars($_COOKIE['nombre']) : ''; ?>">
        </p>
        <p>
            <label for="apellido">Apellido:</label><br>
            <input type="text" id="apellido" name="apellido"
                   value="<?php echo isset($_SESSION['apellido']) ? htmlspecialchars($_SESSION['apellido']) : ''; ?>">
        </p>
        <p>
            <label for="comision">Comisión:</label><br>
            <input type="text" id="comision" name="comision"
                   value="<?php echo isset($_SESSION['comision']) ? htmlspecialchars($_SESSION['comision']) : ''; ?>">
        </p>
        <p>
            <input type="submit" value="Enviar datos">
        </p>
    </form>
</div>
</body>
</html>