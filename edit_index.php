<?php
    include "model/conn.php";
    $id = $_GET["id"];
    $sql = $conn->query(" select * from usuarios where id = $id ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="col-4 p-4 m-auto" method="POST">
        <h3 class="text-center">Actualización de usuarios</h3>
        <input type="hidden" name="id" value="<?= $_GET['id']?>">
        <?php
        include "controller/edit_user.php";
        while($datos = $sql->fetch_object()) {
        ?>
        <div class="mb-3">
            <label for="formNombreLabel" class="form-label">Escribe tu Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
        </div>
        <div class="mb-3">
            <label for="formApellidoLabel" class="form-label">Escribe tu Apellido</label>
            <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
        </div>
        <div class="mb-3">
            <label for="formCedulaLabel" class="form-label">Escribe tu Cedula</label>
            <input type="number" class="form-control" name="cedula" value="<?= $datos->cedula ?>">
        </div>
        <div class="mb-3">
            <label for="formCorreoLabel" class="form-label">Escribe tu Correo</label>
            <input type="email" class="form-control" name="correo" value="<?= $datos->email ?>">
        </div>
        <?php
        }
        ?>
        <div class="text-center">
            <button type="submit" class="btn btn-warning" name="btnupdate" value="ok">Actualizar usuario</button>
        </div>
    </form>
</body>

</html>