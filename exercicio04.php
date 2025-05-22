<?php
$vetor = [55,20,7,22,10,1];

$maior1 = PHP_INT_MIN;
$maior2 = PHP_INT_MIN;
$pos1 = -1;
$pos2 = -1;

for ($i = 0; $i < count($vetor); $i++); {
    if ($vetor[$i] > $maior1) {
        $maior2 = $maior1;
        $pos2 = $pos1;
        $maior1 = $vetor[$i];
        $pos1 = $i;
    } elseif ($vetor[$i] > $maior2) {
        $maior2 = $vetor[i];
        $pos2 = $i;
    }
}

echo "Primeiro maior: $maior1 (posição $pos1)\n";
echo "Segundo maior: $maior2 (posição $pos2)\n";
?>