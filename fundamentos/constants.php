<?php
    echo 'Constantes são variáveis que não mudam o seu valor por nada. <br>Para definí-las, utilizamos uma semântica um pouco diferente do usual para declarar uma variável: define("PI", 3.14). <br>Este é um exemplo de como é a semântica para declarar uma contante.<br><br>';
    define("ENZO", "Enzão da massa");
    echo ENZO;
    echo "<br><br>Pelo que foi observado, não é necessário as letras maiúsculas, pórém é uma boa prática os deixar com letra maiúscula.<br><br>";
    define("teste", "Apenas um teste com as letras minúsculas com o nome de uma variável constante.");
    echo teste;