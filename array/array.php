<?php

$pessoas = array();

array_push ($pessoas, array(
    'nome' => 'Cristiano',
    'Idade' => '28'
));

array_push ($pessoas, array(
    'nome' => 'Fernando',
    'Idade' => '29'
));

array_push ($pessoas, array(
    'nome' => 'Larissa',
    'Idade' => '29'
));

print_r($pessoas);

//Pegando apenas o conteudo da chave nome da posição 0
print_r($pessoas[0]['nome']);