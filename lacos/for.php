<?php 

echo "<select>";

  for ($i = 1; $i < 20; $i++){
    echo '<option value="'.$i.'">' . $i . '</option>';
  }

echo "</select>";

//######### Descrescente (Ano do veículo)
echo "<select>";


  for ($i = date("y"); $i >= date("y")-100; $i--){
    echo '<option value="'.$i.'">' . 'Ano' . $i . '</option>';
  }

echo "</select>";



?>