<?php

echo "Em resumo, as funções 'Callback' podem ser usdas como instruções para uma função externa. <br>Neste caso, recomendo que olhe o código-fonte direto porque é mais fácil de entender apenas na prática. <br>";

//Vamos fazer uma calculadora simples de exemplo para agora
//Ela possue algumas aritiméticas básicas, como soma, subtração, multiplicação e divisão. Vamos fazer cada uma delas:

// <=== FAZENDO AS INSTRUÇÕES (FUNÇÕES CALLBACK) ===>
//Criando a soma (lembre de fazer essas funções sendo anônimas)
$somar = function($a, $b){
    return $a + $b;
};

//Criando a subtração
$subtrair = function($a, $b){
    return $a - $b;
};

//Criando a multiplicação
$multiplicar = function($a, $b){
    return $a * $b;
};

//Criando a divisão
$dividir = function($a, $b){
    return $a / $b;
};

// <== CRIANDO A FUNÇÃO DA CALCULADORA ==>
function calcular($a, $b, $instrucao){
    $resultado = $instrucao($a, $b);
    echo "O resultado é ". $resultado . "<br>";
}


//Chamando a função após todas as configurações serem realzadas
calcular(30, 20, $somar);
calcular(30, 20, $subtrair);
calcular(30, 20, $multiplicar);
calcular(30, 20, $dividir);
