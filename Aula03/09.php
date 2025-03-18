<?php
    function fatorando($num){
        if($num < 0){
            echo "Número inválido, escolhe outro";
        };

    $fatorando = 1;
    for ($i = 2; $i <= $num; $i++) {
        $fatorando *= $i;
    }

    echo "O fatorial de $num é: $fatorando";
    }
    fatorando(11);
?>