<?php

class Contacto {
    
    var $contactoID;
    var $nombre;
    var $apellido;
    var $sexo;
    var $genero;
    var $parentesco;
    var $telefono;
       
    function __construct($contactoID, $nombre, $apellido, $sexo, $genero, $parentesco, $telefono) {
        $this->contactoID = $contactoID;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->genero = $genero;
        $this->parentesco = $parentesco;
        $this->telefono = $telefono;
    }
    
    
    function getContactoID() {
        return $this->contactoID;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getGenero() {
        return $this->genero;
    }

    function getParentesco() {
        return $this->parentesco;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setContactoID($contactoID) {
        $this->contactoID = $contactoID;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setParentesco($parentesco) {
        $this->parentesco = $parentesco;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

}
