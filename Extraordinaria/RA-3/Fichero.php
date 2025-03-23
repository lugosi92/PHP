<?php
// IMAGENES
// Después de procesar la subida de la imagen
    if (!isset($_FILES['imagen']) || $_FILES['imagen']['error'] !== UPLOAD_ERR_OK) {
        $errImagenes = "Es obligatorio subir una imagen válida.";
        $isValid = false;
    } else {
        // Tamaño
        $tamaño = $_FILES['imagen']['size'];
       
        if ($tamaño > 256 * 1024) { // Máximo 256 KB
            $errImagenes = "El archivo es demasiado grande. Máximo 256 KB.";
            $isValid = false;
        } else {
            // Procesar la subida de la imagen
            $temporal = $_FILES['imagen']['tmp_name'];
            $destino = "img/" . basename($_FILES['imagen']['name']);
       
            if (move_uploaded_file($temporal, $destino)) {
                echo "Subida exitosa";
                // Guardar el nombre de la imagen en la sesión
                $_SESSION['imagen'] = $destino;  // Guarda el destino de la imagen
            } else {
                $errImagenes = "Error al mover la imagen al destino.";
                $isValid = false;
            }
        }
    }
