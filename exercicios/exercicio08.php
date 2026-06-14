<?php

$categoriaPrincipal = [
    "nome" => "Moda",
    "quantidade" => 10,
    "subcategoria" => [
        "nome" => "Masculino",
        "quantidade" => 5,
        "subcategoria" => [
            "nome" => "Calçados",
            "quantidade" => 2,
            "subcategoria" => null // Fim da árvore
        ]
    ]
];

function somarProdutos($categoria){
    $somaProdutos = 0;
    $somaProdutos = $somaProdutos + $categoria['quantidade'];
    if ($categoria['subcategoria'] != null){
        $somaProdutos = $somaProdutos + somarProdutos($categoria['subcategoria']);
    }
    return $somaProdutos;
}

echo somarProdutos($categoriaPrincipal);