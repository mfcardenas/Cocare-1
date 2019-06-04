<?php
//manejar la session
class UserSession{

    //para inicailizar las sesiones con sessionstart
    public function __construct(){
        session_start();
    }

    //ayudar a ponerle un valor a mi session actual
    //para establer usuario actual
    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    //para obtener usuario actual
    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    //cerrar la session
    public function closeSession(){
        session_unset();//borra los valores de la sesion
        session_destroy();//destruye las sesiones
    }
}
?>