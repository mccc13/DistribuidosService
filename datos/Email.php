<?php

class Email {

    //put your code here

    public $emailID;
    public $correo;
    public $tipoCuenta;
    public $user;
    public $contacto;

    function __construct($emailID, $correo, $tipoCuenta, $user, $contacto) {
        $this->emailID = $emailID;
        $this->correo = $correo;
        $this->tipoCuenta = $tipoCuenta;
        $this->user = $user;
        $this->contacto = $contacto;
    }

    function getEmailID() {
        return $this->emailID;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getTipoCuenta() {
        return $this->tipoCuenta;
    }

    function getUser() {
        return $this->user;
    }

    function getContacto() {
        return $this->contacto;
    }

    function setEmailID($emailID) {
        $this->emailID = $emailID;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setTipoCuenta($tipoCuenta) {
        $this->tipoCuenta = $tipoCuenta;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setContacto($contacto) {
        $this->contacto = $contacto;
    }

}
