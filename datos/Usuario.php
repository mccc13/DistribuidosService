<?php

class Usuario {

    var $userid;
    var $nombre;
    var $apellido;
    var $sexo;
    var $pass;
    var $fechai;
    var $fechaf;
    var $email;

    function __construct($userid, $nombre, $apellido, $sexo, $pass, $fechai, $fechaf, $email) {
        $this->userid = $userid;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->pass = $pass;
        $this->fechai = $fechai;
        $this->fechaf = $fechaf;
        $this->email = $email;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getUserid() {
        return $this->userid;
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

    function getPass() {
        return $this->pass;
    }

    function getFechai() {
        return $this->fechai;
    }

    function getFechaf() {
        return $this->fechaf;
    }

    function setUserid($userid) {
        $this->userid = $userid;
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

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setFechai($fechai) {
        $this->fechai = $fechai;
    }

    function setFechaf($fechaf) {
        $this->fechaf = $fechaf;
    }

}
