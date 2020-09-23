<?php
/*
  Variáveis - Curso HCode
*/
$firstName = "Cristiano";
$lastName = "Santos";

$nameComplete = $firstName . " " . $lastName;
$idade = 20;

$finalVar = $nameComplete . " tem " . $idade . " anos!";

echo $finalVar;

echo "<br/>";

//unset($finalVar);

if(isset($finalVar)){
  echo "Variável existe";
} else{
  echo "não existe variável";
}
?>