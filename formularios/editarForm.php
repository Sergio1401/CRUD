<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center" style="background-color: black; color: white; border-radius: 5px;">Editar Productos</h1>
    <br>
    <form class="container" action="../CRUD/editarDatos.php" method="POST">
        <?php
            include ("../config/conexion.php");

            $sql = "SELECT * FROM productos WHERE id_producto =".$_GET['id_producto'];
            $resultado = $conexion->query($sql);

            $row = $resultado->fetch_assoc();
        ?>

        <input type="Hidden" class="form-control" name="id_producto" value="<?php echo $row['id_producto']; ?>">


        <label>Categorias</label>
        <select class="form-select mb-3" aria-label="Default select example" name="categorias">
            <option selected disabled>--Seleccione Categorias--</option>
            <?php
            include ("../config/conexion.php");

            $sql1 = "SELECT * FROM categorias WHERE id_categoria=".$row['id_categoria'];
            $resultado1 = $conexion->query($sql1);

            $row1 = $resultado1->fetch_assoc();

            echo "<option selected value='".$row1['id_categoria']."'>".$row1['nombreCategoria']."</option>";

            $sql2 ="SELECT * FROM categorias";
            $resultado2 = $conexion->query($sql2);

                while ($fila = $resultado2->fetch_array()) {
                    echo "<option value='".$fila['id_categoria']."'>".$fila['nombreCategoria']."</option>";
                }
            ?>
        </select>
        <label>Marcas</label>
        <select class="form-select mb-3" aria-label="Default select example" name="marcas">
            <option selected disabled>--Seleccione Marcas--</option>
            <?php
            include ("../config/conexion.php");

            $sql3 = "SELECT * FROM marcas WHERE id_marca=".$row['id_marca'];
            $resultado3 = $conexion->query($sql3);

            $row3 = $resultado3->fetch_assoc();

            echo "<option selected value='".$row3['id_marca']."'>".$row3['nombreMarca']."</option>";

            $sql4 ="SELECT * FROM marcas";
            $resultado4 = $conexion->query($sql4);

                while ($fila = $resultado4->fetch_array()) {
                    echo "<option value='".$fila['id_categoria']."'>".$fila['nombreMarca']."</option>";
                }
            ?>
        </select>

        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" value="<?php echo $row['precio'];?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="<?php echo $row['descripcionProducto'];?>">
        </div><div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre'];?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar</button>
            <a href="../index.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>
</body>
</html>