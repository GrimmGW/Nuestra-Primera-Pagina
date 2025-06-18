<?php
session_start();
    if(!empty($_POST["btniniciarsesion"])){
        if(!empty($_POST["username"]) and !empty($_POST["password"])){

            $user = $_POST["username"];
            $pass = $_POST["password"];

            $sql = $conn->query(" select * from personas where usuario = '$user' and password = '$pass' ");
            if($datos = $sql->fetch_object()){
                $_SESSION["id"] = $datos->id;
                $_SESSION["user"] = $datos->usuario;
                header("location:mi_pagina_web.php");
            } else{
                echo "<div class='alert alert-danger'>Este usuario no existe.</div>";
            }
        } else {
            echo "<div class='alert alert-warning'>Hay casillas vacías.</div>";
        }
    }

?>