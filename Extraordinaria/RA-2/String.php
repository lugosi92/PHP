<?php
$str = "Hola Mundo! Bienvenido a PHP.";

// 1. addslashes()
echo "addslashes: " . addslashes($str) . "\n";
// addslashes: Hola Mundo! Bienvenido a PHP.

// 2. quotemeta()
echo "quotemeta: " . quotemeta($str) . "\n";
// quotemeta: Hola Mundo\! Bienvenido a PHP\.

// 3. trim()
echo "trim: " . trim("  Hola PHP  ") . "\n";
// trim: Hola PHP

// 4. chop()
echo "chop: " . chop("Hola PHP   ") . "\n";
// chop: Hola PHP

// 5. chr()
echo "chr(65): " . chr(65) . "\n";
// chr(65): A

// 6. strchr()
echo "strchr: " . strchr($str, "M") . "\n";
// strchr: Mundo! Bienvenido a PHP.

// 7. str_pad()
echo "str_pad: '" . str_pad("PHP", 10, "-") . "'\n";
// str_pad: 'PHP-------'

// 8. strrchr()
echo "strrchr: " . strrchr($str, "o") . "\n";
// strrchr: o! Bienvenido a PHP.

// 9. ucwords()
echo "ucwords: " . ucwords("hola php mundo") . "\n";
// ucwords: Hola Php Mundo

// 10. substr()
echo "substr: " . substr($str, 5, 10) . "\n";
// substr: Mundo! Bie

// 11. strstr()
echo "strstr: " . strstr($str, "Mundo") . "\n";
// strstr: Mundo! Bienvenido a PHP.

// 12. stristr()
echo "stristr: " . stristr($str, "mundo") . "\n";
// stristr: Mundo! Bienvenido a PHP.

// 13. str_repeat()
echo "str_repeat: " . str_repeat("PHP ", 3) . "\n";
// str_repeat: PHP PHP PHP 

// 14. strrev()
echo "strrev: " . strrev($str) . "\n";
// strrev: .PHP a odninevnieB !odnuM aloH

// 15. strtr()
echo "strtr: " . strtr("abcde", "a", "1") . "\n";
// strtr: 1bcde

// 16. sprintf()
echo "sprintf: " . sprintf("Número: %d, Texto: %s", 42, "Hola") . "\n";
// sprintf: Número: 42, Texto: Hola
?>
