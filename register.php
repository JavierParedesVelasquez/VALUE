<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                            <div class="titles_form py-2">
                                <div><img src=""></div>
                                <div>
                                    <h3>Registro</h3>
                                    <span>Por favor ingresa tus datos</span>
                                </div>
                            </div>
                            <form action="login/register.php" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" autocomplete="off">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" autocomplete="off">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div id="correoAlerta" class="alert alert-danger mb-3" style="display:none;">
                                        El correo electrónico ya está registrado. Por favor, utiliza otro.
                                    </div>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Correo Electronico" autocomplete="off">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div id="dniAlerta" class="alert alert-danger mb-3" style="display:none;">
                                        El DNI ya está registrado. Por favor, utiliza otro.
                                    </div>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="dni" name="dni" placeholder="DNI" autocomplete="off">
                                    </div>
                                </div>
                                <p>Credenciales para ingresar a la plataforma:</p>
                                <div class="d-flex col-12 mb-3 justify-content-between">
                                    <div class="col-5">
                                        <div id="nickAlerta" class="alert alert-danger mb-3" style="display:none;">
                                            El Nick ya está registrado. Por favor, utiliza otro.
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nick" name="nick" placeholder="Nombre de Usuario" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h4>Subir Foto</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="imagen" class="form-label">Seleccionar Imagen</label>
                                            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                                        </div>
                                        <div class="mb-3 text-center d-flex justify-content-center">
                                            <img id="imagenPrevia" class="img-fluid" style="max-height: 300px; display: none;">
                                            <div id="sinImagen" class="alert alert-danger" role="alert" style="display: none;">No hay imagen seleccionada</div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="my-3">Seleccionar Bancos Disponibles:</h4>
                                <div class="my-3 col-12">
                                    <div class="">
                                        <div class="d-flex align-items-center ms-4">
                                            <input class="form-check-input me-2" type="checkbox" id="checkbox1" value="" aria-label="...">
                                            <label class="form-check-label mt-1" for="checkbox1">
                                                BCP
                                            </label>
                                        </div>
                                        <div class="mt-2" id="input1" style="display: none;">
                                            <input type="number" id="bcps" name="bcps" class="form-control mb-2 maxlength-10" placeholder="Ingrese BCP Soles">
                                            <div class="invalid-feedback mb-2">
                                                <span class="bi bi-x-circle-fill me-2">
                                                    Para el caso de BCP el número de una cuenta de ahorro tiene 14 dígitos y de una cuenta corriente 13.
                                                </span>
                                            </div>
                                            <input type="number" id="bcpd" name="bcpd" class="form-control mb-2" placeholder="Ingrese BCP Dólares">
                                            <div class="invalid-feedback mb-2">
                                                <span class="bi bi-x-circle-fill me-2">
                                                    xxx.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="d-flex align-items-center ms-4">
                                            <input class="form-check-input me-2" type="checkbox" id="checkbox2" value="" aria-label="...">
                                            <label class="form-check-label mt-1" for="checkbox2">
                                                Interbank
                                            </label>
                                        </div>
                                        <div class="mt-2" id="input2" style="display: none;">
                                            <input type="number" id="inters" name="inters" class="form-control mb-2" placeholder="Ingrese Interbank Soles">
                                            <div class="invalid-feedback mb-2">
                                                <span class="bi bi-x-circle-fill me-2">
                                                    xxx.
                                                </span>
                                            </div>
                                            <input type="number" id="interd" name="interd" class="form-control mb-2" placeholder="Ingrese Interbank Dólares">
                                            <div class="invalid-feedback mb-2">
                                                <span class="bi bi-x-circle-fill me-2">
                                                    xxx.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="d-flex align-items-center ms-4">
                                            <input class="form-check-input me-2" type="checkbox" id="checkbox3" value="" aria-label="...">
                                            <label class="form-check-label mt-1" for="checkbox3">
                                                Bbva
                                            </label>
                                        </div>
                                        <div class="mt-2" id="input3" style="display: none;">
                                            <input type="number" id="bbvas" name="bbvas" class="form-control mb-2" placeholder="Ingrese Bbva Soles">
                                            <div class="invalid-feedback mb-2">
                                                <span class="bi bi-x-circle-fill me-2">
                                                    xxx.
                                                </span>
                                            </div>
                                            <input type="number" id="bbvad" name="bbvad" class="form-control mb-2" placeholder="Ingrese Bbva Dólares">
                                            <div class="invalid-feedback mb-2">
                                                <span class="bi bi-x-circle-fill me-2">
                                                    xxx.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="d-flex align-items-center ms-4">
                                            <input class="form-check-input me-2" type="checkbox" id="checkbox4" value="" aria-label="...">
                                            <label class="form-check-label mt-1" for="checkbox4">
                                                Scotiabank
                                            </label>
                                        </div>
                                        <div class="mt-2" id="input4" style="display: none;">
                                            <input type="number" id="scots" name="scots" class="form-control mb-2" placeholder="Ingrese Scotiabank Soles">
                                            <input type="number" id="scotd" name="scotd" class="form-control mb-2" placeholder="Ingrese Scotiabank Dólares">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-5 col_button">
                                    <button type="submit" class="btn btn-primary">Registrarse</button>
                                </div>

                                <div class="register_a text-center mt-5">
                                    <span>Ya tienes una cuenta? <a href="index.php">Ingresa Aquí</a> </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkbox1 = document.getElementById('checkbox1');
            const input1 = document.getElementById('input1');

            checkbox1.addEventListener('change', function() {
                input1.style.display = this.checked ? 'block' : 'none';
            });

            const checkbox2 = document.getElementById('checkbox2');
            const input2 = document.getElementById('input2');

            checkbox2.addEventListener('change', function() {
                input2.style.display = this.checked ? 'block' : 'none';
            });

            const checkbox3 = document.getElementById('checkbox3');
            const input3 = document.getElementById('input3');

            checkbox3.addEventListener('change', function() {
                input3.style.display = this.checked ? 'block' : 'none';
            });

            const checkbox4 = document.getElementById('checkbox4');
            const input4 = document.getElementById('input4');

            checkbox4.addEventListener('change', function() {
                input4.style.display = this.checked ? 'block' : 'none';
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        document.getElementById('imagen').addEventListener('change', function() {
            var imagenPrevia = document.getElementById('imagenPrevia');
            var sinImagen = document.getElementById('sinImagen');
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    imagenPrevia.src = e.target.result;
                    imagenPrevia.style.display = 'block';
                    sinImagen.style.display = 'none';
                }
                reader.readAsDataURL(file);
            } else {
                imagenPrevia.style.display = 'none';
                sinImagen.style.display = 'block';
            }
        });
    </script>
    <script src="static/js/validacion-correo.js"></script>
    <script src="static/js/validacion-dni.js"></script>
    <script src="static/js/validacion-nick.js"></script>
    <script src="static/js/validaciones-bancos.js"></script>

</body>

</html>