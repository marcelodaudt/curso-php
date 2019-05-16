<?php

/*
for ($contador = 0; $contador < 10; $contador++) {

	echo $contador . "<br/>";

}

for ($i = 0; $i < 1000; $i+=5) {

	echo $i . "<br/>";

}
*/

for ($i = 0; $i < 1000; $i+=5) {

	if ($i >= 200 && $i <= 800) continue; // entre 200 e 800 vai ignorar o ECHO

	if ($i === 900) break; // vai para o código quando chegar em 900

	echo $i . "<br/>";

}

?>