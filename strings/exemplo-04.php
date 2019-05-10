<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);

var_dump($q); // 17

$texto = substr($frase, 0, $q);

var_dump($texto); // 'A repetição é ' (length=17)

//$texto2 = substr($frase, $q);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2); // ' da retenção.' (length=15)

// substr = cria uma sub string
// strlen = retorna o tamanho de uma string
// strpos = encontra a posição da primeira ocorrência de uma string

?>