<?php


  $server='localhost';
  $user='root';
  $pass='';
  $db='depormundo';
  $con=mysql_connect($server,$user,$pass)or die("no se ha podido conectar");
  $sdb=mysql_select_db($db,$con)or die("no existe la base ");

?>
