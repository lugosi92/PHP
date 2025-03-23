<?php
// Iniciar la sesión
session_start();

// Verificar si se ha enviado el formulario con GET
if (isset($_GET['nombre'])) {
    // Guardar el nombre en la sesión
    $_SESSION['nombre'] = htmlspecialchars($_GET['nombre']);
}

// Mostrar el nombre almacenado en la sesión
if (isset($_SESSION['nombre'])) {
    echo "<h2>Nombre almacenado en la sesión:</h2>";
    echo "<p>" . $_SESSION['nombre'] . "</p>";
} else {
    echo "<p>No se ha enviado ningún nombre.</p>";
}
?>


