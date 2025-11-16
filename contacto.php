<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body class="bodyContacto">
    <div id="header"></div>

    <div class="contacto-container">
        <h2>Contacto</h2>
        <p class="contacto-desc">Envíame cualquier sugerencia, idea o mensaje.</p>

        <form class="contacto-form" action="contact-form.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required>

            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" rows="5" required></textarea>

            <button type="submit">Enviar mensaje</button>
        </form>
    </div>

    <div id="footer"></div>
    <script src="JS/HF.js"></script>
</body>
</html>
