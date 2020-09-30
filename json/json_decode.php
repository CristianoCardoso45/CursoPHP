<?php
$json = '[{"nome":"Cristiano","Idade":"28"},{"nome":"Fernando","Idade":"29"},{"nome":"Larissa","Idade":"29"}]';

// [, true] serve para ele ser transformado em array
// Senão colocar ele vira um objeto
$data = json_decode($json, true);

var_dump($data);

?>
