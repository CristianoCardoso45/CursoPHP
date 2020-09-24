<?php

$meses = array(
  "Janeiro" , "Fevereiro" , "Março" ,
  "Abril" , "Maio" , "Junho " , "Setembro",
  "Outubro" , "Novembro" , "Dezembro"
);

foreach($meses as $index => $mes){  
  echo $index + 1 . $mes . "<br>";  
}
?>