<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:wght@400&family=Source+Sans+Pro:wght@300;400&display=swap');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');

        body {
            font-family: 'Source Sans Pro', sans-serif;
            background: linear-gradient(to bottom, #fdfaf5 0%, #f8f3ea 100%);
            color: #4a3c2a;
            margin: 0;
            padding: 0;
            background-image: url('https://www.transparenttextures.com/patterns/paper-fibers.png');
            background-repeat: repeat;
        }

        h1,
        h2 {
            font-family: 'Lora', serif;
            text-align: center;
            margin: 20px 0;
            letter-spacing: 0.5px;
            font-weight: 400;
        }

        h1 {
            font-size: 1.3em;
            color: #4a3c2a;
        }

        h2 {
            font-size: 1em;
            color: #6b8f71;
        }


        .table-container {
            width: 90%;
            max-width: 900px;
            margin: 30px auto 60px;
            overflow-x: auto;
            background-color: #ffffffcc;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.04);
            border: 1px solid #e0d7c8;
            backdrop-filter: blur(2px);
        }

        header {
            background-color: #6b8f71;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 20px;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .tabla {
            width: 100%;
            border-collapse: collapse;
            border-radius: 12px;
            overflow: hidden;
        }

        .tabla thead {
            background-color: #e9e3d5;
        }

        .tabla thead th {
            padding: 15px;
            font-size: 1em;
            color: #4a3c2a;
            font-family: 'Lora', serif;
            font-weight: 400;
            letter-spacing: 0.3px;
        }

        .tabla tbody tr {
            border-bottom: 1px solid #f0ece6;
            transition: background-color 0.3s;
        }

        .tabla tbody tr:hover {
            background-color: #f7f4ed;
        }

        .tabla td {
            text-align: center;
            padding: 12px 10px;
            font-size: 0.92em;
            font-weight: 300;
        }

        .tabla a {
            display: inline-block;
            background-color: #6b8f71;
            color: white;
            padding: 7px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 0.85em;
            font-weight: 300;
            transition: background-color 0.3s, transform 0.2s;
        }

        .tabla a:hover {
            background-color: #4f6b53;
            transform: translateY(-2px);
        }

        .tabla a i {
            margin-right: 6px;
            font-size: 0.9em;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #4f6b53;
            color: white;
            padding: 15px 30px;
        }

       .marca {
        font-family: 'Lora', serif;
        font-size: 1.5em;
        font-weight: 200;
        color: #f7f4ed;
        display: flex;
        align-items: center;
        gap: 10px; 
        }

        .marca i {
        font-size: 0.8em; 
        color: #f7f4ed;
        margin: 0;
        }

        .boton-contacto {
            display: inline-block;
            background-color: #6b8f71;
            color: white;
            padding: 7px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 0.85em;
            font-weight: 300;
            transition: background-color 0.3s, transform 0.2s;
        }

        .boton-contacto:hover {
            background-color: #4f6b53;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>

   <header>
        <div class="marca">
            <i class="fas fa-spa"></i>
            <span>HARMONY</span>
        </div>
        <a class="boton-contacto" href="<?= site_url('contacto') ?>">CONTACTO</a>
    </header>

    <main>


        <h1>Accesorios Faciales</h1>
        <h2><?= esc($titulo) ?></h2>

        <!-- Tabla de productos -->
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
                                <a href="<?= site_url('productos/verDetalle/' . $producto['id']) ?>">
                                    <i class="fas fa-leaf"></i> Ver
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

    </main>
</body>

</html>