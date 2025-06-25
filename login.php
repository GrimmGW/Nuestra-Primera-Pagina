<?php

    if(isset($_SESSION["id"])){
        header("location: mi_pagina_web.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/icons/conchas.png" type="image/x-icon">
    <title>Inicio de sesión - Programación IV</title>
</head>

<body class="bg-dark">
    <div class="container-fluid">
        <div class="d-flex vh-100 justify-content-center align-items-center">
            <div class="bg-dark border border-secondary rounded col-4 px-5 py-3">
                <div class="text-center text-white">
                    <h2><b>Inicio de sesión</b></h2>
                    <p>- Programación IV -</p>
                    <?php
                        include "model/conn.php";
                        include "controller/login_controller.php";
                    ?>
                </div>
                <div class="text-white">
                    <form method="POST">
                        <label for="labelUsername" class="form-label">Ingresa tu Usuario</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control bg-dark text-white" name="username">
                        </div>
                        <label for="labelPassword" class="form-label">Ingresa tu contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                            <input type="password" class="form-control bg-dark text-white" name="password">
                        </div>
                        <a href="">No recuerdo mi contraseña</a>
                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-primary px-5" name="btniniciarsesion" value="iniciar_sesion" >Iniciar sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>

</html>