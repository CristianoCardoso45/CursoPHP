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


echo json_encode($pessoas);