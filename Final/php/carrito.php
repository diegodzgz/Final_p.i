<?php include ('funciones.php'); ?>
<!DOCTYPE html>
<html>
<?php include ('header.php'); ?>

  <body>
    <?php include ('top.php'); ?>
    <?php
        $total=0;
      if (isset($_SESSION['carrito'])) {
        $datos=$_SESSION['carrito'];
        for ($i=0; $i <count($datos) ; $i++) {



      ?>
      <div class="col-sm-4 col-lg-4 col-md-4">
          <div class="thumbnail">
              <img src="..\img\<?php echo $datos[$i]['fotos'];?>" >
              <div class="caption">
                <h4 class="pull-right"><?php echo $datos[$i]['precio']; ?></h4>
                  <h4><a ><?php echo $datos[$i]['nombre'];?></a> </h4>
                  <span>Cantidad: <input type="text"  value="<?php echo $datos[$i]['cantidad'] ; ?>" data-precio="<?php echo $datos[$i]['precio']; ?>" data-id="<?php echo $datos[$i]['Idproducto'];?>" class="cantidad"></span><br>
                  <span class="subtotal">Subtotal: <?php echo $datos[$i]['cantidad']*$datos[$i]['precio'] ; ?></span><br>
                  <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Idproducto']; ?>">Eliminar</a>
              </div>
          </div>
      </div>

      <?php
      $total = $total+ ($datos[$i]['cantidad'] * $datos[$i]['precio']) ;
    }

    }
      else {
        echo '<center><h2>EL CARRITO ESTA VACIO</h2></center>';
      }
      echo '<center><h2 id="total">Total='.$total.'</h2></center>';

      if ($total != 0) {
        echo '<center><a href="compras.php" class="aceptar">Comprar</a></center>';
      }
     ?>


      <?php include ('bot.php'); ?>

  </body>

</html>
