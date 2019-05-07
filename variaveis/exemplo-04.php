<?php

$nome = (int)$_GET["a"]; //http://curso.php/variaveis/exemplo-04.php?a=123&b=456

//var_dump($nome);

//$ip = $_SERVER["REMOTE_ADDR"]; //Exibe o endereço IP do usuário (ambiente usuário)
$ip = $_SERVER["SCRIPT_NAME"]; //Exibe o nome do arquivo (ambiente servidor)

echo $ip;

?>