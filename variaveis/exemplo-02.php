<?php

$anoNascimento = 1971;

$nomeCompleto = "Marcelo Daudt";

$nome1 = "João";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " .$sobrenome; //Para concatenar variáveis

echo $nomeCompleto;

exit(); //Para parar o código

echo $nome1;

echo "<br/>";

unset($nome1); //Para limpar variável

if (isset($nome1)) {
	echo $nome1;	
}

// Boas Práticas - Padrões de Nomes:
// - Muito cuidado na escolha dos nomes das variáveis
// - Evitar siglas ou abreviações
// - Não pode $1nome, ou seja, evitar caracteres especiais e números no início da variável
// - Underline pode - $_nome
// - Também não usar variáveis de palavras reservadas, como por exemplo, $this

?>