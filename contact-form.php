<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
/*************** CONFIG ****************/

$servername = "localhost";
$username = "root";
$password = "Dpcrack22"; 
$dbname = "mi_web";

/****************************************/

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = trim($_POST["nombre"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $mensaje = trim($_POST["mensaje"] ?? "");

    if (empty($nombre) || empty($email) || empty($mensaje)) {
        die("ERROR: Todos los campos son obligatorios.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("ERROR: El email no es válido.");
    }

    // GUARDAR EN BD
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error al conectar a MySQL: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO mensajes (nombre, email, mensaje) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $email, $mensaje);

    if (!$stmt->execute()) {
        die("Error al guardar en la base de datos: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
    
} else {
    echo "Acceso inválido.";
}
?>
