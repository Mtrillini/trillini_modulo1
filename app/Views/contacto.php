
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
</head>


<style>

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


    form {
        width: 90%;
        max-width: 700px;
        margin: 40px auto 60px;
        background-color: #ffffffcc;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
        border: 1px solid #e0d7c8;
        backdrop-filter: blur(2px);
    }

    form table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 10px;
    }

    form th {
        text-align: left;
        font-family: 'Lora', serif;
        font-weight: 400;
        font-size: 0.95em;
        color: #4a3c2a;
        padding-right: 10px;
    }

    form td input,
    form td select {
        width: 80%;
        padding: 8px 10px;
        border-radius: 8px;
        border: 1px solid #e0d7c8;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 0.9em;
        color: #4a3c2a;
        background-color: #fff;
        transition: 0.3s;
    }

    form td input:focus,
    form td select:focus {
        outline: none;
        border-color: #6b8f71;
        box-shadow: 0 0 6px rgba(107, 143, 113, 0.3);
    }

    form button {
        background-color: #6b8f71;
        color: white;
        padding: 10px 25px;
        border-radius: 25px;
        font-size: 0.9em;
        font-weight: 400;
        border: none;
        cursor: pointer;
        transition: 0.3s;
    }

    form button:hover {
        background-color: #4f6b53;
        transform: translateY(-2px);
    }


    .notificacion {
        position: fixed;
        top: 20px;
        right: -400px;
        background-color: #6b8f71;
        color: white;
        padding: 15px 25px;
        border-radius: 8px;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.2);
        font-size: 0.9em;
        opacity: 0;
        transition: 0.5s ease;
        z-index: 9999;
    }

    .notificacion.show {
        right: 20px;
        opacity: 1;
    }

    .notificacion.error {
        background-color: #b96371;
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

<header>
    <div class="marca">
            <i class="fas fa-spa"></i>
            <span>HARMONY</span>
        </div>
    <a class="boton-contacto" href="<?= site_url('productos') ?>">VOLVER</a>
</header>
<main>
<!-- Formulario de contacto -->
<form action="#" method="POST" id="formContacto">
    <table class="tabla">
        <thead>
            <tr>
                <th colspan="2">CONTACTANOS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><label for="nombre">Nombre:</label></th>
                <td><input type="text" id="nombre" name="nombre" required /></td>
            </tr>
            <tr>
                <th><label for="apellido">Apellido:</label></th>
                <td><input type="text" id="apellido" name="apellido" required /></td>
            </tr>
            <tr>
                <th><label for="email">Email:</label></th>
                <td><input type="email" id="email" name="email" required /></td>
            </tr>
            <tr>
                <th><label for="telefono">Teléfono:</label></th>
                <td><input type="tel" id="telefono" name="telefono" required /></td>
            </tr>
            <tr>
                <th><label for="tipoContacto">Tipo de contacto:</label></th>
                <td>
                    <select id="tipoContacto" name="tipoContacto" required>
                        <option value="" disabled selected>Seleccione un tipo</option>
                        <option value="email">Soporte</option>
                        <option value="telefono">Ventas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="asunto">Asunto:</label></th>
                <td><input type="text" id="asunto" name="asunto" required /></td>
            </tr>
            <tr>
                <th><label for="descripcion">Descripción:</label></th>
                <td><input type="text" id="descripcion" name="descripcion" required /></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
                    <button type="submit">ENVIAR</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>
</main>

<div class="notificacion" id="notificacion"></div>

<script>
    const form = document.getElementById('formContacto');
    const noti = document.getElementById('notificacion');

    function mostrarNotificacion(mensaje) {
        noti.textContent = mensaje;
        noti.className = 'notificacion show';
        setTimeout(() => {
            noti.classList.remove('show');

            location.reload();
        }, 2000);
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        let formData = new FormData(this);

        fetch(this.action, {
            method: 'POST',
            body: formData
        })
            .then(response => response.text())
            .then(data => {

                mostrarNotificacion('✅ Muchas gracias por tu consulta, ¡se envió!');
                this.reset();
            })
            .catch(error => {
                console.error('Error:', error);
                mostrarNotificacion('❌ Ocurrió un error al enviar la consulta.');
            });
    });
</script>