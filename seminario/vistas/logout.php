<?php
include_once '../controlador/usuarios/user_session.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$closeSesion = new UserSession();
$closeSesion->closeSession();
header('Location:index.php')

?>


