<?php include ('funciones.php'); ?>
<!DOCTYPE html>
<html>
  <?php include ('header.php'); ?>
  <body>
      <?php include ('top.php'); ?>
<center>
  <form class="form" action="verificar.php" method="post"><br>
    <?php
      if (isset($_GET['error'])) {
        echo "<center>DATOS NO VALIDOS</center>";
      }
     ?>
    <label for="usuario">Usuario</label><br>
    <input type="text" id="usuario" name="Usuario" placeholder="usuario"value><br>
    <label for="password">Password</label><br>
    <input type="password" id="password" name="Password" placeholder="password"><br>
    <input type="submit" name="aceptar" value="Aceptar" class="aceptar">
  </form>
</center>
<center> <a href="crearusuario.php">CREAR CUENTA</a></center>
  <?php include ('bot.php'); ?>
  </body>
</html>
