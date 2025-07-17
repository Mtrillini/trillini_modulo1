<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Detalle del producto</title>
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

    .detalle-container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        text-align: left;
    }
</style>

<body>
    <h1>Detalle del producto</h1>

    <div class="detalle-container">
        <p><strong>Nombre:</strong> <?= esc($producto['nombre']) ?></p>
        <p><strong>Precio:</strong> $<?= esc($producto['precio']) ?></p>
        <p><strong>Stock:</strong> <?= esc($producto['stock']) ?> unidades</p>
        <p><strong>Codigo:</strong> <?= esc($producto['codigo']) ?></p>


        <p><a href="<?= site_url('productos') ?>">← Volver al listado</a></p>
    </div>
</body>

</html>