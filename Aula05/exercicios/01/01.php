<?php

$dados = [
    "produto" => "Pôster",
    "preco" => 20,
    "quantidade" => 1000
];

$json = json_encode($dados, JSON_PRETTY_PRINT);
file_put_contents("produtos.json", $json)

?>