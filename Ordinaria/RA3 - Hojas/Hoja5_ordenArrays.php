<?php
$array = array(
    'k3' => 'JUAN',
    'k5' => 'Álvaro',
    'k0' => 'Maite',
    'k2' => 'ÁLVARO',
    'k1' => 'Juan',
    'k4' => 'Martina');
//Ordenar sin mantener asociacion
sort($array); // Ordena los valores de menor a mayor
Array
(
    [0] => JUAN
    [1] => Juan
    [2] => Maite
    [3] => Martina
    [4] => Álvaro
    [5] => ÁLVARO
)

rsort($array); // Ordena los valores de mayor a menor
Array
(
    [0] => ÁLVARO
    [1] => Álvaro
    [2] => Martina
    [3] => Maite
    [4] => Juan
    [5] => JUAN
)



//Ordenar mantenendo asociacion
asort($array);  
Array
(
    [k3] => JUAN
    [k1] => Juan
    [k0] => Maite
    [k4] => Martina
    [k2] => ÁLVARO
    [k5] => Álvaro
)

arsort($array);  
Array
(
    [k2] => ÁLVARO
    [k5] => Álvaro
    [k4] => Martina
    [k0] => Maite
    [k1] => Juan
    [k3] => JUAN
)


//Ordenar por clave
ksort($array);  // Ordena el array por las claves en orden ascendente
Array
(
    [k0] => Maite
    [k1] => Juan
    [k2] => ÁLVARO
    [k3] => JUAN
    [k4] => Martina
    [k5] => Álvaro
)

krsort($array);  // Ordena el array por las claves en orden descendente
Array
(
    [k5] => Álvaro
    [k4] => Martina
    [k3] => JUAN
    [k2] => ÁLVARO
    [k1] => Juan
    [k0] => Maite
)



//Mezclar aleatoriamente manteniendo asociacion 
shuffle($array);  // Mezcla el array aleatoriamente
Array
(
    [0] => Juan
    [1] => Martina
    [2] => ÁLVARO
    [3] => Maite
    [4] => JUAN
    [5] => Álvaro
)





//Obtener dos claves aleatoriamente
$clavesAleatorias = array_rand($array, 2);
    //valores
    $valoresAleatorios = array($array[$clavesAleatorias[0]], $array[$clavesAleatorias[1]]);





// Ordena el array de manera natural, ignorando mayúsculas y minúsculas
natcasesort($array);  
$array = array_reverse($array);

Array
(
    [k5] => Álvaro
    [k2] => ÁLVARO
    [k3] => JUAN
    [k1] => Juan
    [k4] => Martina
    [k0] => Maite
)

// Ordena el array de manera natural (teniendo en cuenta los números)
natsort($array);

Array
(
    [k0] => Maite
    [k4] => Martina
    [k5] => Álvaro
    [k2] => ÁLVARO
    [k3] => JUAN
    [k1] => Juan
)
