
<?php
// Incluye el archivo de configuración de la conexión a la base de datos
require "../config/conexion.php";
session_start();

if(isset($_POST['correo'])) {
    $correo = $_POST['correo'];

    $stmt = $conn->prepare("SELECT COUNT(*) as total FROM tbl_usuarios WHERE correo = ?");
    $stmt->execute([$correo]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $existe = $result['total'] > 0 ? true : false;

    echo json_encode(['existe' => $existe]);
}