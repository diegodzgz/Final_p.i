<?php
session_start();
include ('funciones.php');

?>
<!DOCTYPE html>
<html>
<?php include ('header.php'); ?>

  <body>
    <?php include ('top.php'); ?>

    <?php
        $total=0;
      if (isset($_SESSION['carrito'])) {
        $datos=$_SESSION['carrito'];
        $total=0;
        for ($i=0; $i <count($datos) ; $i++) {


      }
      ?>
      <div class="col-sm-4 col-lg-4 col-md-4">
          <div class="thumbnail">
              <img src="..\img\<?php echo $datos[$i]['Imagen'];?>" >
              <div class="caption">
                <h4 class="pull-right"><?php echo $datos[$i]['precio']; ?></h4>
                  <h4><a ><?php echo $datos[$i]['nombre'];?></a> </h4>
                  <span>Cantidad: <input type="text"  value="<?php echo $datos[$i]['cantidad'] ; ?>"></span>
                  <span>Subtotal: <?php echo $datos[$i]['cantidad']*$datos[$i]['precio'] ; ?></span>
              </div>
          </div>
      </div>

      <?php
      $total=($datos[$i]['cantidad']*$datos[$i]['precio'])+$total;
    }
      else {
        echo '<center><h2>EL CARRITO ESTA VACIO</h2></center>';
      }
      echo '<center><h2>Total='.$total.'</h2></center>';
     ?>
  </body>
</html>
