<?php
    /* for ($i=1; $i <=10 ; $i++) { 
        echo $i."<br>";
    }
 */
   /*  $a = 1;
    while ($a <= 10) {
        echo $a."<br>";
        $a++;
    } */

    $vetor = ['Giulia', 'Aline', 'Yellow'];
    $qtde = count($vetor);
    
    echo $qtde;
    echo "<br>";
    // echo $vetor[1];

    for ($i=0; $i < $qtde ; $i++) { 
        echo $vetor[$i];
        echo "<br>";
    }

?>
