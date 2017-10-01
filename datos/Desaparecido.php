<?php

class Desaparecido {

    public $desaparecidoID;
    public $nombre;
    public $apellido;
    public $edad;
    public $sexo;
    public $estatura;
    public $colorpelo;
    public $colorpiel;
    public $vestimenta;
    public $constitucion;
    public $otros;

    function __construct($desaparecidoID, $nombre, $apellido, $edad, $sexo, $estatura, $colorpelo, $colorpiel, $vestimenta, $constitucion, $otros) {
        $this->desaparecidoID = $desaparecidoID;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->estatura = $estatura;
        $this->colorpelo = $colorpelo;
        $this->colorpiel = $colorpiel;
        $this->vestimenta = $vestimenta;
        $this->constitucion = $constitucion;
        $this->otros = $otros;
    }

    function getDesaparecidoID() {
        return $this->desaparecidoID;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getEdad() {
        return $this->edad;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEstatura() {
        return $this->estatura;
    }

    function getColorpelo() {
        return $this->colorpelo;
    }

    function getColorpiel() {
        return $this->colorpiel;
    }

    function getVestimenta() {
        return $this->vestimenta;
    }

    function getConstitucion() {
        return $this->constitucion;
    }

    function getOtros() {
        return $this->otros;
    }

    function setDesaparecidoID($desaparecidoID) {
        $this->desaparecidoID = $desaparecidoID;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEstatura($estatura) {
        $this->estatura = $estatura;
    }

    function setColorpelo($colorpelo) {
        $this->colorpelo = $colorpelo;
    }

    function setColorpiel($colorpiel) {
        $this->colorpiel = $colorpiel;
    }

    function setVestimenta($vestimenta) {
        $this->vestimenta = $vestimenta;
    }

    function setConstitucion($constitucion) {
        $this->constitucion = $constitucion;
    }

    function setOtros($otros) {
        $this->otros = $otros;
    }

}
