<?php

class Carro{

    private $modelo;
    private $ano;
    private $motor;
    private $valor;

    public function getModelo():string{
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getAno():int{
        return $this->ano;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }

    public function getMotor():float{
        return $this->motor;
    }

    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getValor():float{
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }


    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "ano"=>$this->getAno(),
            "motor"=>$this->getMotor(),
            "valor"=>$this->getValor()
        );
    }

}

//Instanciando
//$gol = new Carro();//
//$gol->setModelo();
//$gol->setAno();
//$gol->setMotor();
//$gol->setValor();



?>  