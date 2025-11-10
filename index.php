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
            <img src="./IMG/anime_car.webp" alt="Reyes Magos 1">
        </div>
        <div class="slide">
            <img src="./IMG/goku_car.png" alt="Reyes Magos 2">
        </div>
        <div class="slide">
            <img src="./IMG/Naruto_car.jpg" alt="Reyes Magos 3">
        </div>
        <div class="slide">
            <img src="./IMG/Spider_car.png" alt="Reyes Magos 3">
        </div>
        <div class="slide">
            <img src="./IMG/Todoroki_car.jpg" alt="Reyes Magos 3">
        </div>
        <!-- Controles -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </section>

    <!-- Sección de bloques -->
    <section class="bloques">
        <div class="bloque">
            <img src="./IMG/Bienvenida.jpg" alt="Iso imagen de bienvenida">
            <h3>Bienvenida</h3>
            <p>Una breve descripción sobre la web y su propósito.</p>
            <button href='index.html'>Saber más</button>
        </div>

        <div class="bloque">
            <h3>Regalos</h3>
            <p>Explora todos los regalos que me gustaría recibir.</p>
            <button href='regalos.html'>Ver regalos</button>
            <img src="./IMG/Gifts.jpg" alt="Gifts imagen">
        </div>

        <div class="bloque">
            <img src="./IMG/Contact.jpg" alt="Gojos imagen de contacto">
            <h3>Contacto</h3>
            <p>Si quieres enviarme un mensaje o sugerencia, hazlo aquí.</p>
            <button href='contacto.html'>Contactar</button>
        </div>

        <div class="bloque">
            <h3>Novedades</h3>
            <p>Mira los regalos destacados y mis favoritos de esta temporada.</p>
            <button href='destacados.html'>Ver destacados</button>
            <img src="./IMG/News.jpg" alt="">
        </div>
    </section>

    <div id="footer"></div>

    <script src="/JS/HF.js"></script>
    <script src="/JS/carrousel.js"></script>
</body>
</html>
