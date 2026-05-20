<?php
    echo "A semântica do switch é assim: <br><code>switch (nome_da_variavel){ <br>case 'Alguma string aqui': <br>//Digite o bloco de código que deseja que apareça<br>break; <br>default:<br>//Coloque o bloco de código que desejar<br>break;<br>};</code><br><br>Rodando o código, fica assim com a variável = 'Segunda'<br>";

    $dia_semana = "Segunda";
    switch ($dia_semana) {
        case "Segunda":
            echo "Segunda<br>";
            break;
        case "Terça":
            echo "Terça<br>";
            break;
        case "Quarta":
            echo "Quarta<br>";
            break;
        case "Quinta":
            echo "Quinta";
            break;
        case "Sexta":
            echo "Sexta<br>";
            break;
        case "Sábado":
            echo "Sábado<br>";
            break;
        case "Domingo":
            echo "Domingo<br>";
            break;
        default:
            echo "Esse é um dia da semana inválido";
            break;
    };