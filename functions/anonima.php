<?php


//Não tem nome na função, função anonima!

//Função anonima de Callback
//Processa algo lento, depois em rretorna quanto terminar
function ProcessaAlgo($callback){
    //Processo Lento

    $callback();
}

ProcessaAlgo(function(){
    echo "terminou\n";
    //Aqui poderia ser qualquer coisa que pode ser executada após
    //a funçaõ ProcessaAlgo
});


##############################################

$fn = function($text){
    var_dump($text);
};

$fn("Olá MUndo");
    
?>

