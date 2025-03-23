<?php
/* Comprueba que el usuario haya abierto sesión o redirige */
require_once '../correo/enviar_correo.php'; // Corregido el require
require_once 'sesiones.php'; // Corregido el require
require_once 'bd.php';
comprobar_sesion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
</head>
<body>
<?php
require 'cabecera.php';

$resul = insertar_pedido($_SESSION['carrito'], $_SESSION['usuario']['codRes']);

if ($resul === FALSE) {
    echo "No se ha podido realizar el pedido<br>";
} else {
    $correo = $_SESSION['usuario']['correo'];
    echo "Pedido realizado correctamente<br>";
    
    // Vaciar carrito
    $compra = $_SESSION['carrito'];
    $_SESSION['carrito'] = [];

    echo "Pedido realizado con éxito. Se enviará un correo de confirmación a: $correo<br>";

    // Verifica que $pedido tenga el ID correcto antes de enviarlo
    if (isset($resul['pedido_id'])) {
        $pedido = $resul['pedido_id'];
        enviar_correos($compra, $pedido, $correo);
    } else {
        echo "Error al obtener el ID del pedido para enviar el correo.";
    }
}
?>
</body>
</html>
