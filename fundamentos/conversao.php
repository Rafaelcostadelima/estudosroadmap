<?php
    //Teste 1
    
    $foo = 0;
    $bar = (bool) $foo;
    if ($bar){
        echo "True <br>";
    } else{
        echo "False <br>";
    }
    echo $foo . "<br><br>";

    //Teste 2
    $numerofloat = 3.67;
    $numeroint = (int) $numerofloat;
    echo $numeroint;
