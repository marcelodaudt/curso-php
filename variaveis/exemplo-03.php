<?php

// Tipos de Dados Primitivos no PHP

// Tipos Básicos: 

// 1) String
$nome = "Hcode";
$site = 'www.hcode.com.br';

// 2) Inteiro
$ano = 1990;

// 3) Ponto Flutuante
$salario = 5500.99;

// 4) Booleano
$bloquado = false;

// Tipos Compostos:

// 5) Array
$frutas = array('abacaxi', 'laranja', 'manga');
echo $frutas[2];

// 6) Objeto
$nascimento = new DateTime();
echo "<br/>";
var_dump($nascimento);

// Tipos Especiais:

// 7) Resource
$arquivo = fopen("exemplo-03.php", "r");
echo "<br/>";
var_dump($arquivo);

// 8) Null
$nulo = NULL;
//É diferente de criar uma variável < $vazio = ""; >
//Nulo é ausência de valor - is null
//Vazio foi iniciado, mas não têm informação - reserva espaço na memória para a variável

?>