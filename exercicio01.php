<?php
$vetor = [55,20,7,22,10,1];

echo "Vetor original: \n";
foreach ($vetor as $num) {
    echo $num . " ";
}

echo "\nVetor invertido: \n";
for ($i = count($vetor) - 1; $i >= 0; $i--) {
    echo $vetor[$i] . " ";
}
?>