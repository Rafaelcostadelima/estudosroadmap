<?php
    echo "Multi-dimensional arrays são um tipo de array que contém mais de um array (um dentro do outro).<br>Isso permite com que seja armazenado dados estruturamente, parecido como uma tabela no Excel, por exemplo.<br>Vamos criar uma multi-dimensional array:<br>";
    echo '<code>$users = [<br>["John", "john@gmail.com", "john123"],<br>["Jane", "jane@gmail.com", "jane123"],<br>["Doe", "doe@gmail.com", "doe123"]<br>];</code>';
    $users = [
        ["John", "john@gmail.com", "john123"],
        ["Jane", "jane@gmail.com", "jane123"],
        ["Doe", "doe@gmail.com", "doe123"]
    ];

    echo "<br>Agora, vamos testar tentando imprimir alguns dados.<br>";
    //No código abaixo, a sua função é de pegar cada array e pegar o seu primeiro dado. Neste caso, seria pegar apenas os nomes dos usuários
    foreach ($users as $usuarios){
        echo $usuarios[0] . "<br>";
    };
    