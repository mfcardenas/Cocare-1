<?php
$link = mysqli_connect("localhost", "root", "");
if ($link) {
    mysqli_select_db($link, "pasantia");
}
//    $checkbox= $_POST['checkbox'];
//   // foreach($checkbox as $llave => $valor){
//     //  $ficha2 = "INSERT INTO RESPUESTA values id_opciones='$valor'";
//        
//     //  $ficha2 = "INSERT INTO RESPUESTA values(null,'$valor')";
//      // $ejecutar= mysqli_query($link, $ficha2);
//       //echo $valor;
//    
//    }
?>
<a href='index.php'><strong>PRINCIPAL</strong></a>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>crear</title>

<?php include 'partials/head.php'; ?>
    </head>
    <body>

    <center>

        <div class="mx-auto" style="width: 1000px;  ">

            <div class="starter-template">
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form action="crear_usuario_logic.php" method="POST" role="form">

                                    <legend>Crear nuevo usuario</legend>

                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" name="txtNombre" class="form-control" id="nombre" autofocus required placeholder="Ingresa tu nombre" value="">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" name="txtEmail" class="form-control" id="email"  required placeholder="Ingresa tu dirección de e-mail" value="">
                                    </div>

                                    <div class="form-group">
                                        <label for="usuario">Usuario</label>
                                        <input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="usuario" value="">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="txtPassword" class="form-control" required id="password" placeholder="****">
                                    </div>

                    <!--                                      <span name="physical_disability"> Posee alguna discapacidad </span>
                        <label><input type="checkbox" value="running" name="running"/>Cardiovascular </label>  
                        <label><input type="checkbox" value="jogging" name="jogging"/> </label> 
                        <label><input type="checkbox" value="aerobic_dance" name="aerobic_dance"/>Bailar </label>
                        
                                    -->


<?php
$cont = 0;
$aux = 0;
$sql = "SELECT pregunta.nombre_pregunta, pregunta.id_pregunta from pregunta;";


$red = mysqli_query($link, $sql);

                                        while ($result = mysqli_fetch_object($red)) {

                                            echo '<h1>' . $result->nombre_pregunta . '</h1>';

                                            $sql2 = "SELECT  pregunta.id_pregunta,  pregunta.nombre_pregunta, opciones.id_opciones, opciones.opcion "
                                                    . "FROM pregunta INNER JOIN opciones ON opciones.id_pregunta= pregunta.id_pregunta where pregunta.id_pregunta=" . $result->id_pregunta;

                                            $red2 = mysqli_query($link, $sql2);
                                            while ($result2 = mysqli_fetch_object($red2)) {


                                                echo'  <input type="checkbox" name="checkbox[]" value="' . $result2->id_opciones . '" />  ' . '<span>' . $result2->opcion . '</span> ';
                                            }
                                        }


                                        echo '<br>';
                                        ?>

                                    <br>                                          

                                    <button type="submit" class="btn btn-primary"> Agregar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </div>

<?php include 'partials/footer.php'; ?>