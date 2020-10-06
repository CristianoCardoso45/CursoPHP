
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
    <input type="text" name="modelo" placeholder="modelo"></input>
    <input type="text" name="ano" placeholder="ano"></input>
    <input type="text" name="motor" placeholder="motor"></input>
    <input type="text" name="valor" placeholder="valor"></input>
    <input type="submit" value="Cadastrar"></input>
 </form>
  <?php

    include_once "class-getters-and-setters.php";
    
    $carro = new Carro();
    if(isset($_GET)){
        $carro->setModelo($_GET['modelo']);
        $carro->setAno($_GET['ano']);
        $carro->setMotor($_GET['motor']);
        $carro->setValor($_GET['valor']);
        
        var_dump($carro->exibir());
    
    }
    
?>
 
</body>
</html>