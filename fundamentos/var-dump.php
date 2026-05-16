<?php
    echo "A função var_dump() serve para indicar o tipo e o valor da variável em seus parâmetros.<br>";
    $var1 = 10;
    $var2 = "furacão";
    echo "São declaradas duas varáveis: var1, que vale $var1, e a var2, que vale '$var2'. <br>";
    echo "Abaixo segue as 'respostas' do var_dump()<br>";
    var_dump($var1);
    echo "<br>";
    var_dump($var2);
    echo "<br>Observe que quando é uma string, por exemplo, o var_dump() mostra o tamanho de caracteres da string entre parênteses e mostra o que estava escrito nela logo após. OBS.: acentuação conta como um caractere.";