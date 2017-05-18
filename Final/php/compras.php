<?php include ('funciones.php'); ?>
<?php

    $arreglo=$_SESSION['carrito'];
    $numeroventa=0;
    $re=mysql_query('SELECT * FROM compras ORDER BY numeroventa DESC LIMIT 1 ')or die(mysql_error());
      while ($f=mysql_fetch_array($re)) {
        $numeroventa=$f['numeroventa'];
      }
      if ($numeroventa==0) {
        $numeroventa=1;
      }else {
        $numeroventa=$numeroventa + 1;
      }
      for ($i=0; $i <count($arreglo) ; $i++) {
        mysql_query("INSERT INTO compras (numeroventa, imagen, nombre, precio, cantidad, subtotal) values(
          ".$numeroventa.",
          '".$arreglo[$i]["fotos"]."',
          '".$arreglo[$i]["nombre"]."',
          '".$arreglo[$i]["precio"]."',
          '".$arreglo[$i]["cantidad"]."',
          '".($arreglo[$i]["precio"]*$arreglo[$i]['cantidad'])."'
          )");
      }

      unset($_SESSION['carrito']);


 ?>
<!DOCTYPE html>
<html>
  <?php include ('header.php'); ?>
  <body>
    <?php include ('top.php'); ?>


    <?php include ('bot.php'); ?>
  </body>
</html>
