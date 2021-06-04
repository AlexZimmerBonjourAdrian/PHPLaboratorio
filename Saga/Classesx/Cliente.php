<?php
class Cliente {
  private $IdCli ;
  private $PassCli;
  private $NomCli;
  private $ApellidoCli;
  private $EmailCli;
  private $SexoCli;
  private $NicknameCli;
  private $FNCli;
  private $ImgCli;
  private $Suscrito;
  
  function __construct($IdCli,$PassCli,$NomCli,$ApellidoCli,$EmailCli,$SexoCli,$NicknameCli,$FNCli,$ImgCli,$Suscrito) {
    $this->IdCli = $IdCli;
    $this->NomCli = $PassCli;
    $this->NomCli = $NomCli;
    $this->ApellidoCli = $ApellidoCli;
    $this->EmailCli = $EmailCli;
    $this->SexoCli = $SexoCli;
    $this->NicknameCli = $NicknameCli;
    $this->FNCli = $FNCli;
    $this->ImgCli = $ImgCli;
    $this->Suscrito = $Suscrito;
  }


function getIdCli() {
    return $this->IdCli;
}

function setPassCli($PassCli) {
    $this->PassCli = $PassCli;
}

function getPassCli() {
    return $this->PassCli;
}

function setNomCli($NomCli) {
    $this->NomCli = $NomCli;
}

function setSuscription($Suscrito)
{
    $this->Suscrito= $Suscrito;
}

function getSuscription()
{
    return $this->Suscrito;
}

function getNomCli() {
    return $this->NomCli;
}

function setApellidoCli($ApellidoCli) {
    $this->ApellidoCli = $ApellidoCli;
}

function getApellidoCli() {
    return $this->ApellidoCli;
}

function setEmailCli($EmailCli) {
    $this->EmailCli = $EmailCli;
}

function getEmailCli() {
    return $this->EmailCli;
}

function setSexoCli($SexoCli) {
    $this->SexoCli = $SexoCli;
}

function getSexoCli() {
    return $this->SexoCli;
}

function setNicknameCli($NicknameCli) {
    $this->NicknameCli = $NicknameCli;
}

function getNicknameCli() {
    return $this->NicknameCli;
}

function setFNCli($FNCli) {
    $this->FNCli = $FNCli;
}

function getFNCli() {
    return $this->FNCli;
}

function setImgCli($ImgCli) {
    $this->ImgCli = $ImgCli;
}

function getImgCli() {
    return $this->ImgCli;
}

}



?> 