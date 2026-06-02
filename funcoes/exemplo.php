<?php

echo 'Função é uma funcionalidade das linguagens de programação. <br>Ela serve para reduzir o código, para não ficar tão extenso, repetitivo e difícil de se fazer uma manutenção. <br>A seguir, vamos declarar uma função com um <a href="parametros-return.php">parâmetro</a> "nome".<br><br><code>function saudacoes ($nome){<br>echo "Olá, $nome!";<br>}</code>';

function saudacoes($nome){
    echo "Olá, $nome!";
}

echo '<br><br>Após essa declaração, vamos chamar a função e colocar uma string com o valor de "Rafael".<br><code>saudades("Rafael");</code><br><br><strong>Em resumo</strong>, função é isso, mas nos aprofundaremos mais a frente.<br><br>';
saudacoes("Rafael"); 
