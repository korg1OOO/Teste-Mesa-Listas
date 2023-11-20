<?php
$matriz = [];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "Digite o valor para a posição [$i][$j]: ";
        $matriz[$i][$j] = intval(readline());
    }
}

echo "Números pares e suas posições:\n";

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($matriz[$i][$j] % 2 == 0) {
            echo "Número par encontrado: {$matriz[$i][$j]} (Posição: [$i][$j])\n";
        }
    }
}

?>
