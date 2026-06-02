<?php

echo "Declarar uma função é muito simples e pode trazer diversos benefícios, como agilização na hora de ler e entender o código, realizar uma manutenção, e deixar o programa um pouco mais rápido (algo que já foi citado).<br><a href='exemplo.php'>Na página anterior</a>, nós pegamos e declaramos uma função com um parâmetro (veremos esse termo mais tarde). Afinal de tudo, o que é declarar uma função? <br>Bom, do mesmo jeito que nós declaramos uma variável: criamos uma instância que pode ser utilizado mais tarde. A diferença principal entre este e a variável, é que a variável muda o seu valor, a função define um determinado bloco de código que será repetido todas as vezes em que for chamado.<br>Para declarar uma função precisamos escrever: <br><br><code>function nome_da_funcao(//coloque parâmetro se for preciso){<br>//escreva algo que queira que a função faça, como um echo ou uma soma ou coisas do tipo...<br>}</code><br><br>Ficar só falando é fácil, vamos criar uma função que irá somar os valores que a gente vai definir para a variável 'x' e 'y'. <br>Neste caso: <br>x = 6 <br>y = 9<br><br>";

$x = 6;
$y = 9;
function soma($x, $y){
    return $x +  $y;
}

echo "Agora, imprimindo o resultado de: <br>6 + 9 = ". soma($x, $y);
echo "<br><br>Sei que pode parecer tosco isso, mas é super necessário saber como declarar uma variável simples, e sempre, como em qualquer outra área na vida, vamos começar no básico.";