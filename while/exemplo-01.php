<?php

// WHILE - utilizado para qualquer assunto, desde que a condição seja verdadeira
// Muito utilizado para banco de dados
// Utilizado quando não sei quantas vezes deve ser executado
// Quando trabalhar com números, colocar um contador, para não gerar LOOP INFINITO

$condicao = true;

while ($condicao) {
	
	$numero = rand(1, 10);

	if ($numero === 3) {
		
		echo "Três";
		$condicao = false;

	}

	echo $numero . " ";
}

?>