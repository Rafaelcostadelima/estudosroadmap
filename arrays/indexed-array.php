<?php
    echo "Um array indexado é apenas o númerozinho que vem depois da variável em colchetes. <br>Por exemplo, vamos declarar uma variável chamada '<strong>jogos</strong>', e, dentro desse array, a gente vai colocar 'Call of Duty', 'Hollow knight' e 'Garry's Mod'";
    $jogos = ["Call of Duty", "Hollow Knight", "Garry's Mod"];
    echo "<br>Feito isso, agora vamos chamar '<strong>jogos[0]</strong> (vai chamar o 'Call o Duty', já que é o primeiro)<br>";
    echo $jogos[0]. "<br>";
    echo "Agora, vamos testar <strong>jogos[2]</strong>. Muitos pensam que vai ser o Hollow Knight, mas na verdade não, vai mostrar o terceiro jogo, que, no caso, é 'Garry's mod'<br>";
    echo $jogos[2];
    // Indexado é só quando temos um array e pegamos um certo item dele com um número (a ordem dos itens dentro dele, começando pelo 0)