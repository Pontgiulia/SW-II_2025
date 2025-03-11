<?php
    function aleatorio(){
        $vetor = [];
        for ($v=0; $v <10; $v++){
            $vetor[$v] = rand();
        }

        return $vetor;
    }

    $recebeVetor = aleatorio();

    print_r($recebeVetor)
?>