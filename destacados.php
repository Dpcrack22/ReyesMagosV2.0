<?php

$archivo = "IMG/regalos/lista.txt";

$regalos = [];
$destacados = [];

// Leemos cada línea del txt
if (file_exists($archivo)) {
    $lineas = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lineas as $linea) {
        $partes = explode("|||", $linea);

        if(count($partes) !== 5) continue;

        list($titulo, $descripcion, $link, $destacado, $imagen) = $partes;

        $data = [
            "titulo" => $titulo,
            "descripcion" => $descripcion,
            "link" => $link,
            "imagen" => "IMG/regalos/".$imagen
        ];

        if(strtolower($destacado) === "true") {
            $destacados[] = $data;
        }

        $regalos[] = $data;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destacados</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css?<?php echo time(); ?>" />

</head>
<body class="bodyDestacados">
    <div id="header"></div>

    <h1 class="tituloRegalos">⭐ Regalos destacados</h1>

    <?php if(empty($destacados)): ?>
        <p>No hay regalos destacados en este momento.</p>
    <?php else: ?>
        <div class="grid">
        <?php foreach ($destacados as $r): ?>
            <div class="card">
                <img src="<?= $r['imagen'] ?>" alt="<?= $r['titulo'] ?>">
                <h3><?= $r['titulo'] ?></h3>
                <p><?= $r['descripcion'] ?></p>
                <a href="<?= $r['link'] ?>" target="_blank">Ver regalo</a>
            </div>
    
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
    <button class="botonRegreso"><a href="./index.php">Volver a la  pagina de inicio</a></button>

    <div id="footer"></div>
    <script src="JS/HF.js"></script>
</body>
</html>