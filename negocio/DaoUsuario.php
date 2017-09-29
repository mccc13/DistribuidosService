<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoUsuario
 *
 * @author Maya
 */
class DaoUsuario {

    //put your code here
    function regitrarUsuario($ci, $nombre, $direcion, $telefono, $usuario, $contrasena) {
        try {
            global $con;
            $query = "insert into usuario(descripcion,email,nombre,comentarios_sugerenciasid,paginaid) values('$descripcion','$email','$nombre',$sid,1)";

            $re = $con->Execute($query);
            echo $re;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    function listarUsuarios() {
        try {
            global $con;
            $re = $con->Execute("select *from usuario");
            foreach ($re as $row) {
                //array(10) { [0]=> string(6) "tdydyd" ["descripcion"]=> string(6) "tdydyd" [1]=> string(8) "jvjgjhgj"
                // ["email"]=> string(8) "jvjgjhgj" [2]=> string(5) "jkhkh" ["nombre"]=> string(5) "jkhkh" [3]=> string(2) "17" ["comentarios_sugerenciasid"]=> string(2) "17" [4]=> string(1) "1" ["paginaid"]=> string(1) "1" } 
                //   var_dump($row);
                $ci = $row["ci"];
                $direccion = $row["direccion"];
                $nombre = $row["nombre"];
                $telefono = $row["telefono"];
                $usuario = $row["usuario"];
                $paginaid = $row["paginaid"];
                $administradorid = $row["administradorid"];
                $admin = new administrador($administradorid, $nombre, $ci, $direccion, $telefono, $usuario, "", $paginaid);
                //var_dump($coment);
                $lista[$cont++] = $admin;
            }
            return $lista;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
