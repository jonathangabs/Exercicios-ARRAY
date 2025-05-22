<?php
$numeros = [2,3,5];
$soma = 0;

foreach ($numeros as $num) {
    $soma += $num * $num;
}

echo "Soma dos quadrados: $soma\n"
?>