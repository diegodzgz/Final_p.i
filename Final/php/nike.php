
<?php include 'funciones.php'; ?>
<html>
  <?php include 'header.php'; ?>
  <body>
    <?php include 'top.php'; ?>

    <?php

    $resultado = mysql_query('SELECT * FROM producto where Marca=1');
    if (!$resultado) {
        die('Consulta no válida: ' . mysql_error());
      }
      while ($f=mysql_fetch_array($resultado)) {
?>


<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <img src="..\img\<?php echo $f['Fotos'];?>" alt="">
        <div class="caption">
          <h4 class="pull-right"><?php echo $f['Precio']; ?></h4>
            <h4><a ><?php echo $f['Nombre'];?></a>

            </h4>
            <p><?php echo $f['Descripcion'];  ?></p>
        </div>
        <a href="carrito.php?idproducto=<?php echo $f['idproducto'];?>">Añadir al carrito</a>
    </div>
</div>
  </div>
  </div>

    <?php }?>

    <?php include ('bot.php'); ?>


  </body>
</html>
