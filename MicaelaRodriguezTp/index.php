<?php
$fecha = $_POST["fecha"];
$nombre = $_POST["nombre"];
$impuesto = $_POST["impuesto"];
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$neto = 0;
$filas = [];

for ($i = 0; $i < count($codigo); $i++) {
    $total = $cantidad[$i] * $precio[$i];
    $neto += $total;
    $filas[] = [
        'codigo' => $codigo[$i],
        'descripcion' => $descripcion[$i],
        'cantidad' => $cantidad[$i],
        'precio' => $precio[$i],
        'total' => $total
    ];
}

$impuestos = $neto * ($impuesto / 100);
$total_final = $neto + $impuestos;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            border: 2px solid #333;
            padding: 0;
        }



        .form-row {
            display: flex;
            border-bottom: 1px solid #333;
        }

        .form-row:last-of-type {
            border-bottom: 2px solid #333;
        }

        .label {
            background-color: #d3d3d3;
            padding: 10px;
            font-weight: bold;
            width: 150px;
            border-right: 2px solid #333;
            display: flex;
            align-items: center;
        }

        .value {
            padding: 10px;
            flex: 1;
            display: flex;
            align-items: center;
        }

        .detail-section {
            background-color: #d3d3d3;
            padding: 10px;
            border-bottom: 2px solid #333;
            font-weight: bold;
        }





        .table-container {
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0;
        }

        th {
            background-color: #d3d3d3;
            padding: 12px 8px;
            text-align: center;
            font-weight: bold;
            border: 1px solid #333;
        }

        td {
            padding: 12px 8px;
            text-align: center;
            border: 1px solid #333;
            background-color: white;
        }

        .totals-row {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .actions {
            padding: 20px;
            text-align: left;
        }

        .btn {
            padding: 8px 16px;
            margin-right: 10px;
            border: 1px solid #333;
            background-color: #e9ecef;
            cursor: pointer;
            font-size: 14px;
        }

        .btn:hover {
            background-color: #dee2e6;
        }

        .link {
            color: blue;
            text-decoration: underline;
            cursor: pointer;
        }

        .data-placeholder {
            color: #6c757d;
            font-style: italic;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-row">
        <div class="label">Fecha:</div>
        <div class="value">
                <span id="fecha" class="data-placeholder">
                    <?php echo htmlspecialchars($fecha);?>
                </span>
        </div>
    </div>

    <div class="form-row">
        <div class="label">Nombre:</div>
        <div class="value">
                <span id="nombre" class="data-placeholder">
                    <?php echo  htmlspecialchars($nombre);?>
                </span>
        </div>
    </div>

    <div class="form-row">
        <div class="label">Impuesto:</div>
        <div class="value">
                <span id="impuesto" class="data-placeholder">
                    <?php echo htmlspecialchars($impuesto);?>
                </span>
        </div>
    </div>

    <div class="detail-section">
        Detalle
    </div>

    <div class="table-container">
        <table>
            <thead>
            <tr>
                <th>Código</th>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody id="items-table">
            <?php foreach ($filas as $fila): ?>
                <tr>
                    <td><?php echo htmlspecialchars($fila['codigo']); ?></td>
                    <td><?php echo htmlspecialchars($fila['descripcion']); ?></td>
                    <td><?php echo htmlspecialchars($fila['cantidad']); ?></td>
                    <td><?php echo htmlspecialchars($fila['precio']); ?></td>
                    <td><?php echo htmlspecialchars($fila['total']); ?></td>
                </tr>
            <?php endforeach; ?>

            </tbody>
            <tfoot>
            <tr class="totals-row">
                <td colspan="4">Neto</td>
                <td>
                            <span id="neto">
                                <?php echo htmlspecialchars($neto); ?>
                            </span>
                </td>
            </tr>
            <tr class="totals-row">
                <td colspan="4">Impuestos</td>
                <td>
                            <span id="impuestos-total">
                                <?php echo  htmlspecialchars($impuestos); ?>
                            </span>
                </td>
            </tr>
            <tr class="totals-row">
                <td colspan="4">Total</td>
                <td>
                            <span id="total-final">
                                <?php echo  htmlspecialchars($total_final);?>
                            </span>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

</div>



</body>
</html>