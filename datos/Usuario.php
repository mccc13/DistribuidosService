<?php

class Usuario {

    public $userid;
    public $nombre;
    public $apellido;
    public $sexo;
    public $pass;
    public $fechai;
    public $fechaf;

    function __construct($user, $nombre, $apellido, $sexo, $pass, $fecha_ini, $fecha_fin) {
        $this->userid = $user;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->pass = $pass;
        $this->fechai = $fecha_ini;
        $this->fechaf = $fecha_fin;
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
