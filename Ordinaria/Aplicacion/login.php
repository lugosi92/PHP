<?php
require_once 'bd.php';  // Corrigiendo la función de require_once

/* Formulario de login habitual
Si va bien, abre sesión, guarda el nombre de usuario y redirige a principal.php
Si va mal, muestra un mensaje de error */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usu = comprobar_usuario($_POST['usuario'], $_POST['clave']);
    if ($usu === FALSE) {
        $err = TRUE;
        $usuario = $_POST['usuario'];
    } else {
        session_start();
        // $usu tiene campos correo y codRes, correo
        $_SESSION['usuario'] = $usu;
        $_SESSION['carrito'] = [];
        header("Location: categorias.php"); // Redirección
        exit(); // Siempre se usa exit después de un header para evitar continuar con el script
    }
}



?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de login</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
// Mensaje de redirección si es necesario
if (isset($_GET["redirigido"])) {
    echo "<p>Haga login para continuar</p>";
}

// Si hay un error, mostramos el mensaje correspondiente
if (isset($err) && $err === TRUE) {
    echo "<p>Revise usuario y contraseña</p>";
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="usuario">Usuario</label>
    <input value="<?php if (isset($usuario)) echo $usuario; ?>" id="usuario" name="usuario" type="text" required>

    <label for="clave">Clave</label>
    <input id="clave" name="clave" type="password" required>

    <input type="submit" value="Iniciar sesión">
</form>

</body>
</html>
