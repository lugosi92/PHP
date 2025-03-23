<?php
// Iniciar la sesión
session_start();

// Verificar si se ha enviado el formulario con POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre'])) {
    // Guardar el nombre en la sesión
    $_SESSION['nombre'] = htmlspecialchars($_POST['nombre']);
}

// Mostrar el nombre almacenado en la sesión
if (isset($_SESSION['nombre'])) {
    echo "<h2>Nombre almacenado en la sesión:</h2>";
    echo "<p>" . $_SESSION['nombre'] . "</p>";
} else {
    echo "<p>No se ha enviado ningún nombre.</p>";
}



?>
