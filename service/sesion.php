<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$email=$_REQUEST["email"];
        $pass=$_REQUEST["pass"];
        $usu = new DaoUsuario();
$lista = $usu->iniciar($email, $pass);
echo json_encode($lista);
        
?>
