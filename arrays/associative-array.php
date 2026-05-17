<?php
    echo "Um array associativo é um tipo de array que usa algo chamado de 'chaves' em vez de serem ordenados como os indexados. Vamos a prática:<br>";
    echo 'Vamos declarar uma variável chamada $idades :<br>';
    echo '<code>$idades [<br>"Enzo" => 15,<br>"Rafael" => 16,<br>"Pedro" => 16<br>];</code><br><br>';
    $idades = [
        "Enzo" => 15,
        "Rafael" => 16,
        "Pedro" => 16 
    ];
    echo "Agora, vamos ver como que funciona. Primeiramente, vamos ao código:<br>";
    echo '<code>$idades["Enzo"]</code><br><br>';
    echo "Na prática, fica assim: <br>";
    echo $idades['Enzo']. ".<br>Observe que, ao colocar o 'Enzo', o programa já associou ao valor de 15, que é a sua idade.";