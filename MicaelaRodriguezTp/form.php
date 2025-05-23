
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 20px;
        }

        .form-container {
            background-color: white;
            border: 2px solid #666;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .form-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 20px;
            padding-bottom: 5px;
            border-bottom: 1px solid #ccc;
        }

        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-label {
            font-weight: bold;
            width: 100px;
            margin-right: 10px;
        }

        .form-input {
            padding: 5px;
            border: 1px solid #999;
            background-color: #e8e8e8;
        }

        .date-input {
            width: 120px;
        }

        .name-input {
            width: 200px;
        }

        .province-select {
            width: 150px;
            padding: 5px;
            border: 1px solid #999;
            background-color: #e8e8e8;
        }

        .details-section {
            margin-top: 20px;
        }

        .details-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid #666;
        }

        .details-table th {
            background-color: #f0f0f0;
            border: 1px solid #666;
            padding: 8px;
            text-align: left;
            font-weight: bold;
        }

        .details-table td {
            border: 1px solid #666;
            padding: 8px;
        }

        .code-cell {
            width: 60px;
            text-align: center;
        }

        .description-cell {
            width: 200px;
        }

        .quantity-cell {
            width: 120px;
        }

        .price-cell {
            width: 120px;
        }

        .table-input {
            width: 100%;
            border: none;
            background: transparent;
            padding: 2px;
        }

        .quantity-input {
            background-color: white;
            border: 1px solid #999;
        }

        .submit-btn {
            margin-top: 15px;
            padding: 8px 20px;
            background-color: #e8e8e8;
            border: 1px solid #999;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #d0d0d0;
        }

        .add-row-btn {
            margin-top: 10px;
            padding: 5px 15px;
            background-color: #e8e8e8;
            border: 1px solid #999;
            cursor: pointer;
            margin-right: 10px;
        }

        .add-row-btn:hover {
            background-color: #d0d0d0;
        }
    </style>
</head>
<body>
<form action="index.php" method="post">
<div class="form-container">
    <div class="form-title">Trabajo Práctico</div>

    <div class="form-row">
        <label class="form-label">Fecha:</label>
        <input type="date" class="form-input date-input" name="fecha">
    </div>

    <div class="form-row">
        <label class="form-label">Nombre:</label>
        <input type="text" class="form-input name-input" name="nombre">
    </div>

    <div class="form-row">
        <label class="form-label">Provincia:</label>
        <select class="province-select" name="impuesto">
            <option value="20">Impuesto 2 (20%)</option>
            <option value="15">Impuesto 1 (15%)</option>
            <option value="25">Impuesto 3 (25%)</option>
        </select>
    </div>

    <div class="details-section">
        <div class="details-title">Detalle</div>

        <table class="details-table">
            <thead>
            <tr>
                <th class="code-cell">Código</th>
                <th class="description-cell">Descripción</th>
                <th class="quantity-cell">Cantidad</th>
                <th class="price-cell">Precio</th>
            </tr>
            </thead>
            <tbody id="detailsTableBody">
            <tr>
                <td class="code-cell">
                    <input type="number" class="table-input" name="codigo[]" value="1" >
                </td>
                <td class="description-cell">
                    <input type="text" class="table-input"  name="descripcion[]">
                </td>
                <td class="quantity-cell">
                    <input type="number" class="table-input quantity-input"  name="cantidad[]">
                </td>
                <td class="price-cell">
                    <input type="number" class="table-input" step="0.01"  name="precio[]">
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <button class="add-row-btn" onclick="addRow()">Agregar Fila</button>
    <div class="button-section">
        <input type="submit" class="submit-btn" value="Enviar">
    </div>
</div>

<script>
    let rowCounter = 1;

    function addRow() {
        event.preventDefault();
        rowCounter++;
        const tableBody = document.getElementById('detailsTableBody');
        const newRow = document.createElement('tr');

        newRow.innerHTML = `
                <td class="code-cell">
                <input type="number" class="table-input" name="codigo[]" value="${rowCounter}" >
                <td class="description-cell">
                    <input type="text" class="table-input" name="descripcion[]" >
                </td>
                <td class="quantity-cell">
                    <input type="number" class="table-input quantity-input" name="cantidad[]">
                </td>
                <td class="price-cell">
                    <input type="number" class="table-input" step="0.01" name="precio[]">
                </td>
            `;

        tableBody.appendChild(newRow);
    }
</script>
</body>
</html>