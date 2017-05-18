
<?php include 'funciones.php'; ?>
<!DOCTYPE html>
<html>
  <?php include 'header.php'; ?>
  <body>
    <?php include 'top.php'; ?>

    <?php

    $resultado = mysql_query('SELECT * FROM deporte');
    if (!$resultado) {
        die('Consulta no válida: ' . mysql_error());
      }
      while ($f=mysql_fetch_array($resultado)) {
?>


    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <img src="..\img\<?php echo $f['Fotos'];?>" alt="">
            <div class="caption">
                <h4><a href="<?php echo $f['Nombre_Deporte'];?>.php"><?php echo $f['Nombre_Deporte'];?></a>
                </h4>
                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
  </div>
  </div>

    <?php }?>


    <?php include ('bot.php'); ?>

  </body>
</html>
