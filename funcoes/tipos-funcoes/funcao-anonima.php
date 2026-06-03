<?php

echo 'As funções anônimas são aquelas funções sem nome em si. Por exemplo, já fizemos a função "saudar()" e "soma($x, $y)". Nesse tipo de função citada, sempre carrega o nome da variável. Olhe a principal diferença entre esses dois tipos de função: <br><br><code>$saudar = function($nome){<br>echo "Olá, $nome!";<br>}; //Colocamos ; pq é a declaração de uma variável<br><br>$saudar("Rafael");</code><br><br>';
$saudar = function($nome){
    echo "Olá, $nome!";
}; //Colocamos ; pq é a declaração de uma variável
    
$saudar("Rafael");

echo '<br><br>Veja o tipo padrão da função <a href="../exemplo.php">clicando aqui</a>. <br><br>Ainda há algo muito legal que pode ser feito apenas com as funções anônimas, que é o uso de "use" (scope). <br><br><code>$saudacao = "Bom dia"; <br>$dizerBomDia = function($nome) use ($saudacao) {<br>echo"$saudacao, $nome!";<br>}; <br><br>$dizerBomDia("Rafael");</code><br><br>';

$saudacao = "Bom dia";

$dizerBomDia = function($nome) use ($saudacao) {
    echo "$saudacao, $nome!";
};

$dizerBomDia("Rafael");