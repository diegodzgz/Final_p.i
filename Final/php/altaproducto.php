<?php include ('funciones.php');?>

<?php
if(!isset($_POST['nombre']) && !isset($_POST['descripcion']) && !isset($_POST['precio']) && !isset($_POST['deporte']) && !isset($_POST['marca']))
{
  header("Location: agregar.php");
}
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$imagen=$_POST['file'];
$precio=$_POST['precio'];
$almacen=$_POST['almacen'];
$origen=$_POST['origen'];
$deporte=$_POST['deporte'];
$marca=$_POST['marca'];
  mysql_query("insert into producto (Nombre, Descripcion, Fotos, Precio, `Cantidad en Almacen`, Origen, Deporte, Marca) values(
          '".$nombre."',
          '".$descripcion."',
          '".$imagen."',
          ".$precio.",
          ".$almacen.",
          '".$origen."',
          ".$deporte.",
          ".$marca."
    )")or die(mysql_error());
    header("Local: agregar.php");
 ?>
