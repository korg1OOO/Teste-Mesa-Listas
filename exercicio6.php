<?php

$matriz = [
    [1, 3, 5],
    [7, 9, 11],
    [13, 15, 17]
];

$soma = 0;

foreach ($matriz as $linha) {
    foreach ($linha as $elemento) {
        $soma += $elemento;
    }
}

echo "A soma dos elementos da matriz é: " . $soma;

?>
