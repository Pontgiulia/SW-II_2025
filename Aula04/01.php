<?php
$Cidadão = [
    "nome" => "Mariana",
    "idade" => 21,
    "cidade" => "Mauá"
];

$Cidadão["profissao"] = "Contadora";

$Colegas = ["Mônica", "Vitor", "Mateus"];

$infos = array_merge($Cidadão, ["amigos" => $Colegas]);

print_r($infos);

?>