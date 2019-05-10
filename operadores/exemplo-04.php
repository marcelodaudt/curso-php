<?php

$a = 55.0;

$b = 55;

var_dump($a > $b);

var_dump($a < $b);

//	var_dump($a = $b); - um igual só é operador de atribuição - vai somar as variáveis

var_dump($a == $b); // para comparação usamos dois iguais - compara apenas os valores, não o tipo (igualdade de valor)

var_dump($a === $b); // para comparar valores e tipo, usamos três iguais (igualdade de identidade)

var_dump($a != $b); // comparar se os valores são difentes, usa-se exclamação

var_dump($a !== $b); // comparar se os valores e tipo são difentes, usa-se exclamação

// também pode-se usar '>=' ou '<=' para comparação de variáveis

?>