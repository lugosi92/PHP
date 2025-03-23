<?php
/* Comprueba que el usuario ha iniciado sesión */
require 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de categorías</title>
</head>
<body>
    <?php require 'cabecera.php'; ?>

    <h1>Lista de categorías</h1> <!-- Corregido <hl> por <h1> -->

    <!-- Lista de vínculos con la forma productos.php?categoria=1 -->
    <?php
    $categorias = cargar_categorias();
    if ($categorias === FALSE) {
        echo "<p class='error'>Error al conectar con la base de datos</p>";
    } else {
        echo "<ul>"; // Abrir la lista
        foreach ($categorias as $cat) {
            /* $cat['nombre'] y $cat['codCat'] */
            $url = "productos.php?categoria=" . $cat['codCat'];
            echo "<li><a href='$url'>" . htmlspecialchars($cat['nombre']) . "</a></li>";
        }
        echo "</ul>"; // Cerrar la lista
    }
    ?>
</body>
</html>
