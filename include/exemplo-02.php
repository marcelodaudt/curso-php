<?php

// INCLUDE -
// Tenta funcionar mesmo que o arquivo não exista ou que esteja com erros.
// Porém, têm mais recursos, como, por exemplo, o diretório INCLUDE PATH.
// Projetos de Intranet: centralização de código (funções)

// include "inc/exemplo-01.php";
// include "../inc/exemplo-01.php";

// INCLUDE REMOTE: muito perigoso de se usar! Não é uma boa prática!

// REQUIRE - 
// Obriga que o arquivo exista e que o arquivo esteja funcionando
// corretamente. Se o arquivo não existir, gera um erro fatal, para a 
// execução do código.

// Evitar laços - chamar um arquivo que já chama outro arquivo que está no mesmo
// código, por exemplo, funcoes.php.
// Para isso existe o REQUIRE ONCE ou INCLUDE ONCE
// Que significa trazer o arquivo somente uma vez.

//require "inc/exemplo-01.php";
//require "inc/exemplo-01.php"; // Apresenta erro fatal!
require_once "inc/exemplo-01.php";
require_once "inc/exemplo-01.php"; // ignora a segunda chamada

$resultado = somar(10, 35);

echo $resultado;

?>