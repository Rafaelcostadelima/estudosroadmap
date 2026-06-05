<?php

$calcularDesconto = fn($valorProduto) => $valorProduto * 0.9;

echo $calcularDesconto(100) . "<br>";
echo $calcularDesconto(1000);