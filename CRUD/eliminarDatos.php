<?php

    include("../config/conexion.php");

    $id_producto = $_GET['id_producto'];
    $sql = "DELETE FROM productos WHERE id_Producto ='$id_producto'";


    $query = mysqli_query($conexion,$sql);
    if ($query === TRUE) {
        header("location:../index.php");
    }

?>