<?php

$idiomaDefinido = null;
$idiomaFinal = $idiomaDefinido;

echo $idiomaFinal ?? 'portugues'; 

echo "<hr>";

$idiomaDefinido = 'ingles';
$idiomaFinal = $idiomaDefinido;

echo $idiomaFinal ?? 'portugues'; 