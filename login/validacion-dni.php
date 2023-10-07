
<?php
// Incluye el archivo de configuración de la conexión a la base de datos
require "../config/conexion.php";
session_start();

if(isset($_POST['dni'])) {
    $dni = $_POST['dni'];

    $stmt = $conn->prepare("SELECT COUNT(*) as total FROM tbl_usuarios WHERE dni = ?");
    $stmt->execute([$dni]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $existe = $result['total'] > 0 ? true : false;

    echo json_encode(['existe' => $existe]);
}