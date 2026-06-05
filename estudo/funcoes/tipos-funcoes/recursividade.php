<?php

echo "Recursividade é quando você chama a função dentro dela mesma. É mais utilizada quando se quer construir uma estrutura de árvore em 'laço de repetição'. Este tipo de função funciona como um laço de repetição, porém, funciona melhor para estruturas que nem árvores, como uma resposta de um comentário, várias seções dentro de um dropdown em uma loja virtual, navegar entre pastas e subpastas para procurar algum arquivo, entre outros. <br> Vamos ao exemplo: <br><br><img src='codigo-recursividade.png' alt='Imagem do código'><br><br>";

//Vamos criar uma função que faça uma contagem regressiva
function contagem($numero){
    echo $numero . "<br>";
    //Aqui vamos entrar com a recursividade chamando a própria função pra dentro dela mesma
    if ($numero > 0){
        contagem($numero - 1);
    }
}

//Chamando a função
contagem(5);

echo "<br>Pode observar que o código em sim não é difícil em si, mas pode ficar muito confuso quando olha pra ele por muito tempo, o que é normal. Mas com apenas um simples empurrãozinho de como entender a recursividade, já pegará o esquema de como que funciona.";