<?php

require "banner.php";

//incluindo função somar
/*
    
    function somar($a, $b){
    $resultado = $a + $b;

    return $resultado;
}  
*/
  include "somar.php";

  $resultado = somar(15, 30);

  echo $resultado;




?>