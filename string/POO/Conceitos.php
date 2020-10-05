<?php

/**PROGRAMAÇÃO ORIENTADO A OBJETOS
 * 
Classes
 	Conjunto de atríbutos e métodos (Propiedades)
        Atributo são váriaveis que ganham mais recursos
		
		Métodos sãofunções que ganham mais recursos

    Instancia uma classe é usar uma varíavel que tira uma cópia (representa) dessa classe para ser utilizada

**Classe sempre começa com letra mauiscula

Emcapsulamento public ou private

//Exemplo

*/

class Pessoa{
    public $nome;//Atributo

    public function falar(){//Método
         
        return "Olá ".$this->nome;

    }
}

$glaucio = new Pessoa();
$glaucio-> = "Glaucio Felipe";

echo $glaucio->falar();