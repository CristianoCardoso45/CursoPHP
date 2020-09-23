<?php

//Recebendo parametro via GET
//Exemplo
//127.0.0.1/variaveis2.php?a=2
$idade = $_GET["idade"];
echo $idade;
echo "<br/>";

//pegando IP do Visitante
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
echo "<br/>";

$name = $_SERVER["SCRIPT_NAME"];
echo $name;
echo "<br/>";
?>