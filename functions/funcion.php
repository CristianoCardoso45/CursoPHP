<?php

function ola($name){
   return "Olá $name\n";
}

echo ola("Cristiano");

##########################################

function AumentoSalarial($salario){
    $novoSalario = $salario * 1.10;
    return $novoSalario;
}
echo AumentoSalarial(1000);
echo "<br>";
###########################################

function calcIdade (int $anoNascimento, int $anoAtual){
    $idade = $anoAtual - $anoNascimento;
    
    if($idade <= 12){
        $texto = "Vocé  ainda é uma criança, tem apenas $idade!";
    } elseif($idade > 12 && $idade < 18){
        $testo = "Vocé é considerado Adolescente/Jovem com $idade!";
    } elseif ($idade >= 18){
        $texto = "Vocé é de maior com $idade";
    }

    return $texto;
}

$anoNascimento = 1950;
$anoAtual = 2020;

echo calcIdade($anoNascimento, $anoAtual);

################################################
$pessoas = array(
    'nome' => 'Larissa',
    'idade' => 30
);

//ALterando valor da Váriavel idade na memória
foreach($pessoas as &$pessoa){
    echo "<br>";
    if (gettype($pessoa) === 'interger') {
        $value += 10;
    }
    echo $pessoa;
}

#########################################