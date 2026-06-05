<?php

function lancarFoguete($segundos){
    echo $segundos . "<br>";
    if ($segundos > 0){
        lancarFoguete($segundos - 1);
    }
}

lancarFoguete(5);