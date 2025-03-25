<?php

$conteudo = file_get_contents("produtos.json");
$dados = json_decode($conteudo, true);

$new_produto = [
    "produto" => "Copo",
    "preco" => 30,
    "quantidade"=> 500
];

$dados[] = $new_produto;

file_put_contents("produtos.json", json_encode($dados, JSON_PRETTY_PRINT));

echo "deu certo";

?>