<!doctype html>
<html lang="en">

<head>
    <title>Iniciar Sesión</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
                            <form action="config/sesion.php" method="post">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="usuario"
                                        placeholder="name@example.com" name="usuario">
                                    <label for="floatingInput">Correo</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Password" name="password">
                                    <label for="floatingPassword">Contraseña</label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                    <label class="form-check-label" for="rememberPasswordCheck">
                                        Remember password
                                    </label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold"
                                        type="submit">Iniciar Sesion</button>
                                </div>
                                <hr class="my-4">
                                <div class="mb-2 form-check">
                                    <p>Tienes cuenta? <a href="./registro.php">Registrate</a></p>
                                    <p>Te olvidaste tu contraseña? <a href="">Cambiar contraseña</a></p>
                                    <a href="./index.php">Volver</a>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</body>

</html>