<?php

include '../datos/Usuario.php';
include_once '../conexion/config.php';
require '../conexion/database.php';

class DaoUsuario {

    function __construct() {
        
    }

    /**
     * Insertar un nuevo usuario
     *
     * @param $userid      identificador de usuario
     * @param $nombre      nombre de usuario
     * @param $apellido    apellido de usuario
     * @param $sexo        sexo de usuario
     * @param $pass        contraseña de usuario
     * @param $fecha_ini   fecha de registro
     * @param $fecha_fin   fecha fin
     * @param $email       email de usuario
     * @return 
     */
    public static function regitrarUsuario($userid, $nombre, $apellido, $sexo, $pass, $fecha_ini, $fecha_fin, $email) {
        try {
            global $con;
            $query = "INSERT INTO usuario(userid, nombre, apellido, sexo, pass, fechai, fechaf, email) values('$userid', '$nombre', '$apellido', '$sexo', '$pass', '$fecha_ini', '$fecha_fin', '$email')";

            $re = $con->Execute($query);
            echo $re;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Retorna en la fila especificada de la tabla 
     *
     * @param $userid Identificador del registro
     * @return array Datos del registro
     */
    public static function listarUsuarios() {
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

    /**
     * Obtiene los campos de un usuario con un identificador
     * determinado
     *
     * @param $userID Identificador del usuario
     * @return lista
     */
    public static function getById($userID) {
        $query = "SELECT *FROM usuario where userid='$userID'";
        $cont = 0;
        try {
            global $con;
            $re = $con->Execute($query);
            foreach ($re as $row) {
                
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
        } catch (Exception $ex) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Actualiza un registro de la bases de datos basado
     * en los nuevos valores relacionados con un identificador
     *
     * @param $userID      identificador
     * @param $nombre      nuevo nombre
     * @param $apellido    nueva apellido
     * @param $sexo        sexo de usuario
     * @param $pass        contraseña
     * @param $fecha_ini   fecha inicial
     * @param $fecha_fin   fecha final
     * @param $email       email
     */
    public static function update($userID, $nombre, $apellido, $sexo, $pass, $fecha_ini, $fecha_fin, $email) {
        // Creando consulta UPDATE
        $consulta = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', sexo='$sexo', pass='$pass', fechai='$fecha_ini', fechaf='$fecha_fin', email='$email' WHERE userid='$userID'";

        try {

            global $con;
            $re = $con->Execute($consulta);
            echo $re;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    /**
     * Eliminar el registro con el identificador especificado
     *
     * @param $userID identificador de la meta
     * @return bool Respuesta de la eliminación
     */
    public static function eliminar($userID) {
        // Sentencia DELETE
        $comando = "DELETE *FROM usuario WHERE userid='$userID'";

        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(array($userID));
    }

    public function verificarUser($mail, $pass) {
        $query = "SELECT *FROM usuario where email = '$mail' and pass = '$pass'";
        try {
            global $con;
            $re = $con->Execute($query);
            foreach ($re as $row) {
                $userid = $row["userid"];
                $nombre = $row["nombre"];
                $apellido = $row["apellido"];
                $sexo = $row["sexo"];
                $pass = $row["pass"];
                $fecha_ini = $row["fechai"];
                $fecha_fin = $row["fechaf"];
                $email = $row["email"];
                $user = new Usuario($userid, $nombre, $apellido, $sexo, $pass, $fecha_ini, $fecha_fin, $email);
                //var_dump($coment);
                $lista[$cont++] = $user;
            }
            return $lista;
        } catch (Exception $ex) {
            echo $exc->getTraceAsString();
        }
    }

}
