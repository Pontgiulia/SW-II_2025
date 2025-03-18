<?php 

$numeros = [5, 6, 10, 12, 15, 18, 20, 24, 25, 30, 35, 36, 40, 42, 45, 48, 50, 54, 60];

$pares = 0;
$impares = 0;

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "A quantidade de números pares é: $pares\n";
echo "A quantidade de números ímpares é: $impares\n";

?>