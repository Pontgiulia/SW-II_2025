<?php

$alunos = [
    "Aline" => 8.5,
    "Lucas" => 7.2,
    "Giulia" => 9.1,
    "Camila" => 8.8,
    "Enzo" => 7.9
];

$soma = 0;
$maiorNota = -1;
$AlunoTop = "";

foreach ($alunos as $nome => $nota) {
    $soma += $nota;

    if ($nota > $maiorNota) {
        $maiorNota = $nota;
        $AlunoTop = $nome;
    }
}

$media = $soma / count($alunos);

echo "A média dos alunos é: " . number_format($media, 2) . "\n";
echo "O aluno com a maior nota foi: $AlunoTop, sua nota: $maiorNota\n";


?>