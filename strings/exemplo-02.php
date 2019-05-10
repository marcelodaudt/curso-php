<?php

$nome = "joao rangel";

//echo $nome;

// Todo o texto em Caixa Alta
$nome = strtoupper($nome);
echo $nome;

// Todo o texto em Caixa Baixa
$nome = strtolower($nome);
echo "<br/>";
echo $nome;

// Só a primeira letra da primeira palavra em Caixa Alta - paragráfo
echo "<br/>";
echo ucfirst($nome);

// Só a primeira letra de cada palavra em Caixa Alta
echo "<br/>";
echo ucwords($nome);

?>