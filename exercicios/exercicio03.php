<?php

$numero = 1;
$pares = [];
while ($numero <= 10) {
    if ($numero % 2 == 0){
        array_push($pares, $numero);
    }
    $numero += 1;
}

foreach($pares as $par){
    echo "$par <br>";
}