<?php

// DO WHILE - mesmo que WHILE, mas executa pelo menos uma vez

$total = 150;
$desconto = 0.9;

do {

	$total *= $desconto;

} while ($total > 100);

echo $total;

?>