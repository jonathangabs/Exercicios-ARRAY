<?php
$vetor = [55,20,7,22,10,1];

$maior = $vetor[0];
$posicao = 0;

for ($i = 1; $i < count($vetor); $i++) {
    if ($vetor[$i] > $maior) {
        $maior = $vetor[$i];
        $posicao = $i;
    }
}

echo "Maior posição: $maior\n";
echo "Posição no vetor: $posicao\n";
?>