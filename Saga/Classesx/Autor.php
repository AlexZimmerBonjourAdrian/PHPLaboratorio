<?php
class Autor {
  private $IdAut ;
  private $PassAut;
  private $NomAut;
  private $ApellidoAut;
  private $EmailAut;
  private $SexoAut;
  private $NicknameAut;
  private $FNAut;
  private $ImgAut;
  private $BiografiaAut;

  
  function __construct($IdAut,$PassAut,$NomAut,$ApellidoAut,$EmailAut,$SexoAut,$NicknameAut,$FNAut,$ImgAut,$BiografiaAut) {
    $this->IdAut = $IdAut;
    $this->PassAut = $PassAut;
    $this->NomAut = $NomAut;
    $this->ApellidoAut = $ApellidoAut;
    $this->EmailAut = $EmailAut;
    $this->SexoAut = $SexoAut;
    $this->Nickname = $NicknameAut;
    $this->FNAut = $FNAut;
    $this->ImgAut = $ImgAut;
    $this->BiografiaAut = $BiografiaAut;
  }


function getIdAut() {
    return $this->IdAut;
}

function setPassAut($PassAut) {
    $this->NomAut = $NomAut;
}

function getPassAut() {
    return $this->PassAut;
}

function setNomAut($NomAut) {
    $this->NomAut = $NomAut;
}

function getNomAut() {
    return $this->NomAut;
}

function setApellidoAut($ApellidoAut) {
    $this->ApellidoAut = $ApellidoAut;
}

function getApellidoAut() {
    return $this->ApellidoAut;
}

function setEmailAut($EmailAut) {
    $this->EmailAut = $EmailAut;
}

function getEmailAut() {
    return $this->EmailAut;
}

function setSexoAut($SexoAut) {
    $this->SexoAut = $SexoAut;
}

function getSexoAut() {
    return $this->SexoAut;
}

function setNicknameAut($NicknameAut) {
    $this->Nickname = $NicknameAut;
}

function getNicknameAut() {
    return $this->NicknameAut;
}

function setFNAut($FNAut) {
    $this->FNAut = $FNAut;
}

function getFNAut() {
    return $this->FNAut;
}

function setImgAut($ImgAut) {
    $this->ImgAut = $ImgAut;
}

function getImgAut() {
    return $this->ImgAut;
}

function setBiografiaAut($BiografiaAut) {
    $this->BiografiaAut = $BiografiaAut;
}

function getBiografiaAut() {
    return $this->getBiografiaAut;
}

}

?> 