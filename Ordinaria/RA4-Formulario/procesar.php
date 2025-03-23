<?php
// Verificamos si la solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verificamos si al menos se han seleccionado tres cervezas
    if (isset($_POST['cerveza']) && count($_POST['cerveza']) >= 3) {
        $cervezas = $_POST['cerveza'];

        // Redirigimos a principal.php y pasamos las cervezas seleccionadas
        session_start();
        $_SESSION['cervezas'] = $cervezas;
        header('Location: principal.php');
        exit;
    } else {
        // Si no se seleccionaron al menos tres cervezas, mostramos un mensaje de error
        $err = true;
        header('Location: formularioenuno.php');
        exit;
    }
}
?>
