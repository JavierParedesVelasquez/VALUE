    <?php

    include '../config/conexion.php';
    include '../dashboard/class/usuarios.php';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nombre =  !empty($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellidos =  !empty($_POST['apellidos']) ? $_POST['apellidos'] : null;
        $correo =  !empty($_POST['correo']) ? $_POST['correo'] : null;
        $dni =  !empty($_POST['dni']) ? $_POST['dni'] : null;
        $nick =  !empty($_POST['nick']) ? $_POST['nick'] : null;
        $pass =  !empty($_POST['pass']) ? md5($_POST['pass']) : null;
        
        // Bancos
        $bcps =  !empty($_POST['bcps']) ? $_POST['bcps'] : null;
        $bcpd =  !empty($_POST['bcpd']) ? $_POST['bcpd'] : null;
        $inters =  !empty($_POST['inters']) ? $_POST['inters'] : null;
        $interd =  !empty($_POST['interd']) ? $_POST['interd'] : null;
        $bbvas =  !empty($_POST['bbvas']) ? $_POST['bbvas'] : null;
        $bbvad =  !empty($_POST['bbvad']) ? $_POST['bbvad'] : null;
        $scots =  !empty($_POST['scots']) ? $_POST['scots'] : null;
        $scotd =  !empty($_POST['scotd']) ? $_POST['scotd'] : null;
        $rol = '3';
        $estado = 'activo';

        // Crear carpeta fotos
        if (!is_dir("../dashboard/fotos")) {
            mkdir("../dashboard/fotos");
        }

        if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
            $nombreArchivoOriginal = $_FILES["imagen"]["name"];
            $extension = pathinfo($nombreArchivoOriginal, PATHINFO_EXTENSION);
            $nombreArchivoUnico = uniqid() . "." . $extension;
            $rutaDestino = "../dashboard/fotos/" . $nombreArchivoUnico;

            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaDestino)) {

                $result =  Usuario::addUsuario(
                    $nombre,
                    $apellidos,
                    $correo,
                    $dni,
                    $nick,
                    $pass,
                    $nombreArchivoUnico,
                    $bcps,
                    $bcpd,
                    $inters,
                    $interd,
                    $bbvas,
                    $bbvad,
                    $scots,
                    $scotd,
                    $rol,
                    $estado
                );

                if ($result->execute()) {
                    $_SESSION['flash_message'] = array(
                        'type' => 'primary',
                        'message' => 'Usuario <b>' . $nombre . '</b> registrado correctamente.'
                    );
                    header('Location: ../index.php');
                    exit();
                } else {
                    header('Location: register.php');
                }
            } else {
                // Maneja el error como desees.
            }
        } else {
            // No se subió imagen
            $nombreArchivoUnico = null;

            // Procesar el formulario sin imagen
            $result =  Usuario::addUsuario(
                $nombre,
                $apellidos,
                $correo,
                $dni,
                $nick,
                $pass,
                $nombreArchivoUnico,
                $bcps,
                $bcpd,
                $inters,
                $interd,
                $bbvas,
                $bbvad,
                $scots,
                $scotd,
                $rol,
                $estado
            );

            if ($result->execute()) {
                $_SESSION['flash_message'] = array(
                    'type' => 'primary',
                    'message' => 'Usuario <b>' . $nombre . '</b> registrado correctamente.'
                );
                header('Location: ../index.php');
                exit();
            } else {
                header('Location: register.php');
            }
        }
    }
