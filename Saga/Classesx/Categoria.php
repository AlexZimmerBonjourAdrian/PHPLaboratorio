<?php
class Categoria {
  private $IdCat ;
  private $NomCat;
  private $IdP ;


  
  function __construct($IdCat,$NomCat,$IdP) {
    $this->IdCat = $IdCat;
    $this->NomCat = $NomCat;
    $this->IdP = $IdP;
  }


function getIdCat() {
    return $this->IdCat;
}

function getNomCat() {
    return $this->NomCat;
}

function setIdP($IdP) {
  $this->IdP = $IdP;
}

function getIdP() {
  return $this->IdP;
}

}

?> 