<?php include ('funciones.php'); ?>
<?php
$arreglo=$_SESSION['carrito'];
$total=0;
$numero=0;
for ($i=0; $i <count($arreglo) ; $i++) {
  if ($arreglo[$i]['Idproducto']==$_POST['Id']){
    $numero=$i;
    }
  }
  $arreglo[$numero]['cantidad']=$_POST['Cantidad'];
  for ($i=0; $i <count($arreglo) ; $i++) {
    $total=($arreglo[$i]['precio']*$arreglo[$i]['cantidad'])+$total;
    }
    $_SESSION['carrito']=$arreglo;
    echo $total;
?>
