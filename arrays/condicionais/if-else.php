<?php
    echo 'If/else funciona quando você coloca uma condição para ser analisada. Se for verdadeiro, ele um broco de código especificado pelo o DEV. <br> Exemplo: <br><code>$number = 10; <br>if ($number > 5) {<br>  echo "Seu número é maior que 5"; <br>} else {<br>  echo "Seu número é menor que 5";<br>};</code><br><br>';
    $number = 10;
    if ($number > 5) {
        echo "Seu número é maior que 5";
    } else {
        echo "Seu número é menor que 5";
    };

    echo "<br><br>Observe que a variável numero é igual a 10, então, o código executa o if, se não fosse por isso, executaria o 'else'.";