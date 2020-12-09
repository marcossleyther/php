<?php
namespace automatizacion;
//use automatizacion as Aut;

class auto{
public $intentos;
public $fecha;

function __construct($intentos, $fecha){
$this->intentos=$intentos;
$this->fecha=$fecha;
}

function getAuto(){
    return"Se tuvo ".$this->intentos." intentos, en la fecha ".$this->fecha;
}
}
?>