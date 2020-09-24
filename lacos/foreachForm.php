<form>
  <input type="text" name="Nome" placeholder="Nome"></input>
  <input type="text" name="Sobrenome" placeholder="Sobrenome"></input>
  <input type="text" name="Idade" placeholder="Idade"></input>
  <input type="submit" value="OK"></input>
</form>

<?php

if(isset($_GET)){
  foreach ($_GET as $key => $value){
    echo $key . ": " . $value . "<br>";
  }
}
?>