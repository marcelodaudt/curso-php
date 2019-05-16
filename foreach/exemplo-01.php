<?php

// FOREACH - usado para arrays e coleções

$meses = array(
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
	);

// FOREACH simples
/*
foreach ($meses as $mes) {
	
	echo "O mês é: ".$mes."<br/>";

}
*/

// FOREACH mostrando o índice
foreach ($meses as $index => $mes) {
	
	echo "Índice: ".$index."<br/>";

	echo "O mês é: ".$mes."<br/><br/>";

}

?>