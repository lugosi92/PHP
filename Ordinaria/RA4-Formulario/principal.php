<?php
session_start();

// Verificamos si las cervezas están en la sesión
if (isset($_SESSION['cervezas'])) {
    echo "<h2>Las cervezas seleccionadas son:</h2>";
    foreach ($_SESSION['cervezas'] as $cerveza) {
        echo "<p>$cerveza</p>";
    }
} else {
    echo "<p>No se seleccionaron cervezas.</p>";
}
?>
