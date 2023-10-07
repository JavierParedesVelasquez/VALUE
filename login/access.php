<?php
// Incluye el archivo de configuración de la conexión a la base de datos
require "config/conexion.php";
session_start();
// Variable para almacenar mensajes de error
$error = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["usuario"]) || empty($_POST["password"])) {
        $error = "Por favor llene todos los campos.";
    } else {
        $statement = $conn->prepare("SELECT * FROM tbl_usuarios WHERE nick = :usuario LIMIT 1");
        $statement->bindParam(":usuario", $_POST["usuario"]);
        $statement->execute();

        if ($statement->rowCount() == 0) {
            $error = "Credenciales no válidas.";
        } else {
            $user = $statement->fetch(PDO::FETCH_ASSOC);

            if (md5($_POST["password"]) !== $user["pass"]) {
                $error = "Credenciales no válidas.";
            } else {
                session_start();
                $_SESSION["user"] = $user;

                // Redirecciona al mismo lugar para todos los usuarios
                header("Location: dashboard/");
            }
        }
    }
}
