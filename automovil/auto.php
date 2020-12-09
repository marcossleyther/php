<?php
namespace automovil;

class auto{
public $ruedas;
public $puertas;

function __construct($ruedas, $puertas){
$this->ruedas=$ruedas;
$this->puertas=$puertas;
}

function getAuto(){
    return"El auto tiene ".$this->ruedas." ruedas, y ".$this->puertas." puertas";
}
}
?>