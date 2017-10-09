<?php

class Usuario {

    var $usuarioid;
    var $nombre;
    var $apellido;
    var $sexo;
    var $email;
    var $pass;
    var $estado;
    var $fechai;
    var $fechaf;

    function __construct($usuarioid, $nombre, $apellido, $sexo, $email, $pass, $estado, $fechai, $fechaf) {
        $this->usuarioid = $usuarioid;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->pass = $pass;
        $this->estado = $estado;
        $this->fechai = $fechai;
        $this->fechaf = $fechaf;
    }

    function getUsuarioid() {
        return $this->usuarioid;
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

    function getEmail() {
        return $this->email;
    }

    function getPass() {
        return $this->pass;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFechai() {
        return $this->fechai;
    }

    function getFechaf() {
        return $this->fechaf;
    }

    function setUsuarioid($usuarioid) {
        $this->usuarioid = $usuarioid;
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

    function setEmail($email) {
        $this->email = $email;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setFechai($fechai) {
        $this->fechai = $fechai;
    }

    function setFechaf($fechaf) {
        $this->fechaf = $fechaf;
    }



}
