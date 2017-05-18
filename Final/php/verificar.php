  <?php include ('funciones.php'); ?>
<?php
$re=mysql_query("select * from usuario where (nombre='".$_POST['Usuario']."' or Correo='".$_POST['Usuario']."')
                 and Password='".$_POST['Password']."'") or die(mysql_error());
while ($f=mysql_fetch_array($re)) {
  $arreglo= array('idusuario' => $f['idusuario'],
                  'Nombre' => $f['Nombre'],
                  'Correo' => $f['Correo'],
                  'Fecha de Nacimiento' => $f['Fecha de Nacimiento'],
                  'Tarjeta bancaria' => $f['Tarjeta bancaria'],
                  'Direccion' => $f['Direccion']
                  );
}
    if (isset($arreglo)) {
      $_SESSION['Usuario']=$arreglo;
          if ($arreglo['idusuario']==1) {
            header("Location: admin.php");
          }
    }else {
      header("Location: login.php?error=datos no validos");
    }
 ?>
