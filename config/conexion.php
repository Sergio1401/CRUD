<?php


    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "CRUD";

    $conexion =new mysqli($host,$user,$pass,$db);

    if (!$conexion) {
        echo 'Conexion Fallida';
    }

?>