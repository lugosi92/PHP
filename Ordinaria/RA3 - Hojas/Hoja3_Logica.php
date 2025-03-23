<?php
// Ejercicio 1
$a = 1;
$b = 2;
$c = 3;

($a > $b && $a > $c) ? "a es mayor" : (($b > $a && $b > $c) ? "c es amyor" : "b es mayor");

// Ejercicio 2
$cad1 = "Hola";
$cad2 = "Holaa";
$cad3 = "Holaaa";

echo (strlen($cad1) > strlen($cad2) && strlen($cad1) > strlen($cad3)) ? "cad1 es mayor" : 
     (strlen($cad2) > strlen($cad3) && strlen($cad2) > strlen($cad1)) ? "cad9 es mayor" : 
     "cadena 3 es amyor";

// Ejercicio 3

$random = rand(1,100);

echo ($rnadom  %  2 == 0) ? "es par" : "es imapr";

// 4
switch (date("D")) {
    case "Mon":
        echo "Lunes";
        break;
    case "Tue":
        echo "Martes";
        break;
    case "Wed":
        echo "Miércoles";
        break;
    case "Thu":
        echo "Jueves";
        break;
    case "Fri":
        echo "Viernes";
        break;
    case "Sat":
        echo "Sábado";
        break;
    case "Sun":
        echo "Domingo";
        break;
    default:
        echo "Día no válido";
        break;
}

// Ejercicio 5

if( strlen($cad1) > strlen($cad2) && strlen($cad1) > strlen($cad3)){
    if(strlen($cad2) > strlen($cad3)){
        echo $cad1 . $cad2 . $cad3;
    }else{
        echo $cad1 . $cad3 . $cad2;
    }
}else if(strlen($cad2) > strlen($cad3) && strlen($cad2) > strlen($cad1)){
    if(strlen($cad1) > strlen($cad3)){
        echo $cad2 . $cad1 . $cad3;
    }else{
        echo $cad2 . $cad3 . $cad1;
    }
}else {
    if(strlen($cad1) > strlen($cad2)){
        echo $cad3 . $cad1 . $cad2;
    }else{
        echo $cad3 . $cad2 . $cad1;
    }
}

// Ejercicio6

for($i = 0; $i <=99 ; $i+=2){
    if($i == 5 || $i %  5 == 0){
        echo $i;
    }
}

// Ejercicio 7

$numero = 5;
$i = 1;
$factorial = 1;

while ($numero >= $i){
    $factorial = $num * $i;
    $i++;
}

do{
    $factorial = $num * $i
    $i++;
}while($numero > $i);

// Ejercicio 8

$personas = array(
    "12345678A" => "Juan Pérez",
    "23456789B" => "Ana Gómez",
    "34567890C" => "Carlos López",
    "45678901D" => "Marta Sánchez",
    "56789012E" => "Luis Rodríguez"
);

print_r($personas);


