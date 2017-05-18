<?php include ('funciones.php'); ?>
<?php
  $arreglo=$_SESSION['carrito'];
  for ($i=0; $i <count($arreglo) ; $i++) {
    if ($arreglo[$i]['Idproducto']!=$_POST['Id']) {
      $datosnuevos[]= array('Idproducto' =>$arreglo[$i]['Idproducto'],
                            'nombre' =>$arreglo[$i]['nombre'],
                            'precio' =>$arreglo[$i]['precio'],
                            'fotos' =>$arreglo[$i]['fotos'],
                            'cantidad' =>$arreglo[$i]['cantidad'],
                            );
    }
    if (isset($datosnuevos)) {
      $_SESSION['carrito']=$datosnuevos;
    }else {
      unset($_SESSION['carrito']);
      echo '0';
    }
  }
 ?>
