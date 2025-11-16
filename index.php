<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reyes Magos</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css?<?php echo time(); ?>" />
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
            <div>
                <h3>Bienvenida</h3>
                <p>Bienvenid@ a mi pequeño rincón mágico de la web.<br><br>
                    Aquí encontrarás un espacio hecho con cariño, donde mezclo un poco de mis gustos, mis ideas y las cosas que me hacen ilusión.<br><br>
                    Esta página está pensada para compartir contigo un trocito de mi mundo: desde mis series y juegos favoritos hasta los detalles que me gustaría recibir.<br><br>
                    Relájate, explora y disfruta del viaje. ✨</p>
            </div>
        </div>

        <div class="bloque">
            <div>
                <h3>Regalos</h3>
                <p>Aquí puedes descubrir todos los regalos que me harían ilusión esta temporada.
                    He reunido cosas que representan mis gustos: desde detalles frikis y anime, hasta cosas útiles, bonitas y especiales.<br><br>
                    Si quieres inspirarte o simplemente cotillear mis favoritos… este es tu lugar. 🎁💜</p>
                <a href='regalos.php'>Ver regalos</a>
            </div>
            <img src="./IMG/Gifts.jpg" alt="Gifts imagen">
            
        </div>

        <div class="bloque">
            <img src="./IMG/Contact.jpg" alt="Gojos imagen de contacto">
            <div>
                <h3>Contacto</h3>
                <p>Si quieres decirme algo, dejar una sugerencia, hacer una pregunta o simplemente saludar… este es el sitio indicado.<br><br>
                Tu mensaje siempre será bienvenido.
                Gracias por pasarte por aquí y dedicarme un momento. 💫</p>
                <a href='contacto.php'>Contactar</a>
            </div>
        </div>
    
        <div class="bloque">
            <div>
                <h3>Novedades</h3>
                <p>En este apartado podrás ver todas las novedades, cambios y cositas que voy añadiendo a la web.
                    Desde regalos destacados, nuevas ideas, actualizaciones, diseños, imágenes y cualquier cosa que merezca un lugar especial.<br><br>
                    Si quieres enterarte de lo último y descubrir qué estoy preparando, pásate por aquí de vez en cuando. Hay sorpresas que valen la pena. ⚡💜</p>
                <a href='destacados.php'>Ver destacados</a>
            </div>
            <img src="./IMG/News.jpg" alt="">
        </div>
    </section>

    <div id="footer"></div>

    <script src="/JS/HF.js"></script>
    <script src="/JS/carrousel.js"></script>
</body>
</html>
