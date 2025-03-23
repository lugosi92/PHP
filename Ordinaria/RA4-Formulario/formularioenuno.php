<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Select Multiple</title>
</head>
<body>

<?php 
// Verificamos si hay un error en la selección
if (isset($err)) {
    echo "<p style='color: red;'>Revise su selección. Debe seleccionar al menos tres cervezas.</p>";
}
?>

<!-- Formulario para seleccionar cervezas -->
<form action="procesar.php" method="POST">
    <label for="cerveza">Cervezas:</label><br>
    <select multiple name="cerveza[]" id="cerveza" required>
        <option value="SanMiguel" <?php if(in_array("SanMiguel"),$_POST['cerveza']) ? "selected" : "" ?>>San Miguel</option>
        <option value="Mahou" <?php if(in_array("Mahou"),$_POST['cerveza']) ? "selected" : "" ?>>Mahou</option>
        <option value="Heineken" <?php if(in_array("Heineken"),$_POST['cerveza']) ? "selected" : "" ?>>Heineken</option>
        <option value="Carlsberg" <?php if(in_array("Carlsberg"),$_POST['cerveza']) ? "selected" : "" ?>>Carlsberg</option>
        <option value="Aguila" <?php if(in_array("Aguila"),$_POST['cerveza']) ? "selected" : "" ?>>Aguila</option>
    </select><br><br>

    <input type="submit" value="Enviar">
</form>

</body>
</html>
