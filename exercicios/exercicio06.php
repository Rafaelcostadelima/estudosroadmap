<?php

$celular = [
    "nome" => "Xiaomi",
    "categoria" => "Eletrônicos"
];

$livro = [
    "nome" => "A Destruição das Florestas",
    "categoria" => "Livros"
];

$camiseta = [
    "nome" => "Camiseta preta",
    "categoria" => "Moda"
];

$produtos = [$celular, $livro, $camiseta];

foreach($produtos as $produto){
    $dias_uteis = match($produto['categoria']){
        "Eletrônicos" => "1 dia útil",
        "Livros" => "3 dias úteis",
        "Moda" => "5 dias úteis",
        default => "7 dias úteis",
    };
    echo "A entrega será feita dentro de ". $dias_uteis . "<br>";
}