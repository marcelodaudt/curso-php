<?php

// Exemplo de um FOR errado e que gera um LOOP INFINITO

// Aqui, o $i-- vai provocar LOOP INFINITO
// nunca o valor de $i vai chegar a ZERO

for ($i = 0; $i < 10; $i--) {

	echo $i . "<br/>";

}

?>