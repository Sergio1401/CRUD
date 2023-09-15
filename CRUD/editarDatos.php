<?php

        include_once("../config/conexion.php");

        $id_producto = $_POST ['id_producto'];
        $categorias = $_POST ['categorias'];
        $marcas = $_POST ['marcas'];
        $precio = $_POST ['precio'];
        $descripcion = $_POST ['descripcion'];
        $nombre = $_POST ['nombre'];
        
        $sql = "UPDATE productos SET
                        id_categoria='".$categorias."',
                        id_marca='".$marcas."',
                        precio='".$precio."',
                        descripcionProducto='".$descripcion."',
                        nombre='".$nombre."' WHERE id_producto =".$id_producto."";

        if ($resultado = $conexion->query($sql)) {
            header("location:../index.php");
        }
?>
