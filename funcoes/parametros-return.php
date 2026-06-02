<?php

echo 'Parâmetros são inputs que a função já espera. Apenas é importante lembrar que é o programador que configura esses inputs, é ele que decide quantos e quais inputs devem estar na função através dos parâmetros. Esses inputs podem receber valores como strings, inteiros, reais, arrays, entre outros. <br>O return da função funciona como "transformar a função em uma variável". Vamos ao exemplo para ser mais fácil de entender. <br><br>Vai ser declarado uma função que receba dois números, some e retorne o valor.<br><code>function soma($x, $y){<br>return $x + $y; <br>}</code> <br><br>Vamos declarar a variável x como 10 e a variável y como 20. O resultado final deve ser 30 (a soma de 10 + 20).';
$x = 10;
$y = 20;
function soma($x, $y){
return $x + $y;
}
echo 'Agora vai dar para entender o que eu estava falando. <br>Quando se chama apenas a função, não aparece nada, é como se ele tivesse realizado todo o código de dentro da função [soma($x, $y)]e tivesse se tornado a "variável" (o que é retornado, no caso, virou 30). Quando se declara uma variável e não damos "echo", ela está ali, ela existe, porém, só quem programa vê. A mesma coisa está acontecendo com a função quando se usa o return. A função meio que se "tornou" no número 30. Só quando eu der "echo" que vai aparecer escrito 30 na tela [echo soma($x, $y)]:<br><br>';

soma($x, $y); //Não apareceu nada
echo soma($x, $y); //Apareceu 30 na tela

echo "<br><br>Só para deixar claro que eu usei as duas formas, como pode ver a seguir:<br><img src='imagemdocodigo.png' alt='Imagem do código (prova)'><br><br>Viu só? A função 'virou' uma variável que precisava ser printada na tela se não aparecia.";