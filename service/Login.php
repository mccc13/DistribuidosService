<?php

require '../negocio/DaoUsuario.php';

$email = $_REQUEST["email"];
$pass = $_REQUEST["pass"];

$usu = new DaoUsuario();
$lista = $usu->verificarUser($email, $pass);
echo json_encode($lista);


?>
