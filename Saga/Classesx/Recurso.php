<?php
class Recurso {
  private $IdRec ;
  private $NomRec;
  private $Suscrip;
  private $Descarg;
  private $Tipo;
  private $ImgR;
  private $Descrip;
  private $Enlace;

  
  function __construct($IdRec,$NomRec,$Suscrip,$Descarg,$Tipo,$ImgR,$Descrip,$Enlace) {
    $this->IdRec = $IdRec;
    $this->NomRec = $NomRec;
    $this->Suscrip = $Suscrip;
    $this->Descarg = $Descarg;
    $this->Tipo = $Tipo;
    $this->ImgR = $ImgR;
    $this->Descrip = $Descrip;
    $this->Enlace = $Enlace;
  }


function getId() {
    return $this->IdRec;
}

function setNomRec($NomRec) {
    $this->NomRec = $NomRec;
}

function getNomRec() {
    return $this->NomRec;
}

function setSuscrip($Suscrip) {
    $this->Suscrip = $Suscrip;
}

function getSuscrip() {
    return $this->Suscrip;
}

function setDescarg($Descarg) {
    $this->Descarg = $Descarg;
}

function getDescarg() {
    return $this->Descarg;
}

function setTipo($Tipo) {
    $this->Tipo = $Tipo;
}

function getTipo() {
    return $this->Tipo;
}

function setImgR($ImgR) {
    $this->ImgR = $ImgR;
}

function getImgR() {
    return $this->ImgR;
}

function setDescrip($Descrip) {
    $this->Descrip = $Descrip;
}

function getDescrip() {
    return $this->Descrip;
}

function setEnlace($Enlace) {
    $this->Enlace = $Enlace;
}

function getEnlace() {
    return $this->Enlace;
}

}

?> 