<?php
    $x = 2456;
    echo "Aqui é declarado uma variável 'x' com o valor de $x <br><br>";
    function test(){
        echo "Aqui já estamos dentro de uma função. Ela se chama 'test'. <br>";
        $x = 10;
        echo $x . " <-- Aqui é variável 'x' só que dentro da função <br>";
        global $x;
        echo $x. " <-- Está é a variável 'x' dentro da função, porém, chamei a 'global x'. Logo, chamei a variável x fora da função, sendo esta com o valor de $x";
    }

    test();