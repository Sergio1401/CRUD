<?php
include ("../config/conexion.php");

$categoria = $_POST ['categoriaP'];
$marca = $_POST ['marcaP'];
$precio = $_POST ['precio'];
$descripcion = $_POST ['descripcion'];
$nombre = $_POST ['nombre'];

$sql = "INSERT INTO productos (id_categoria, id_marca, precio, descripcionProducto, nombre) VALUES('$categoria', '$marca', '$precio', '$descripcion', '$nombre')";


    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../index.php");
    } else {
        echo "Datos NO Insertados";
    }

?>