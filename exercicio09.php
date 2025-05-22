<?php
$salarios = [1500,2500,1800,3000];
$soma = 0;

foreach ($salarios as $salario) {
    $soma += $salario;
}

echo "Soma dos salários: $soma\n";
?>