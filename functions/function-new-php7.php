<?php
echo "<br>";
// Função que recebe $valores, seja quanto for e converte para INT
//PAra depois somar
function soma(int ...$valores){
    $soma = 0;
    foreach($valores as $valor){
        $soma += $valor;
    }
    return  $soma;
}

echo soma(10, 30, 20, 40, 20);

############################################

//SPREAD + NOVO RETURN array_sum
echo "<br>";
function soma2(int ...$valores){
    return array_sum($valores);
}

echo soma2(10, 10, 10, 10, 10);