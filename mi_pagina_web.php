<?php

    session_start();
    if(empty($_SESSION["id"])){
        header("location:login.php");
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
    <title>Mi Primera Página</title>
</head>
<style>

</style>
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="navbar-nav ms-4 me-auto">
            <a class="navbar-brand" href="#">Programacion IV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">Acerca de mi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mis proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
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

<body>
    <section id="intro">
        <div class="container-fluid d-flex text-white align-items-center text-center justify-content-center"
            style="background-image: url(assets/images/ladscape_prueba_darken.JPG); height: 100vh; background-size: cover; background-position: center;">
            <div>
                <h1 style="font-size: 56px;"><b>Bienvenido, <?php echo $_SESSION["user"]?> 👋</b></h1>
                <p class="mt-4">Ut do anim cillum occaecat culpa incididunt voluptate dolore est culpa quis Lorem
                    laborum sint.</p>
                <button type="button" class="btn btn-outline-light me-3">Iniciar sesión</button>
                <button type="button" class="btn btn-light px-5">Registrarse</button>
            </div>
        </div>
    </section>
    <section id="about" class="mt-5">
        <div class="row align-items-center">
            <div class="col-lg-4 offset-lg-2 offset-1 col-10">
                <h2>Aqui se verá Programación Web</h2>
                <p class="mt-3">Occaecat ut esse nulla magna officia magna dolor excepteur. Labore reprehenderit et nisi
                    incididunt id. Veniam elit in magna occaecat voluptate excepteur. Tempor sit ut mollit deserunt elit
                    anim qui Lorem adipisicing reprehenderit.</p>
            </div>
            <div class="col-lg-3 offset-lg-1 offset-1 col-10">
                <img src="assets/images/ladscape_prueba.jpg" class="img-fluid rounded" alt="Una vista hermosa">
            </div>
        </div>
    </section>
    <section id="contacto" class="bg-dark p-5 text-white mt-5">
        <div class="container-fluid row">
            <form class="col-lg-4 col-sm-12 p-4" method="POST">
                <h3 class="text-center">Registro de usuarios</h3>
                <?php
                include "model/conn.php";
                include "controller/new_user.php";
                include "controller/delete_user.php";

                ?>
                <div class="mb-3">
                    <label for="formNombreLabel" class="form-label">Escribe tu Nombre</label>
                    <input type="text" class="form-control bg-dark text-white" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="formApellidoLabel" class="form-label">Escribe tu Apellido</label>
                    <input type="text" class="form-control bg-dark text-white" name="apellido">
                </div>
                <div class="mb-3">
                    <label for="formCedulaLabel" class="form-label">Escribe tu Cedula</label>
                    <input type="number" class="form-control bg-dark text-white" name="cedula">
                </div>
                <div class="mb-3">
                    <label for="formCorreoLabel" class="form-label">Escribe tu Correo</label>
                    <input type="email" class="form-control bg-dark text-white" name="correo">
                </div>

                <button type="submit" class="btn btn-warning" name="btnregistrar" value="ok">Registrar usuario</button>
            </form>
            <div class="col-lg-8 col-sm-12 p-4 table-responsive">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cedula</th>
                            <th>Correo electronico</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "model/conn.php";
                        $sql = $conn->query("select * from usuarios");
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->id ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->apellido ?></td>
                                <td><?= $datos->cedula ?></td>
                                <td><?= $datos->email ?></td>
                                <td>
                                    <a href="edit_index.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i
                                            class="fa-solid fa-pencil"></i></a>
                                </td>
                                <td>
                                    <a onclick="return confirm('Desear borrar este usuario?')"
                                        href="mi_pagina_web.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i
                                            class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div class="py-4 mt-5" style="background-color: #6451CF;"></div>
    <footer id="footer" class="p-5 bg-dark text-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-3">
                    <h6><b>Programacion IV</b></h6>
                    <p>Consectetur reprehenderit fugiat ad in esse cillum anim.</p>
                </div>
                <div class="col col-3">
                    <h6><b>Enlaces</b></h6>
                    <ul>
                        <li><a class="text-decoration-none" href="">Ir a tal pagina</a></li>
                        <li><a class="text-decoration-none" href="">Ir a tal pagina</a></li>
                        <li><a class="text-decoration-none" href="">Ir a tal pagina</a></li>
                        <li><a class="text-decoration-none" href="">Ir a tal pagina</a></li>
                    </ul>
                </div>
                <div class="col col-3">
                    <h6><b>Productos</b></h6>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>bootstrap</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                    </ul>
                </div>
                <div class="col col-3">
                    <h6><b>Contactame</b></h6>
                    <ul>
                        <li><a href="tel:04121234567"></a>04121234567</li>
                        <li><a href="mailto:john.doe@email.com"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
<script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>

</html>