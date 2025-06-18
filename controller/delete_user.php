<?php

    if(!empty($_GET["id"])){
        $id = $_GET["id"];
        $sql = $conn->query("delete from usuarios where id=$id");

        if($sql == 1){
            header("location:mi_pagina_web.php");
        } else {
            echo "<div class='alert alert-danger'>Error al borrar el usuario</div>";
        }
    }

?>