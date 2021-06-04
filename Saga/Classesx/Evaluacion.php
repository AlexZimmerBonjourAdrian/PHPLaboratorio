<?php
class Evaluacion {
  private $IdEva ;
  private $Calif;
  private $FechaEva;
  private $ComEva;

  
  function __construct($IdEva,$Calif,$FechaEva,$ComEva) {
    $this->IdEva = $IdEva;
    $this->Calif = $Calif;
    $this->FechaEva = $FechaEva;
    $this->ComEva = $ComEva;
  }


function getId() {
    return $this->IdEva;
}

function setCalif($Calif) {
    $this->Calif = $Calif;
}

function getCalif() {
    return $this->Calif;
}

function setFechaEva($FechaEva) {
    $this->FechaEva = $FechaEva;
}

function getFechaEva() {
    return $this->FechaEva;
}

function setComEva($ComEva) {
    $this->ComEva = $ComEva;
}

function getComEva() {
    return $this->ComEva;
}

}

?> 