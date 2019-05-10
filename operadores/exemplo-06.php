<?php

// Operador de Comparação
// Existia em banco de dados e agora veio para o PHP
// Para tratar valores nulos - comparando se os valores são nulos ou não

$a = NULL;

$b = NULL;

$c = 10;

echo $a ?? $b ?? $c;

?>