<?php

echo 'Isso, no mundo do PHP, significa manter uma variável com determinado valor de parâmetro caso, quando chamado a função, nada é adicionado aos parâmetros. Vamos à semântica do código: <br><br><code>function saudar($nome = "Visitante"){<br>echo "Olá, $nome!";<br>}</code><br><brS>';

function saudar($nome = "Visitante"){
    echo "Olá, $nome!";
}

echo 'Agora, vamos ver na prática como que isso funciona. <br>Em uma chamada de função, vou escrever nada nos parâmetros e na outra eu vou colocar "Rafael".<br><br>';
saudar();
echo "<br>";
saudar("Rafael");