<?php include ('funciones.php');
if (isset($_SESSION['Usuario'])) {
}else {
  header("Location: ../index.php?Error=Acceso denegado");
}


?>

<!DOCTYPE html>


<html>
  <?php include ('header.php'); ?>
  <body>
    <?php include ('admintop.php'); ?>

      <center>Ultimas Compras </center>
          <table class="table">
            <tr>
              <td class="col-xs-2">Imagen</td>
              <td>Nombre</td>
              <td>Precio</td>
              <td>Cantidad</td>
              <td>Subtotal</td>
            </tr>
            <?php include ('fcompras.php'); ?>
          </table>
    <?php include ('bot.php'); ?>
  </body>

</html>
