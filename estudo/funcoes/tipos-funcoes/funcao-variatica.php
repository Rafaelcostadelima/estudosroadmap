<?php

echo "A função variática é um pouco diferente das demais e possui uma semântica muito simples e muito útil quando se precisa de flexibilidade nas funções. Vamos supor que o site peça para que o usuário digitar quantos fatores ele quiser para somar. Neste cenário, muitos criariam uma lista, a nomearia e depois ia pegando os números que o usuário botou lá e jogaria lá, e depois, lá na função, eles colocariam o parâmetro para a lista. <br>Eles não estão errados por pensar assim, até porque o código vai continuar funcionando corretamente, porém há um outro jeito mais viável e mais rápido de se fazer isso: As funções variáticas. <strong>Mas por que ele é melhor?</strong> Bom, você deveria colocar os colchetes para indicar que é um array '[]'. Se tiver preguiça ou só querer ser mais prático, utilize as funções variáticas que vão te ajudar demais. <br>Vamos executar o seguinte código: <br><img src='codigo-variatica.png' alt='Imagem de um código em PHP'><br><br>";

function somaVariatica(...$numeros){
    return array_sum($numeros) . "<br>";
}

echo somaVariatica(1, 2, 3, 4);
echo somaVariatica(1, 2);
echo somaVariatica(20, 20, 20, 20, 20);

echo "<br><br>Como deu para perceber, a maior diferença é que esse tipo de função usa os reticências (...) para poder indicar que pode nenhum, 1, 2, 5, 100, 1000 valores e não irá dar problema.";