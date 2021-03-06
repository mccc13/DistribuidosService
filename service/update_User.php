<?php

require '../negocio/DaoUsuario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Decodificando formato Json
    $body = json_decode(file_get_contents("php://input"), true);

    // Actualizar usuario
    $retorno = DaoUsuario::update($body['userID'], $body['nombre'], $body['apellido'], $body['sexo'], $body['pass'], $body['fecha_ini'], $body['fecha_fin'], $body['email']);


    if ($retorno) {
        // Código de éxito
        print json_encode(
            array(
                'estado' => '1',
                'mensaje' => 'Actualización exitosa')
        );
    } else {
        // Código de falla
        print json_encode(
            array(
                'estado' => '2',
                'mensaje' => 'Actualización fallida')
        );
    }
}