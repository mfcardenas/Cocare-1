<?php

include '../modelo/UsuarioDao.php';

class UsuarioControlador
{
    //imprimir todos los usuarios
    public function getUsuarios()
    {
        return UsuarioDao::getUsuarios();
    }
    //para crear usuario
    public function crearUsuario($nombre, $email, $usuario, $password, $privilegio, $id)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setNombre($nombre);
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setEmail($email);
        $obj_usuario->setPrivilegio($privilegio);
        $obj_usuario->setPassword($password);
      
        return UsuarioDao::crearUsuario($obj_usuario);
    }
//para imprimir por getuser
    public function setUser($user)
    {
        return UsuarioDao::setUser($user);
    }
    //para eliminar el usuario
    public function eliminarUsuario($id)
    {
        return UsuarioDao::eliminarUsuario($id);
    }

     public function userExist($email, $pass){
     
            return UsuarioDao::userExists($email, $pass);

     }
}
