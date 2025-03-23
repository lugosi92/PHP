<?php
/* Comprueba que el usuario haya iniciado sesión o redirige */
require_once 'sesiones.php';
comprobar_sesion();

/* Verifica si se han recibido los datos correctamente */
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cod'], $_POST['unidades'])) {
    $cod = $_POST['cod'];
    $unidades = (int)$_POST['unidades'];

    /* Si existe el código en el carrito, sumamos las unidades */
    if (isset($_SESSION['carrito'][$cod])) {
        $_SESSION['carrito'][$cod] += $unidades;
    } else {
        $_SESSION['carrito'][$cod] = $unidades;
    }
}

/* Redirige al carrito */
header("Location: carrito.php");
exit;
