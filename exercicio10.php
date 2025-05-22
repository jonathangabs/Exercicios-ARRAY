<?php
$temperaturas = [22.5, 24.0, 20.8, 23.1];
$soma = 0;

foreach ($temperaturas as $temp) {
    $soma += $temp;
}

$media = $soma / count($temperaturas);
echo "Média das temperaturas: $media\n";
?>