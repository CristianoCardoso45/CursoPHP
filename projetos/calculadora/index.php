
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Calc</title>
	<link href="css/style.css" rel="stylesheet"/>
</head>
<body>
 <form>
    <input type="text" name="a" placeholder="Valor de A"></input>
    <input type="text" name="b" placeholder="Valor de B"></input>
    <input type="text" name="c" placeholder="Valor de C"></input>
    <input type="submit" value="Calcular"></input>
 </form>
  <?php
    if(isset($_GET)){
      $valores = array();
      foreach($_GET as $key => $value){
        array_push($valores , $value);
      }
      include_once "inc/funcoes.php";
      //$resultado = 

    }
?>
 
</body>
</html>