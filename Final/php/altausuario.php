<?php include ('funciones.php');?>

<?php
if(!isset($_POST['nombre']) && !isset($_POST['correo']) && !isset($_POST['password']))
{
  header("Location: crearusuario.php");
}
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$pass=$_POST['password'];
$fecha=$_POST['fecha'];
$tarjeta=$_POST['tarjeta'];
$direccion=$_POST['direccion'];
  $hi=mysql_query("SELECT idhistorial FROM `historialcompra` ORDER BY Idhistorial DESC LIMIT 1 ")or die(mysql_error());
  mysql_query("insert into historialcompra (idhistorial) values('.$hi.')")or die(mysql_error());
  mysql_query("insert into usuario (Nombre, Correo, Password, `Fecha de Nacimiento`, `Tarjeta bancaria`, Direccion, idhistorial) values(
          '".$nombre."',
          '".$correo."',
          '".$pass."',
          ".$fecha.",
          ".$tarjeta.",
          '".$direccion."',
          '".$hi."'
    )")or die(mysql_error());
    header("Local: ../index.php");
 ?>
