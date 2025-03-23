<?php 
// 1 false  true    false   true    true    false
// 2 flase true true
// 3 101.98 0.196 20 
// 4.

$num = rand(1,100);

if($num <= 50){
    echo "-"
}else{
    echo "2"
}

echo ($num <=50) ? "-" : "2";


$var= "prueba"
if (isset($var)) echo "true";
if (empty($var)) echo "false";
unset($var);
if (isset($var)) echo "false";
if (empty($var)) echo "true";
$var=”foo”;
if ((bool) $var) echo "1";
if (!empty($var)) echo "true";

// contenido de $var isset($var) empty($var) (bool)$var
// null    ture false 0
// 0   true true 0
// true    true flase 1
// false true true 0
// “0” ture true 0
// “” flase true 0
// “foo” true flase 1
// unset($var) flase true 0 

// 7. 8 9 10 

// 8c 9d 10c