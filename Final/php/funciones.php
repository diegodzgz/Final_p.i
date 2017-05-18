<?php
session_start();

  $server='localhost';
  $user='root';
  $pass='';
  $db='depormundo';
  $con=mysql_connect($server,$user,$pass)or die("no se ha podido conectar");
  $sdb=mysql_select_db($db,$con)or die("no existe la base ");

?>
<?php

if (isset($_SESSION['carrito'])) {
if (isset($_GET['idproducto'])) {
$arreglo=$_SESSION['carrito'];
$encontro=false;
$numero=0;
for ($i=0; $i <count($arreglo) ; $i++) {
  if ($arreglo[$i]['Idproducto']==$_GET['idproducto']) {
    $encontro=true;
    $numero=$i;
  }}
  if ($encontro==true) {
    $arreglo[$numero]['cantidad']=$arreglo[$numero]['cantidad']+1;
    $_SESSION['carrito']=$arreglo;
  }else {
    $nombre="";
    $precio=0;
    $fotos="";
    $re=mysql_query("SELECT * FROM producto where idproducto=".$_GET['idproducto']);
    while ($f=mysql_fetch_array($re)) {
      $nombre=$f['Nombre'];
      $precio=$f['Precio'];
      $fotos=$f['Fotos'];
    }
    $datosnuevos=array('Idproducto'=>$_GET['idproducto'],
                      'nombre'=>$nombre,
                      'precio'=>$precio,
                      'fotos'=>$fotos,
                        'cantidad'=>1);
    array_push($arreglo,$datosnuevos);
    $_SESSION['carrito']=$arreglo;

  }
}
}else {
if (isset($_GET['idproducto'])) {
  $nombre="";
  $precio=0;
  $fotos="";
  $re=mysql_query("SELECT * FROM producto where idproducto=".$_GET['idproducto']);
  while ($f=mysql_fetch_array($re)) {
    $nombre=$f['Nombre'];
    $precio=$f['Precio'];
    $fotos=$f['Fotos'];
  }
  $arreglo[]=array('Idproducto'=>$_GET['idproducto'],
                    'nombre'=>$nombre,
                    'precio'=>$precio,
                    'fotos'=>$fotos,
                      'cantidad'=>1);
  $_SESSION['carrito']=$arreglo;
}
}

$rdeporte = mysql_query('SELECT * FROM deporte');
if (!$rdeporte) {
    die('Consulta no válida: ' . mysql_error());
  }
  $rmarca = mysql_query('SELECT * FROM marca');
  if (!$rmarca) {
      die('Consulta no válida: ' . mysql_error());
    }
?>
