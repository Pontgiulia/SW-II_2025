<?php

$EscolhaA = 5;
$EscolhaB = 10;
$EscolhaC = 15;

$selecionado = $EscolhaC;

switch ($selecionado) {
    case 1:
        echo "O opção escolhida foi A";
        break;
    
    case 2:
        echo "A opção escolhida foi B";
        break;
    case 3:
        echo "A opção escolhida foi C";
        break;
    
    default:
        echo "É necessário escolher uma opção para continuar";
        break;
}

?>