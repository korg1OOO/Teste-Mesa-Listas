<?php
    $numeros = array(
        array(1,3,5),
        array(7,9,11),
        array(13,15,17),
    );

    foreach ($numeros as $linhas) {
        foreach ($linhas as $numero) {
            echo $numero . ' ';
        }
        echo "\n";
    }
