<?php

// Exmplo de ARRAY BIDIMENSIONAL
//
// $var[linha][coluna]
// array[num_lins, num_cols]
// matriz[ALTURA][LARGURA]

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][2];

echo "<br/>";

//Função END - traz o último valor que existe dentro da posição informada
echo end($carros[1]);

echo "<br/>";

echo end($carros[0]);

?>