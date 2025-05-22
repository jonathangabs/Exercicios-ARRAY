<?php
$idades = [3,11, 14, 25, 62, 8];

foreach ($idades as $idade) {
    if ($idade >= 1 && $idade <= 9) {
        echo "$idade anos: Criança\n";
    } else if ($idade >= 10 && $idade <= 12) {
        echo "$idade anos: Pré Adolescente\n";
    } else if ($idade >= 11 && $idade <= 17) {
        echo "$idade anos: Adolescente\n";
    } else if ($idade >= 18 && $idade <= 59) {
        echo "$idade anos: Adulto\n";
    } else if ($idade >= 60) {
        echo "$idade anos: Idoso\n";
    }
}
?>
