<?php

    session_start();
    if( $_SESSION["admin"] != "1" ){
        header("location: controller/logout_controller.php");
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
    <title>Paleta de administrador</title>
</head>
<header>
    <nav class="navbar bg-light">
        <div class="navbar-nav ms-4 me-auto">
            <a class="navbar-brand" href="#">Paleta de administrador</a>
        </div>
        <div>
            <div class="me-4 dropdown">
                <a class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-wrench me-3"></i> Opciones</a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                    <li><a class="dropdown-item text-danger" href="controller/logout_controller.php">Cerrar sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<body class="bg-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="bg-white col-12 col-md-3 col-lg-2 sidebar p-3" style="height: 100vh;">
                <h4><b>Dashboard</b></h4>
                <p>Menu de opciones</p>
                <?php
                    include "model/conn.php";
                    $sqlUsuarios = $conn->query(" select * from usuarios ");
                    $sqlPersonas = $conn->query(" select * from personas ");
                ?>
                <hr>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="" class="nav-link text-black"><i class="fa-solid fa-house me-2"></i><b>Inicio</b></a></li>
                    <li class="nav-item"><a href="" class="nav-link text-black"><i class="fa-solid fa-comment me-2"></i>Comentarios</a></a></li>
                    <li class="nav-item"><a href="" class="nav-link text-black"><i class="fa-solid fa-user me-2"></i>Personas</a></a></li>
                </ul>
            </div>
            <div class="col-md-9 col-lg-10 p-4">
                <div class="text-white">
                    <h2>Vista principal</h2>
                    <p>Regresar a <a href="mi_pagina_web.php">Home</a></p>
                </div>
                <div class="row gap-3">
                    <div class="card bg-primary col-4">
                        <div class="card-body text-white">
                            <h5 class="card-title">Usuarios registrados</h5>
                            <h4 class="card-text">Cantidad: <b> <?php echo count($sqlPersonas->fetch_all()) ?> </b></h4>
                        </div>
                    </div>
                    <div class="card bg-warning col-3">
                        <div class="card-body">
                            <h5 class="card-title">Personas en la tabla</h5>
                            <h4 class="card-text">Cantidad: <b> <?php echo count($sqlUsuarios->fetch_all()) ?> </b></h4>
                        </div>
                    </div>
                    <div class="card bg-success col-4">
                        <div class="card-body text-white">
                            <h5 class="card-title">Sesion actual</h5>
                            <h4 class="card-text"><b> <?php echo $_SESSION["user"] ?> </b></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
<script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>
</html>