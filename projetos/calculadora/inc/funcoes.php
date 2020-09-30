<?php

class Baskhara
{
  public function delta($valores)
  {
    $delta = (-$valores[1]**2) - 4 * $valores[0] * $valores[2];
    return $delta;
  }

  public function raizes($delta)
  {
    echo 'raizes';
  }
  
}