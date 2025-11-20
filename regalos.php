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

        $regalos[] = $data; // todos los regalos van aquí
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regalos</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body class="bodyRegalos">

<div id="header"></div>

<h1 class="tituloRegalos">🎁 Todos los regalos</h1>

<div class="grid">
<?php foreach ($regalos as $r): ?>
    <div class="card <?= in_array($r, $destacados) ? 'destacado' : '' ?>">
        <img src="<?= $r['imagen'] ?>" alt="<?= $r['titulo'] ?>">
        <h3><?= $r['titulo'] ?></h3>
        <p><?= $r['descripcion'] ?></p>
        <a href="<?= $r['link'] ?>" target="_blank">Ver regalo</a>
    </div>
<?php endforeach; ?>
</div>

<button class="botonRegreso"><a href="./index.php">Volver a la  pagina de inicio</a></button>

<div id="footer"></div>
<script src="JS/HF.js"></script>

</body>
</html>
