<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reyes Magos</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body class="bodyIndex">

    <div id="header"></div>

    <!-- Carousel -->
    <section class="carousel">
        <div class="slide active">
            <img src="imagenes/slide1.jpg" alt="Reyes Magos 1">
        </div>
        <div class="slide">
            <img src="imagenes/slide2.jpg" alt="Reyes Magos 2">
        </div>
        <div class="slide">
            <img src="imagenes/slide3.jpg" alt="Reyes Magos 3">
        </div>
        <!-- Controles -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </section>

    <!-- Sección de bloques -->
    <section class="bloques">
        <div class="bloque">
            <h3>Bienvenida</h3>
            <p>Una breve descripción sobre la web y su propósito.</p>
            <button href='index.html'>Saber más</button>
        </div>

        <div class="bloque">
            <h3>Regalos</h3>
            <p>Explora todos los regalos que me gustaría recibir.</p>
            <button href='regalos.html'>Ver regalos</button>
        </div>

        <div class="bloque">
            <h3>Contacto</h3>
            <p>Si quieres enviarme un mensaje o sugerencia, hazlo aquí.</p>
            <button href='contacto.html'>Contactar</button>
        </div>

        <div class="bloque">
            <h3>Novedades</h3>
            <p>Mira los regalos destacados y mis favoritos de esta temporada.</p>
            <button href='destacados.html'>Ver destacados</button>
        </div>
    </section>

    <div id="footer"></div>

    <script src="plantillas.js"></script>
    <script src="carousel.js"></script>
</body>
</html>
