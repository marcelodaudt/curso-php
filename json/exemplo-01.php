<?php

// JSON - JavaScript Object Notation
// Interoperabilidade de sistemas
// Serialização de ARRAYS = JSON
// Antes usava-se o XML


// JSON ENCODE

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Glaucio',
	'idade'=>25
));

echo json_encode($pessoas);

?>