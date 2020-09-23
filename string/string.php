<?php

echo "<br>";

$nome = "joao rangel";
//Função para deixar tudo maiusculo
$nome = strtoupper($nome);
echo $nome . " >> maiusculo";

echo "<br>";

//Função para deixar tudo minusculo
$nome = strtolower($nome);
echo $nome . " >> minusculo";

echo "<br>";

//Deixar apenas as iniciais maiusculas
$nome = ucwords($nome);
echo $nome . " >> Primeiras em maiuscolo";

echo "<br>";

//Deixar apenas as iniciais maiusculas
$nome = ucfirst($nome);
echo $nome . " >> Somente primeira em maiuscolo";

echo "<br>";

//########### Função Replace
$empresa = "ThinkSo";

$empresa = str_replace("i" , "1" , $empresa);
$empresa = str_replace("o" , "0" , $empresa);

echo $empresa;
echo "<br>";


/////// STRLEN - Verifica o tamanho da string
echo strlen($empresa);


?>