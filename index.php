<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD RELACIONAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"crossorigin="anonymous">
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilladataTables.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<br>
<div class="container">
    <h1 class="text-center" style="background-color: black; color: white; border-radius: 5px;">LISTADO DE PRODUCTOS</h1>
</div>
<br>
<div class="container">
    <table class="table table-bordered" id="tabla">
        <thead class="table dark">
            <tr>
                <th scope="col">id_producto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Marca</th>
                <th scope="col">Precio</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            require("config/conexion.php");

            $sql = $conexion->query("SELECT * FROM productos
                    INNER JOIN categorias ON productos.id_categoria = categorias.id_categoria
                    INNER JOIN marcas ON productos.id_marca = marcas.id_marca
                    ");
            while ($resultado = $sql->fetch_assoc()) {
            ?>

                <tr>
                    <th scope="row"><?php echo $resultado['id_producto']?></th>
                    <th scope="row"><?php echo $resultado['nombreCategoria']?></th>
                    <th scope="row"><?php echo $resultado['nombreMarca']?></th>
                    <th scope="row"><?php echo $resultado['precio']?></th>
                    <th scope="row"><?php echo $resultado['descripcionProducto']?></th>
                    <th scope="row"><?php echo $resultado['nombre']?></th>
                    <th> 
                        <a href="formularios/editarForm.php?id_producto=<?php echo $resultado['id_producto']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="CRUD/eliminarDatos.php?id_producto=<?php echo $resultado['id_producto']?>" class="btn btn-danger"><i class="fa-solid fa-trash-can "></i></a>
                    </th>  
                </tr>

            <?php
            }
            ?>
            
        </tbody>
    </table>
    <div class="container">
        <a href="formularios/agregarForm.php" class="btn btn-success"><i class="fa-solid fa-circle-plus">  Agregar Producto</i></a>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a5634d85fb.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilladataTables.min.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script>
        var tabla =document.querySelector("#tabla")
        var datatable = new dataTable(tabla)
    </script>

</body>
</html>