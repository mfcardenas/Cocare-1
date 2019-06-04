<?php

include '../controlador/usuarios/UsuarioControlador.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["txtNombre"]) && isset($_POST["txtEmail"]) && isset($_POST["txtUsuario"]) && isset($_POST["txtPassword"])) {

        $txtNombre     =($_POST["txtNombre"]);
        $txtEmail      = ($_POST["txtEmail"]);
        $txtUsuario    =($_POST["txtUsuario"]);
        $txtPassword   =($_POST["txtPassword"]);
        $txtPrivilegio = 1;

            if (UsuarioControlador::crearUsuario($txtNombre, $txtEmail, $txtUsuario, $txtPassword, $txtPrivilegio, null)) {
                $link = mysqli_connect("localhost", "root", "");
            if ($link) {
                mysqli_select_db($link, "pasantia");
            }
            $checkbox = $_POST['checkbox'];

            $query = "SELECT MAX(users.id_users)id from users";
            $resultado = mysqli_query($link, $query);
              $result = mysqli_fetch_object($resultado); 
            $nombre = $result->id;
            foreach ($checkbox as $llave => $valor) {
                //  $ficha2 = "INSERT INTO RESPUESTA values id_opciones='$valor'";
                 $sql = "SELECT opciones.id_opciones, pregunta.id_pregunta FROM opciones INNER JOIN pregunta "
                         . "ON opciones.id_pregunta = pregunta.id_pregunta WHERE opciones.id_opciones= '$valor'";
                  $resultado2 = mysqli_query($link, $sql);
                  $result2 = mysqli_fetch_object($resultado2); 
                  $id_pregunta= $result2->id_pregunta; 
                $ficha2 = "INSERT INTO RESPUESTA values(null,'$valor','$nombre','$id_pregunta')";
                $ejecutar = mysqli_query($link, $ficha2);
              
                echo $valor;
            }
            header("location:login.php");
            } else {
            echo 'error';
            }
        

    }
} 
