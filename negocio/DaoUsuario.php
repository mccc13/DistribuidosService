<?php

include '../datos/Usuario.php';
include_once '../conexion/config.php';

class DaoUsuario {

    function regitrarUsuario($userid, $nombre, $apellido, $sexo, $pass, $fecha_ini, $fecha_fin, $email) {
        try {
            global $con;
            $query = "INSERT INTO usuario(userid, nombre, apellido, sexo, pass, fechai, fechaf, email) values('$userid', '$nombre', '$apellido', '$sexo', '$pass', '$fecha_ini', '$fecha_fin', '$email')";

            $re = $con->Execute($query);
            echo $re;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function listarUsuarios() {
        $cont = 0;

        try {
            global $con;
            $re = $con->Execute("select *from usuario");
            foreach ($re as $row) {
                //array(10) { [0]=> string(6) "tdydyd" ["descripcion"]=> string(6) "tdydyd" [1]=> string(8) "jvjgjhgj"
                // ["email"]=> string(8) "jvjgjhgj" [2]=> string(5) "jkhkh" ["nombre"]=> string(5) "jkhkh" [3]=> string(2) "17" ["comentarios_sugerenciasid"]=> string(2) "17" [4]=> string(1) "1" ["paginaid"]=> string(1) "1" } 
                //   var_dump($row);
                $userid = $row["userid"];
                $nombre = $row["nombre"];
                $apellido = $row["apellido"];
                $sexo = $row["sexo"];

                $fecha_ini = $row["fechai"];
                $fecha_fin = $row["fechaf"];
                $email = $row["email"];
                $user = new Usuario($userid, $nombre, $apellido, $sexo, "", $fecha_ini, $fecha_fin, $email);
                //var_dump($coment);
                $lista[$cont++] = $user;
            }
            return $lista;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function verificarUser($mail, $pass) {
        try {
            global $con;
            $re = $con->Execute("SELECT *FROM usuario where email = '$mail' and pass = '$pass'");
            return true;
        } catch (Exception $ex) {
            echo $exc->getTraceAsString();
            return false;
        }
    }
    
    function iniciarSesion(){
        if(!isset($_SESSION['email'])){
            $_SESSION['email'] = $_REQUEST['email'];
            $_SESSION['pass'] = $_REQUEST['pass'];
            
            $this->verificarUser($_SESSION['email'], $_SESSION['pass']);
        }        
    }
    
    

}
