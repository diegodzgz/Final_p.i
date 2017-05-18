<?php include ('funciones.php');?>
<!DOCTYPE html>
<html>
  <?php include ('header.php'); ?>
  <body>
    <?php include 'top.php'; ?>
    <form class="" action="altausuario.php" method="post" enctype="multipart/form-data">
      <fieldset>
        Nombre <br>
        <input type="text" name="nombre" >
      </fieldset>
      <fieldset>
        Correo <br>
        <input type="text" name="correo" >
      </fieldset>
      <fieldset>
        Password <br>
        <input type="text" name="password" >
      </fieldset>
      <fieldset>
        Fecha de Nacimiento <br>
        <input type="int" name="fecha" >
      </fieldset>
      <fieldset>
        Tarjeta <br>
        <input type="text" name="tarjeta" >
      </fieldset>
      <fieldset>
        Direccion <br>
        <input type="text" name="direccion" >
      </fieldset>
      <input type="submit" name="accion" value="Enviar" class="aceptar">
    </form>
    <?php include ('bot.php'); ?>
  </body>
</html>
