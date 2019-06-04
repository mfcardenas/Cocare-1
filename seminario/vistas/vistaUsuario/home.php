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

          
          <a href="../logout.php">Cerrar Sesion</a>
          
         
    <?php endif; ?>
  </body>
</html>