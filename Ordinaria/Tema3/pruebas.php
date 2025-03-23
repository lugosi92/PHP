<?php

// CONEXION
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexión realizada con éxito<br>";

    $sql = 'SELECT nombre, clave, rol FROM usuarios';
    $usuarios = $bd->query($sql);

    // Verificar si se obtuvieron resultados
    if ($usuarios) {
        echo "Número de usuarios: " . $usuarios->rowCount() . "<br>";

        foreach ($usuarios as $row) {
            echo $row['nombre'] . "\t";
            echo $row['clave'] . "\t";
            echo $row['rol'] . "<br>";
        }
    } else {
        echo "No se encontraron usuarios.";
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}


// SENTENCIAS PREPRADAS
$preparada = $bd->prepare("select nombre from usuarios where rol = ?");
$preparada->execute( array(O));
echo "Usuarios con rol 0: $preparada->rowCount(). <br>";
foreach ($preparada as $usu) {
    print "Nombre: ". $usu['nombre']. "<br>";
}

$preparada_nombre=$bd->prepare("select nombre from usuarios where rol=:rol");
$preparada_nombre->execute(array(':rol'=> 0));
echo "Usuarios con rol 0: $preparada->rowCount(). <br>";
foreach ($preparada_nombre as $usu) {
    print "Nombre:" . $usu['nombre']. "<br>";
}


// CRUD CON PDO
try {
    // Conexión con la base de datos
    $bd = new PDO('mysql:dbname=empresa;host=127.0.0.1', 'root', '');
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // INSERTAR
    $ins = $bd->prepare("INSERT INTO usuarios(nombre, clave, rol) VALUES(?, ?, ?)");
    $resul = $ins->execute(['Alberto', '33333', 1]);

    // ACTUALIZAR
    $upd = $bd->prepare("UPDATE usuarios SET rol = ? WHERE rol = ?");
    $resul = $upd->execute([0, 1]);

    // BORRAR
    $del = $bd->prepare("DELETE FROM usuarios WHERE nombre = ?");
    $resul = $del->execute(['Luisa']);

    // COMPROBAR ERRORES
    if ($resul) {
        echo "Operación realizada correctamente.";
    } else {
        print_r($bd->errorInfo());
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


// datos conexión
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';
try {
	// conectar
    $bd = new PDO($cadena_conexion, $usuario, $clave);	
	echo "Conexión realizada con éxito<br>";	
	// insertar nuevo usario
	$ins = "insert into usuarios(nombre, clave, rol) values('Alberto', '33333', '1');";
	$resul = $bd->query($ins);	
	//comprobar errores
	if($resul) {
		echo "insert correcto <br>";
		echo "Filas insertadas: " . $resul->rowCount() . "<br>";
	}else print_r( $bd -> errorinfo());	
	// para los autoincrementos
	echo "Código de la fila insertada" . $bd->lastInsertId() . "<br>"; 
	// actualizar
	$upd = "update usuarios set rol =  0 where rol = 1";
	$resul = $bd->query($upd);	
	//comprobar errores
	if($resul){
		echo "update correcto <br>";
		echo "Filas actualizadas: " . $resul->rowCount() . "<br>";
	}else print_r( $bd -> errorinfo());	
	// borrar
	$del = "delete from usuarios where nombre = 'Luisa'";
	$resul = $bd->query($del);	
	//comprobar errores
	if($resul){
		echo "delete correcto <br>";
		echo "Filas borradas: " . $resul->rowCount() . "<br>";
	}else print_r( $bd -> errorinfo());
	
} catch (PDOException $e) {
	echo 'Error con la base de datos: ' . $e->getMessage();
} 


// TRANSACCIONES 

$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave =' ';

try {

$bd = new PDO($cadena_conexion, $usuario, $clave);
echo "Conexión realizada con éxito<br>";

$bd->beginTransaction();
$ins = "insert into usuarios (nombre, clave, rol) valúes('Fernando', '33333', '1')";

$resul = $bd->query($ins);
$resul = $bd->query($ins);

    if(!$resul){
        echo "Error: " .print_r($bd->errorinfo());
        $bd->rollback();
        echo "<br>Transacción anulada<br>";
    }else{
        $bd->commit();
    }

} catch (PDOException $e) {
    echo 'Error al conectar: ' .  $e->getMessage();
}


// XML


// Cargar el archivo XML
$datos = simplexml_load_file("empleados.xml");

if ($datos === false) {
    die("Error al leer el fichero");
}

echo "<h3>Datos completos de empleados:</h3>";
foreach ($datos as $valor) {
    print_r($valor);
    echo "<br>";
}

// Extraer las edades con XPath
$edades = $datos->xpath("//edad");
echo "<h3>Edades de empleados:</h3>";
foreach ($edades as $valor) {
    echo $valor . "<br>";
}


?>
