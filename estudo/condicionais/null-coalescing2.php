<?php
    $nome = $_POST['nome'];
    if ($nome == '') {
        $nome = null;
    }
    echo $nome ?? 'Visitante';