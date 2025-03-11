<?php
    function fatorando($num){
        if($num < 0){
            echo "Número inválido, escolhe outro";
        };

    $fatorando = 1;
    for ($b = 2; $b <= $num; $b++) {
        $fatorial *= $b;
    }

    echo "O fatorial de $num é: $fatorando";
    }
    fatorial(30);
?>