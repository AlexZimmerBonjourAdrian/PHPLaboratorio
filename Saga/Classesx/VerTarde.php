<?php
class VerTarde {
  private $IdVMT ;
  private $FechaVMT;
  private $Visto;
  private $Publico;

  
  function __construct($IdVMT,$FechaVMT,$Visto,$Publico) {
    $this->IdVMT = $IdVMT;
    $this->FechaVMT = $FechaVMT;
    $this->Visto = $Visto;
    $this->Publico = $Publico;
  }


function getId() {
    return $this->IdVMT;
}

function setFechaVMT($FechaVMT) {
    $this->FechaVMT = $FechaVMT;
}

function getFechaVMT() {
    return $this->FechaVMT;
}

function setVisto($Visto) {
    $this->Visto = $Visto;
}

function getVisto() {
    return $this->Visto;
}

function setPublico($Publico) {
    $this->Publico = $Publico;
}

function getPublico() {
    return $this->Publico;
}

}

?> 