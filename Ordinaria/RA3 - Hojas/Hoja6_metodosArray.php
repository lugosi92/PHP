<?php

$array = array(
    'k0' => 'Juan',
    'k1' => 'Álvaro',
    'k2' => 'Maite',
    'k3' => 'Álvaro',
    'k4' => 'Juan',
    'k5' => 'Martina');


// Buscar la primera clave donde está "Juan"
$claveJuan = array_search("Juan", $array);


// Obtener todas las claves donde está "Álvaro"
$clavesAlvaro = array_keys($array, "Álvaro");

// 2
// En el array
if (in_array("Juan", $array)) {
    echo "El valor 'Juan' está en el array.";
} else {
    echo "El valor 'Juan' no está en el array.";
}

// 3
$supermercado = array(
    "Electrodomesticos" => array("Televisor", "Heladera"),
    "alimentos" => array("Carne", "Leche", "Verduras")
);

$claves = array_keys($supermercado);

print_r($claves);


// 4.

$alumno = array(
    "nombre" => "José",
    "apellidos" => "Martínez Roca",
    "telefono" => "96 361 66 54",
    "direccion" => "C/ Arco del triunfo 13",
    "dni" => "22 111 055",
    "num_matricula" => null,
    "facultad" => "Facultad Informática",
    "curso" => "5"
);

// Recorrerlo del final al principio utilizando end(), while, y prev() 
// visualizar su contenido con current().

end($alumno); // Coloca el puntero al final del array
while ($key = key($alumno)) {
    echo "Clave: $key, Valor: " . current($alumno) . "\n"; //current($alumno) obtiene el valor actual en el puntero, y key($alumno) obtiene la clave actual.
    prev($alumno); // Mueve el puntero hacia atrás
}

// A continuación recorrerlo del principio al final utilizando reset(),while, y next() y 
// visualizar sus claves con key()
reset($alumno); // Coloca el puntero al principio del array
while ($key = key($alumno)) {
    echo "Clave: $key, Valor: " . current($alumno) . "\n";
    next($alumno); // Mueve el puntero hacia adelante
}


// 5

$registros = array(
    array(
        'id' => 2135,
        'nombre' => 'Juan',
        'apellido' => 'Díaz',
    ),
    array(
        'id' => 3245,
        'nombre' => 'Sara',
        'apellido' => 'Sanz',
    ),
    array(
        'id' => 5342,
        'nombre' => 'Jose',
        'apellido' => 'Rodríguez',
    ),
    array(
        'id' => 5623,
        'nombre' => 'Pedro',
        'apellido' => 'Domínguez',
    )
);

$apellidos = array_column($registros, 'apellido');
print_r($apellidos);


// 6
// Crear el array de la pila
$pila = array('12345678A', '23456789B', '34567890C', '45678901D');

// Apilar un nuevo elemento (añadir un DNI al final de la pila)
array_push($pila, '56789012E');
echo "Pila después de apilar un DNI: \n";
print_r($pila);

// Desapilar un elemento (eliminar el último DNI de la pila)
$desapilado = array_pop($pila);
echo "Pila después de desapilar un DNI: \n";
print_r($pila);

// Obtener el primer elemento de la pila sin eliminarlo (mover el primer elemento al frente)
$primerElemento = array_shift($pila);
echo "Primer elemento de la pila (sin eliminar): $primerElemento\n";

// Mostrar la pila final
echo "Pila final: \n";
print_r($pila);


// 7 

$entrada=array("a","b","c","d","e");

// a)
$salida = array_slice($entrada, 2); 
// Resultado: array("c", "d", "e")

// b)
$salida = array_slice($entrada, -2, 1); 
// Resultado: array("d")

// c)
$salida = array_slice($entrada, 0, 3); 
// Resultado: array("a", "b", "c")
