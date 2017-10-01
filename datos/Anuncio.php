<?php

class Anuncio {
    
    public $anuncioID;
    public $estado;
    public $fecha;
    public $userID;
    public $contactoID;
    public $desaparecidoID;
    public $imagenID;
    
    function __construct($anuncioID, $estado, $fecha, $userID, $contactoID, $desaparecidoID, $imagenID) {
        $this->anuncioID = $anuncioID;
        $this->estado = $estado;
        $this->fecha = $fecha;
        $this->userID = $userID;
        $this->contactoID = $contactoID;
        $this->desaparecidoID = $desaparecidoID;
        $this->imagenID = $imagenID;
    }

    function getAnuncioID() {
        return $this->anuncioID;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getUserID() {
        return $this->userID;
    }

    function getContactoID() {
        return $this->contactoID;
    }

    function getDesaparecidoID() {
        return $this->desaparecidoID;
    }

    function getImagenID() {
        return $this->imagenID;
    }

    function setAnuncioID($anuncioID) {
        $this->anuncioID = $anuncioID;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setUserID($userID) {
        $this->userID = $userID;
    }

    function setContactoID($contactoID) {
        $this->contactoID = $contactoID;
    }

    function setDesaparecidoID($desaparecidoID) {
        $this->desaparecidoID = $desaparecidoID;
    }

    function setImagenID($imagenID) {
        $this->imagenID = $imagenID;
    }


}
