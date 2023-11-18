<?php
function contagemRemocao(&$string, &$caractere) {
    $count = 0;
    $string = str_replace($caractere, '', $string, $count);
    return $count;
}

$texto = "eu sou enzo e sou programador";
$char = 'e';

$ocorrencias = contagemRemocao($texto, $char);

echo "Texto modificado: $texto\n";
echo "Número de vezes que '$char' foi removido: $ocorrencias\n";
