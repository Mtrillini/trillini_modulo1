<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url('css/estilos.css') ?>">
    <title>Productos</title>
</head>
<style>
    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f9f9f9;
        color: #333;
        margin: 0;
        padding: 20px;
    }

    h1,
    h2 {
        text-align: center;
        color: #154360;
    }

    .table-container {
        max-width: 1000px;
        margin: 0 auto;
        overflow-x: auto;
    }

    .tabla {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .tabla thead {
        background-color: #154360;
        color: white;
    }

    .tabla th,
    .tabla td {
        padding: 12px 15px;
        border: 1px solid #ddd;
        text-align: left;
    }

    .tabla tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .tabla tbody tr:hover {
        background-color: #d6eaf8;
        transition: background-color 0.3s ease;
    }
</style>

<body>

    <h1>Productos</h1>
    <h2><?= esc($titulo) ?></h2>
    <div class="table-container">
        <table class="tabla">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Detalle</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?= esc($producto['nombre']) ?></td>
                        <td>
                            <a href="<?= site_url('productos/verDetalle/' . $producto['id']) ?>">DETALLE DEL PRODUCTO</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>

</html>