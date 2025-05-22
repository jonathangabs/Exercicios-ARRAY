<?php
$vetor = [55,20,7,10,1];

$menor = $vetor[0];
$posicao = 0;

for ($i = 1; $i < count($vetor); $i++) {
    if ($vetor[$i] < $menor) {
        $menor = $vetor[$i];
        $posicao = $i;
    }
}

echo "Menor número: $menor\n";
echo "Posição no vetor: $posicao\n";
?>