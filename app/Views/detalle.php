<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Detalle del producto</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lora:wght@400&family=Source+Sans+Pro:wght@300;400&display=swap');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');

    body {
        font-family: 'Source Sans Pro', sans-serif;
        color: #4a3c2a;
        margin: 0;
        padding: 20px;


        background: linear-gradient(to bottom, #fdfaf5 0%, #f8f3ea 100%);
        background-image: url('https://www.transparenttextures.com/patterns/paper-fibers.png');
        background-repeat: repeat;
        background-size: auto;
    }

 
    h1 {
        font-family: 'Lora', serif;
        font-weight: 400;
        font-size: 2em;
        text-align: center;
        color: #4a3c2a;
        margin-bottom: 30px;
        letter-spacing: 0.5px;
    }

    .detalle-container {
        max-width: 500px;
        margin: 40px auto;
        padding: 30px 25px;
        background-color: #ffffffcc;
        
        border: 1px solid #e0d7c8;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.04);
        border-radius: 12px;
        backdrop-filter: blur(2px);
    }

    
    .detalle-item {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        font-size: 0.95em;
        font-weight: 300;
        color: #4a3c2a;
        border-bottom: 1px solid #f0ece6;
    }

    .detalle-item:last-child {
        border-bottom: none;
    }

    .detalle-item span {
        font-weight: 400;
        color: #5c4b35;
    }

    /* Botón */
    .detalle-boton {
        text-align: center;
        margin-top: 25px;
    }

    .detalle-boton a {
        display: inline-block;
        background-color: #6b8f71;
    
        color: white;
        padding: 8px 20px;
        border-radius: 25px;
        text-decoration: none;
        font-size: 0.85em;
        font-weight: 300;
        transition: background-color 0.3s, transform 0.2s, box-shadow 0.2s;
    }

    .detalle-boton a i {
        margin-right: 6px;
    }

    .detalle-boton a:hover {
        background-color: #4f6b53;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    }
</style>

<body>
    <h1>Detalle del producto</h1>

    <div class="detalle-container">
        <div class="detalle-item"><span>Nombre:</span> <?= esc($producto['nombre']) ?></div>
        <div class="detalle-item"><span>Precio:</span> $<?= esc($producto['precio']) ?></div>
        <div class="detalle-item"><span>Stock:</span> <?= esc($producto['stock']) ?> unidades</div>
        <div class="detalle-item"><span>Código:</span> <?= esc($producto['codigo']) ?></div>

        <p class="detalle-boton">
            <a href="<?= site_url('productos') ?>">
                <i class="fas fa-arrow-left"></i> Volver
            </a>
        </p>
    </div>
</body>


</html>