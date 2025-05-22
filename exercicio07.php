<?php
$numeros = [2,5,6,7,8];

$soma = 0;
$multiplicacao = 1;
$quantidade = 0;

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $soma += $numero;
        $multiplicacao *= $numero;
        $quantidade++;
    }
}

echo "Soma dos pares: $soma\n";
echo "Multiplicação dos pares: $multiplicacao\n";
echo "Quantidade de pares: $quantidade\n";
?>