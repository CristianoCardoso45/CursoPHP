<?php

$idade = 18;

if($idade < 12){
    echo "<label>Criança</label>";
} else if($idade >=12 && $idade <=17){
    echo "<labe> Jovem</labe>";
} else {
    echo "<labe>Adulto</labe>";
}