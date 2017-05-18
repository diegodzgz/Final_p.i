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

    <table class="table">
      <tr>
        <td>idproducto</td>
        <td>Nombre</td>
        <td>Descripcion</td>
        <td>Precio</td>
        <td>Cantidad en Almace</td>
        <td>Origen</td>
        <td>Deporte</td>
        <td>Marca</td>
        <td>Eliminar</td>
        <td>Modificar</td>
      </tr>
      <?php include ('funcionmod.php'); ?>
    </table>
    <?php include ('bot.php'); ?>
  </body>

</html>
