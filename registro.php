<?php
include_once ("./config/conexion.php");
?>


<!doctype html>
<html lang="en">

<head>
    <title>Registrarse</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Registro</h2>
                        <form action="./config/registrar.php" method="post">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="nombre" name="nombre" class="form-control text-center" required/>
                                        <label class="form-label" for="form3Example1">Nombre</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="apellido" name="apellido"
                                            class="form-control text-center" />
                                        <label class="form-label" for="form3Example2">Apellido</label>
                                    </div>
                                </div>


                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="usuario" name="usuario" class="form-control text-center" required/>
                                    <label class="form-label" for="form3Example3">Correo</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="contrasena" name="contrasena"
                                        class="form-control text-center" required/>
                                    <label class="form-label" for="form3Example4">Contraseña</label>
                                </div>
                                <div class="col-md-12">

                                    <input type="number" class="form-control text-center my-2" name="telefono"
                                        id="inputphone" placeholder="+51" maxlength="9" required>
                                    <label for="inputphone" class="form-label">telefono: </label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control text-center my-2" name="direccion"
                                        id="inputAddress" placeholder="Av.">
                                    <label for="inputAddress2" class="form-label">Direccion: </label>
                                </div>
                                <div class="col-md-12">
                                    <select class="form-control" name="distrito" id="distrito">
                                        <option value="" selected>Seleccione</option>
                                        <option value="">ANCON</option>
                                        <option value="">ATE</option>
                                        <option value="">BARRANCO</option>
                                        <option value="">BREÑA</option>
                                        <option value="">CARABAYLLO</option>
                                        <option value="">CHACLACAYO</option>
                                        <option value="">CHORRILLOS</option>
                                        <option value="">CIENEGUILLA</option>
                                        <option value="">COMAS</option>
                                        <option value="">EL AGUSTINO</option>
                                        <option value="">INDEPENDENCIA</option>
                                        <option value="">JESUS MARIA</option>
                                        <option value="">LA MOLINA</option>
                                        <option value="">LA VICTORIA</option>
                                        <option value="">LIMA</option>
                                        <option value="">LINCE</option>
                                        <option value="">LOS OLIVOS</option>
                                        <option value="">LURIGANCHO</option>
                                        <option value="">LURIN</option>
                                        <option value="">MAGDALENA DEL MAR</option>
                                        <option value="">MIRAFLORES</option>
                                        <option value="">PACHACAMAC</option>
                                        <option value="">PUCUSANA</option>
                                        <option value="">PUEBLO LIBRE</option>
                                        <option value="">PUENTE PIEDRA</option>
                                        <option value="">PUNTA HERMOSA</option>
                                        <option value="">PUNTA NEGRA</option>
                                        <option value="">RIMAC</option>
                                        <option value="">SAN BARTOLO</option>
                                        <option value="">SAN BORJA</option>
                                        <option value="">SAN ISIDRO</option>
                                        <option value="">SAN JUAN DE LURIGANCHO</option>
                                        <option value="">SAN JUAN DE MIRAFLORES</option>
                                        <option value="">SAN LUIS</option>
                                        <option value="">SAN MARTIN DE PORRES</option>
                                        <option value="">SAN MIGUEL</option>
                                        <option value="">SANTA ANITA</option>
                                        <option value="">SANTA MARIA DEL MAR</option>
                                        <option value="">SANTA ROSA</option>
                                        <option value="">SANTIAGO DE SURCO</option>
                                        <option value="">SURQUILLO</option>
                                        <option value="">VILLA EL SALVADOR</option>
                                        <option value="">VILLA MARIA DEL TRIUNFO</option>
                                        <!-- ?php foreach ($distritos as $distrito) { ?>
                                        <option value="?php echo $distrito['dist_id'] ?>">
                                            ?php echo $distrito['dist_nombre'] ?>
                                        </option>
                                        ?php } ?> --> </select>
                                        <label for="distrito" class="form-label">Distrito: </label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4" name="register">
                                    Registrar
                                </button>
                                <a class="row text-center" href="login.php">Volver</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</body>

</html>