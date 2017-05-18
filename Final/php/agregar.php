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

    <center><h1>AGREGAR PRODUCTO</h1> </center>

    <form class="" action="altaproducto.php" method="post" enctype="multipart/form-data">
      <fieldset>
        Nombre <br>
        <input type="text" name="nombre" >
      </fieldset>
      <fieldset>
        Descripcion <br>
        <input type="text" name="descripcion" >
      </fieldset>
      <fieldset>
        Imagen <br>
        <input type="text" name="file" >
      </fieldset>
      <fieldset>
        precio <br>
        <input type="int" name="precio" >
      </fieldset>
      <fieldset>
        Cantidad en Almacen <br>
        <input type="int" name="almacen" >
      </fieldset>
      <fieldset>
        Origen <br>
        <input type="text" name="origen" >
      </fieldset>
      <fieldset>
        Deporte <br>
        <select class="" name="deporte">
          <?php
          while ($m=mysql_fetch_array($rdeporte)) {
          ?>
          <option value="<?php echo $m['idDeporte']; ?>"><?php echo $m['Nombre_Deporte']; ?></option>
          <?php }?>
        </select>
      </fieldset>
      <fieldset>
        Marca <br>
        <select class="" name="marca">
          <?php
          while ($m=mysql_fetch_array($rmarca)) {
          ?>
          <option value="<?php echo $m['idMarca']; ?>"><?php echo $m['Nombre']; ?></option>
          <?php }?>
        </select>
      </fieldset>
      <input type="submit" name="accion" value="Enviar" class="aceptar">
    </form>




    <?php include ('bot.php'); ?>
  </body>

</html>
