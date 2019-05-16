<?php

// Exemplo de ARRAY BIDIMENSIONAL

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Glaucio',
	'idade'=>25
));

//print_r($pessoas);
//
// SAÍDA:
//
// Array
// (
//     [0] => Array
//         (
//             [nome] => João
//             [idade] => 20
//        )
//
//     [1] => Array
//         (
//             [nome] => Glaucio
//             [idade] => 25
//         )
// 
// )
//

//print_r($pessoas[0]);
//
// SAÍDA:
//
// Array
// (
//     [nome] => João
//     [idade] => 20
// )
//

print_r($pessoas[0]['nome']);
//
// SAÍDA:
//
// João
//

?>