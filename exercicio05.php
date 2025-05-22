<?php
$vetor = [55,22,7,22,10,1];

$maior = $vetor[0];
$menor = $vetor[0];

for ($i = 1; $i < count($vetor); $i++) {
    if ($vetor[$i] > $maior) {
        $maior = $vetor[$i];
    }
    if ($vetor[$i] < $menor) {
        $menor = $vetor[$i];
    }
}

echo "Maior número: $maior\n";
echo "Menor número: $menor\n";
?>