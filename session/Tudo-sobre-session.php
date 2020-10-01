<?php 
//inicia sessão
session_start();

$_SESSION['nome'] = 'Hcode';

echo $_SESSION['nome'];

//Apaga as variáveis da sessão
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];


//DEstroe a sessão
session_destroy();

//mostra ID de Sessão
echo session_id();


//REgenerar ID
//Pode ser utilizado quando o usuário é validado no login, ai cria uma nova sessão
session_regenerate_id();