<?php include ('funciones.php'); ?>

<?php
if($_POST['Caso']=="Eliminar"){
  mysql_query("delete from producto where idproducto=".$_POST['Id'])or die(mysql_error());
  echo "el producto se elimio";
}
if($_POST['Caso']=="Modificar"){
  mysql_query("update producto set Nombre='".$_POST['Nombre']."'where idproducto=".$_POST['Id'])or die(mysql_error());
  mysql_query("update producto set Descripcion='".$_POST['Descripcion']."'where idproducto=".$_POST['Id'])or die(mysql_error());
  mysql_query("update producto set Precio='".$_POST['Precio']."'where idproducto=".$_POST['Id'])or die(mysql_error());
  mysql_query("update producto set  `Cantidad en Almacen`='".$_POST['Cantidad']."'where idproducto=".$_POST['Id'])or die(mysql_error());
  mysql_query("update producto set Origen='".$_POST['Origen']."'where idproducto=".$_POST['Id'])or die(mysql_error());
}



 ?>
