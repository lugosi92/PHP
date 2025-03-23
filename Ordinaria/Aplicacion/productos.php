<?php
/* Comprueba que el usuario haya iniciado sesión o lo redirige */
require 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de productos por categoría</title>
</head>
<body>
<?php
require 'cabecera.php';

if (!isset($_GET['categoria'])) {
    echo "<p class='error'>Categoría no especificada.</p>";
    exit;
}

$cat = cargar_categoria($_GET['categoria']);
$productos = cargar_productos_categoria($_GET['categoria']);

if ($cat === false || $productos === false) {
    echo "<p class='error'>Error al conectar con la base de datos.</p>";
    exit;
}

echo "<h1>" . htmlspecialchars($cat['nombre']) . "</h1>";
echo "<p>" . htmlspecialchars($cat['descripcion']) . "</p>";
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Descripción</th><th>Peso</th><th>Stock</th><th>Comprar</th></tr>";

foreach ($productos as $producto) {
    $cod = htmlspecialchars($producto['codProd']);
    $nom = htmlspecialchars($producto['nombre']);
    $des = htmlspecialchars($producto['descripcion']);
    $peso = htmlspecialchars($producto['peso']);
    $stock = htmlspecialchars($producto['stock']);

    echo "<tr>
            <td>$nom</td>
            <td>$des</td>
            <td>$peso kg</td>
            <td>$stock</td>
            <td>
                <form action='añadir.php' method='POST'>
                    <input name='unidades' type='number' min='1' value='1'>
                    <input type='submit' value='Comprar'>
                    <input name='cod' type='hidden' value='$cod'>
                </form>
            </td>
          </tr>";
}

echo "</table>";
?>
</body>
</html>
