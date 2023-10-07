<?php 
include 'login/access.php';
if (isset($_SESSION['flash_message'])) {
    $flashMessage = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="col_plomo">
                        <img src="static/img/banner_login.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="col_blanco">
                        <div class="col_form">
                            <div class="titles_form py-4">
                                <div><img src=""></div>
                                <div>
                                    <h3>Welcome</h3>
                                    <span>Por favor ingresa tus datos</span>
                                </div>
                            </div>
                            <form action="#" method="POST" class="">
                                <!-- Mostrar mensaje flash -->
                                <?php if (isset($flashMessage)) : ?>
                                    <div class="mt-3 alert alert-<?php echo $flashMessage['type'] ?> alert-dismissible fade show" role="alert">
                                        <i class='bx bxs-check-circle'></i>
                                        <span class="text-black"><?php echo $flashMessage['message']; ?></span>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <?php if ($error != null) : ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= $error ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif ?>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="usuario" name="usuario" required placeholder="Usuario">
                                </div>
                                <div class="mb-3">

                                    <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
                                </div>
                                <div class="text-center mt-5 col_button">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>

                                <div class="register_a text-center mt-5">
                                    <span>No tienes una cuenta? <a href="register.php">Registrate Aquí</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>