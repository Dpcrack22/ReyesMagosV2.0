<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div id="header"></div>

    <section class="contacto">
        <h2>Contacto</h2>

        <form action="contact-form.php" method="POST">
            <input type="text" name="nombre" placeholder="Tu nombre" required>
            <input type="email" name="email" placeholder="Tu email" required>
            <textarea name="mensaje" placeholder="Tu mensaje" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <div id="footer"></div>
    <script src="JS/HF.js"></script>
</body>
</html>