<?php

// 1

$alumno = array(
    "nombre" => "José",
    "apellidos" => "Martínez Roca",
    "telefono" => "96 361 66 54",
    "direccion" => "C/ Arco del triunfo 13",
    "dni" => "22 111 055",
    "num_matricula" => "6666",
    "facultad" => "Facultad Informática",
    "curso" => "5"
);
// Obtener los valores y los índices
$valores = array_values($alumno);
$indices = array_keys($alumno);

// Mostrar los arrays
print_r($valores);
print_r($indices);

// 2

$colores = array(

    array(
        "color" => "fuerte",
        "rojo" => "FF0000",
        "vrerde" => "00FF00",
        "azul" => "0000FF"
        
        "color" => "suave",
    ),
    array(
       "color" => "suave",
       "rosa" => "FF0000",
        "aarillo" => "00FF00",
        "malva" => "0000FF"
    )
    );

    
$miFecha = array(
array(
array("13 de enero de 2015", "11 de febrero de 2018"),
array("13 de enero de 2020", "11 de febrero de 2015"),
),
array(
array("3 de agosto de 2017", "1 de octubre de 2016"),
array("3 de agosto de 2013", "1 de octubre de 2019"),
),
array(
array("10 de junio de 2020", "11 de marzo de 2019"),
),
array(
array("22 de marzo de 2020", "28 de mayo de 2019"),
array("22 de marzo de 2019", "28 de mayo de 2018"),
array("22 de marzo de 2018", "28 de mayo de 2017"),
array("22 de marzo de 2017", "28 de mayo de 2016"),
)
);

