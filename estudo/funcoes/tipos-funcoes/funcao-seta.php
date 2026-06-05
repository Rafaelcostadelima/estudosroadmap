<?php

echo "A semântica da função de seta (arrow) é muito diferente do que já estamos acostumados com funções. Ela é, basicamente, um atalho para escrever funções anônimas. Elas servem para deixar o código mais curto e mais rápido de escrever. O seu maior diferencial é que ele facilita o uso de variáveis que estão fora da função. <br>Utilizando a função de seta, não é necessário o uso das semânticas 'use', nem as chaves '{}' e nem o 'return'.<br>";

// <--- COMO ERA ESCRITO ANTES DA INVENÇÃO DAS FUNÇÕES DE SETAS --->
$divisor = 4;
//Olhe a função anônima aqui
$dividir = function($numero) use ($divisor){
    return $numero / $divisor;
};
//Impressão do resultado da divisão entre 16 e 4, que dá 4
echo $dividir(16) . "<br>";

// <--- COMO É ESCRITO AGORA APÓS A INVENÇÃO DA FUNÇÃO DE SETA --->
$divisor = 4;
//Jeito novo (função com seta)
$dividir = fn($numero) => $numero / $divisor;
//Imprimindo o resultado...
echo $dividir(16) . "<br>";

echo "<br><img src='imagem-codigo.png' alt='Imagem do código'><br><br><strong>Só uma OBS.:</strong> Este código está na mesma ordem do que aparece na tela, então, o primeiro número 4, é com o código da função anônima (a da imagem), e o segundo é com a função de seta (também presente na imagem).<br><br>Agora uma brevíssima explicação sobre esse tipo de função: 'fn' já indica que é uma função, logo, ele já 'chama' os parênteses para os parâmetros. Após isso, é só adicionar a '=>' (o que dá nome a esse tipo de função: a seta) e depois o desenvolvedor coloca o que esta função deve fazer e retornar o valor (que na foto é pegar o número [colocado entre parênteses na hora de chamar essa função anônima] e dividir pelo divisor que é igual a 4).";