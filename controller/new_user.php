<?php

    if(!empty($_POST["btnregistrar"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cedula"]) and !empty($_POST["correo"])){

            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $cedula = $_POST["cedula"];
            $correo = $_POST["correo"];

            $sql = $conn->query(" insert into usuarios (nombre, apellido, cedula, email) values('$nombre', '$apellido', '$cedula', '$correo')  ");
            if($sql==1){
                header("location:mi_pagina_web.php");
            } else {
                echo "<div class='alert alert-danger'>Error al crear el usuario</div>";
            }
        } else {
            echo "<div class='alert alert-warning'>Hay casillas vacias</div>";
        }
    }

?>