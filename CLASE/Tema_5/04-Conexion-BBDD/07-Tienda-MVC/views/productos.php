<?php
include '../controller/Producto.php';
include '../controller/Categoria.php';

$productoController = new ProductoController();
$categoriaController = new CategoriaController();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tabla de productos por categoría</title>
</head>

<body>
    <?php
    include 'header.php';
    $productos = $productoController->showProductosByCategoriaId($_GET['categoria']);
    $cat = $cat->showCategoriaById($_GET['categoria']);
    echo $cat;
    exit;
    if ($cat === FALSE or $productos === FALSE) {
        echo "<p class='error'>Error al conectar con la base datos</p>";
        exit;
    }
    echo "<h1>" . $cat['nombre'] . "</h1>";
    echo "<p>" . $cat['descripcion'] . "</p>";
    echo "<table>"; //abrir la tabla
    echo "<tr><th>Nombre</th><th>Descripción</th><th>Peso</th><th>Stock</th><th>Comprar</th></tr>";
    foreach ($productos as $producto) {
        $cod = $producto['CodProd'];
        $nom = $producto['nombre'];
        $des = $producto['descripcion'];
        $peso = $producto['peso'];
        $stock = $producto['stock'];
        echo "<tr><td>$nom</td><td>$des</td><td>$peso</td><td>$stock</td>
			<td><form action = 'anadir.php' method = 'POST'>
			<input name = 'unidades' type='number' min = '1' value = '1'>
			<input type = 'submit' value='Comprar'><input name = 'cod' type='hidden' value = '$cod'>
			</form></td></tr>";
    }
    echo "</table>"
    ?>
</body>

</html>