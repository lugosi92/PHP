<?php
session_start();

// Inicializacion validazion
$titulo = $texto = $categoria = $imagenes = "";

// Inicializacion errores
$errTitulo = $errTexto = $errCategoria = $errImagenes = "";
$isValid = true;


if($_SERVER["REQUEST_METHOD"] == "POST"){

// REPINTADO Y ERRORES
    // TITULO
    
    if(empty($_POST['titulo'])){
        $errTitulo = "Debes insertar un titulo";
        $isValid = false;
    }else{
        $titulo = $_POST['titulo'];
    }

    // Texto
    if(empty($_POST['texto'])){
        $errTexto = "Debes insertar un texto";
        $isValid = false;
    }else{
        $texto = $_POST['texto'];
    }

    // CATEGORIA
    if(empty($_POST['categoria'])){
        $errCategoria = "Introduzca una categoria";
        $isValid = false;
    }else{
        $categoria = $_POST['categoria'];
    }


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

// Redirecciona solo si todo es válido
if ($isValid) {
    $_SESSION['titulo'] = $titulo;
    $_SESSION['texto'] = $texto;
    $_SESSION['categoria'] = $categoria;
    $_SESSION['imagen'] = $imagenes;
    header("Location: mostrar.php");
    exit();
}


}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>

    <h1>Subida de ficheros</h1>

    <h2>Insertar nueva noticia</h2>
    <style>
        .form-container {
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
        }

        .form-group {
            margin-bottom: 15px;
        }

     

        input[type="text"],textarea,select {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            height: 80px;
        }

        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"  enctype="multipart/form-data">

            <!-- TITULO -->
            <div class="form-group">
                <label for="titulo">Título: *</label>
                <!-- REPINTADO TITULO -->
                <input type="text" id="titulo" name="titulo"
                value = "<?php if(isset($titulo)) echo $titulo;?>">
                <!-- ERROR -->
                <span class = "error"> <?php echo $errTitulo ?> </span>
            </div>

            <!-- TEXTO -->
            <div class="form-group">
                <label for="texto">Texto: *</label>
                <!-- REPINTADO -->
                <textarea id="texto" name="texto"
                ><?php if(isset($texto)) echo $texto;?></textarea>
                <!-- ERROR -->
                <span class = "error"><?php echo $errTexto ?></span>
            </div>

            <!-- CATEGORIA -->
            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <select id="categoria" name="categoria">
                    <option></option>
                    <option value="promociones" <?php if($categoria == "promociones") echo 'selected'; ?>>promociones</option>
                    <option value="locales" <?php if($categoria === "locales") echo 'selected'; ?>>locales comerciales</option>
                    <option value="construccion" <?php if($categoria === "construccion") echo 'selected'; ?>>nueva construcción</option>
                    <option value="pisos" <?php if($categoria === "pisos") echo 'selected'; ?>>pisos</option>
                    <option value="naves" <?php if($categoria === "naves") echo 'selected'; ?>>naves industriales</option>
                    <option value="terrenos" <?php if($categoria === "terrenos") echo 'selected'; ?>>terrenos</option>
                </select>
                <!-- ERRORES -->
                <span class = "error"> <?php echo $errCategoria; ?> </span>
            </div>

            <!-- IMAGEN -->
            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" name="imagen">

                <!-- ERRORES -->
                 <span class = "error"> <?php echo $errImagenes; ?> </span>
            </div>

            <!-- ENVIAR -->
            <div class="form-group">
                <button type="submit">Insertar noticia</button>
            </div>
        </form>
    </div>
</body>
</html>
