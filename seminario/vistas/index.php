<?php
    
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba</title>
   
  </head>
  <body>
      <h1 align="center"><strong>BIENVENIDOS</strong></h1>
    <?php if(!empty($user)): ?>      
      <a href="pages/logout.php">
        Logout
      </a>

    <?php else: ?>      
           <br>    <br>    <br>  <h2 align="center">Por favor Ingresa o Registrate    </h2>
          <br>    <br>  
           <h1 align="center">     
      <a href="login.php">Iniciar Sesion</a> O
      <a href="crear_usuario_form.php">Registrar</a> </h1>
          
         
          
          
    <?php endif; ?>
  </body>
</html>