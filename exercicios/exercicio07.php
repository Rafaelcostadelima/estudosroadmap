<?php
//Declarando a função anônima de aplicar a taxa
$aplicarTaxa = fn($soma) => $soma * 1.1;
function calcularTotalCarrinho($listaDePrecos, $aplicarTaxa){
    $soma = 0;
    foreach($listaDePrecos as $preco){
        $soma += $preco;
    }
    return $aplicarTaxa($soma);
}

echo calcularTotalCarrinho([50, 40, 10], $aplicarTaxa);