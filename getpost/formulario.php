<?php
// Recibir los datos del formulario
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : '';
$apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : '';
$edad = isset($_POST["edad"]) ? $_POST["edad"] : '';
$email = isset($_POST["email"]) ? $_POST["email"] : '';
$genero = isset($_POST["genero"]) ? $_POST["genero"] : '';
$intereses = isset($_POST["intereses"]) ? $_POST["intereses"] : [];
$comision = isset($_POST["comision"]) ? $_POST["comision"] : '';
$password = isset($_POST["password"]) ? $_POST["password"] : '';
$comentarios = isset($_POST["comentarios"]) ? $_POST["comentarios"] : '';
$fecha_nacimiento = isset($_POST["fecha_nacimiento"]) ? $_POST["fecha_nacimiento"] : '';
$color_favorito = isset($_POST["color_favorito"]) ? $_POST["color_favorito"] : '';

// Convertir el array de intereses a una cadena
$intereses_str = implode(", ", $intereses);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .color-muestra {
            width: 20px;
            height: 20px;
            display: inline-block;
            margin-left: 10px;
            border: 1px solid #ccc;
        }
        .volver {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Resultados del Formulario</h2>

    <table>
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo htmlspecialchars($nombre); ?></td>
        </tr>
        <tr>
            <td>Apellido</td>
            <td><?php echo htmlspecialchars($apellido); ?></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><?php echo htmlspecialchars($edad); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($email); ?></td>
        </tr>
        <tr>
            <td>Género</td>
            <td><?php echo htmlspecialchars($genero); ?></td>
        </tr>
        <tr>
            <td>Intereses</td>
            <td><?php echo htmlspecialchars($intereses_str); ?></td>
        </tr>
        <tr>
            <td>Comisión</td>
            <td><?php echo htmlspecialchars($comision); ?>%</td>
        </tr>
        <tr>
            <td>Contraseña</td>
            <td>********</td>
        </tr>
        <tr>
            <td>Comentarios</td>
            <td><?php echo nl2br(htmlspecialchars($comentarios)); ?></td>
        </tr>
        <tr>
            <td>Fecha de nacimiento</td>
            <td><?php echo htmlspecialchars($fecha_nacimiento); ?></td>
        </tr>
        <tr>
            <td>Color favorito</td>
            <td>
                <?php echo htmlspecialchars($color_favorito); ?>
                <span class="color-muestra" style="background-color: <?php echo htmlspecialchars($color_favorito); ?>"></span>
            </td>
        </tr>
    </table>

    <a href="formulario.html" class="volver">Volver al formulario</a>
</div>
</body>
</html>